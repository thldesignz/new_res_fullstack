<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Reservation;
use App\Models\GeneralSetting;
use App\Models\SocialSetting;
use App\Models\FoodCategory;
use App\Models\FoodItem;


use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function about(){

        return view('pages/about');
    }
    public function waitlist(){
        return view('pages/waitlist');
    }
    public function reservation(){
        return view('pages/reservation');
    }

    public function saveReservation(){

        request()->validate([
           'fname' => ['required', 'string'],
           'lname' => ['required', 'string'],
           'email' => ['required', 'string'],
           'phone_number' => ['required', 'string'],
           'guest_total' => ['required', 'string'],
           'time' => ['required', 'string'],
       ]);

        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_total = request('guest_total');
        $reservation->time = request('time');
        $reservation->save();

        return redirect('/reservation/thank-you2');
       }

    public function offers(){
        return view('pages/offers');
    }

    public function registerMember(){

     request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string', 'max:255'],
        ]);

         $member = new Member();
         $member->fname = request('fname');
         $member->lname = request('lname');
         $member->email = request('email');
         $member->phone_number = request('phone_number');
         $member->save();


        return redirect('/offers/thank-you');

    }

    public function offersThankYou(){

        return view('pages/thank-you');
    }

    public function reservationThankYou(){

        return view('pages/thank-you2');
    }

    public function contact(){
        return view('pages/contact');
    }
    public function home(){
        $categories = FoodCategory::All();

        return view('landing-page',[
            'categories' => $categories
        ]);
    }
    public function menu(){

            $categories = FoodCategory::All();



            return view('menu/all-categories',[
                'categories' => $categories
            ]);

    }
    public function singleMenu($slug){
       $foodCategory = FoodCategory::where('title', '=', $slug)->first();
        $foodItems = FoodItem::where('category_id', '=', $foodCategory->id)->get();

        return view('menu/single-menu', [
            "foodItem" => ucfirst($slug),
            "foodItems" => $foodItems
        ]);
    }
}
