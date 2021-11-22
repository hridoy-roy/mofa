<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function visit()
    {
        return view('frontend.visit');
    }
    public function exhibitions()
    {
        return view('frontend.exhibitions');
    }
    public function exhibitionsDetails()
    {
        return view('frontend.exhibitions_details');
    }
    public function learn()
    {
        return view('frontend.learn');
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function shopDetails()
    {
        return view('frontend.shop_details');
    }

    // User Function 
    public function becomeAMember(){
        return view('frontend.become_a_member');
    }
    public function donate(){
        return view('frontend.donate');
    }
    public function joinForm(){
        return view('frontend.join_form');
    }
    public function profile(){
        return view('frontend.profile');
    }
    public function logIn(){
        return view('frontend.login');
    }
    public function contact(){
        return view('frontend.contact');
    }

}
