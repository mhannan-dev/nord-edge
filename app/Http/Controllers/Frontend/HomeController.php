<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function getIndex(){
        
        return view('frontend.home');
    }
}