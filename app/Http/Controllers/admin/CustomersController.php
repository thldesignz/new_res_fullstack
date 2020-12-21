<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function allOffersMembers(){
        return view('admin/customers/all-offers-members');
    }
    public function allReservation(){
        return view('admin/customers/all-reservations');
    }
}
