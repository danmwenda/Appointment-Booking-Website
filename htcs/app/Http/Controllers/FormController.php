<?php

namespace App\Http\Controllers;


use App\Models\User_table;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\info;

class FormController extends Controller
{

    function showform()
    {
        return view('form');
    }

    function datainsert(Request $request){

        
           
             $name = $request->input('name');
             $email = $request->input('email');
             $phone = $request->input('phone');
             $date = $request->input('date');

            $isInsertSuccess = info::insert(['name' => $name,
                                                    'email' => $email,
                                                    'phone' =>$phone,
                                                    'date' => $date
        ]);

        if ($isInsertSuccess)
        return redirect('form')->with('success','Thank You for Booking You will be contacted soon');
            else
        return redirect('form')->with('error','Error Booking appointment, Try Again!');


    }

    
}