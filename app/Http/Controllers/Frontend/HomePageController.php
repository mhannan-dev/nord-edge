<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


class HomePageController extends Controller
{
    public function getIndex(){
        
        return view('frontend.pages.home');
    }

    
     public function getAbout(){
        
        return view('frontend.pages.about');
    }

     public function getService(){
        
        return view('frontend.pages.service');
    }

     public function getProject(){
        
        return view('frontend.pages.projects');
    }

     public function getContact(){
        
        return view('frontend.pages.contact');
    }

    
    

}