<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomeIndex()
    {
        return view('home');
    }

    function form()
    {
        return view('form');
    }

    function admin()
    {
        return view('admin');
    }

    function formconfig()
    {
        return view('formconfig');
    }


}
