<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $page_title = 'Home - Borno SUBEB';
        return view('welcome', compact('page_title'));
    }

    public function aboutUs(){
        $page_title = 'About Us - Borno SUBEB';
        return view('about-us', compact('page_title'));
    }
    
    public function departments(){
        $page_title = 'Departments - Borno SUBEB';
        return view('departments', compact('page_title'));    
    }
    
    public function besda(){
        $page_title = 'BESDA - Borno SUBEB';
        return view('besda', compact('page_title'));    
    }
    
    public function unicef(){
        $page_title = 'UNICEF - Borno SUBEB';
        return view('unicef', compact('page_title'));    
    }
    
    public function contactUs(){
        $page_title = 'Contact Us - Borno SUBEB';
        return view('contact-us', compact('page_title'));    
    }
}
