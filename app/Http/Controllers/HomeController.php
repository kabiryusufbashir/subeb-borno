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
}
