<?php

namespace App\Http\Controllers;

class NavbarController extends Controller{

    function services(){

        return view('services');
    }

    function about(){

        return view('about');
    }

    function contacts(){

        return view('contacts');
    }
}
