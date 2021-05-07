<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $estimated_income_last30 = DB::select(DB::raw('
            SELECT
            (sum(guest_total) * 27 ) as total
            FROM newresfull.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '));
        $estimated_income_last30 = $estimated_income_last30[0]->total;

        $total_customers = DB::select(DB::raw('
            SELECT
            sum(guest_total) as total
            FROM newresfull.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '));

        $total_customers= $total_customers[0]->total;

        $total_reservations = DB::select(DB::raw('
            SELECT
            COUNT(*) as total
            FROM newresfull.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '));

        $total_reservations= $total_reservations[0]->total;

        $total_users = DB::select(DB::raw('
            SELECT count(*)as total
            FROM newresfull.users
            inner join role_user on role_user.user_id = users.id
            inner join roles on roles.id = role_user.role_id
            where role_id = 2
        '));

        $total_users= $total_users[0]->total;

        $latestReservations = Reservation::where('guest_total', '>', 0)->limit(5)->orderBy('created_at', 'desc')->get();

        return view('admin/dashboard', [
            "estimated_income_last30" => "$".$estimated_income_last30,
            "total_customers" => $total_customers,
            "total_reservations" => $total_reservations,
            "total_users" => $total_users,
            "latestReservations" => $latestReservations
        ]);




    }

    public function dailyRevenueLast30(){




        // return $estimated_income_daily = DB::select(DB::raw('
        // SELECT
        // DATE_FORMAT(created_at, "%Y-%m-%d") as reserved_day,
        // (SUM(guest_total)*47) as estimated_earnings,
        // count(*) as total_reservations
        // FROM newresfull.reservations
        // group by reserved_day desc;
        // '));
        // $estimated_income_daily = $estimated_income_daily[0]->total;

        return $estimated_income_daily = DB::select(DB::raw('
        SELECT
        DATE_FORMAT(created_at, "%Y-%m-%d") as x,
        (SUM(guest_total)*47) as y
        FROM newresfull.reservations
        group by x desc;
        '));
        $estimated_income_daily = $estimated_income_daily[0]->total;

    }
}


// 311
