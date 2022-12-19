<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    function show()
    {
        return view('login');
    }

    public function login(Request $request){

        
        
        if(isset($_POST['submit'])){

            session_start();
           
             $username = $request->input('username');
             $password = $request->input('password');

            $sql = DB::table('user_session')->where(['username'=>$username, 'password'=>$password])->get();
             //$sql ="SELECT * FROM user_session WHERE Username ='$username' AND Password = '$password'";
           //die($sql);
             //$result = $conn->query($sql);
           
           if(count($sql)>0){
              $_SESSION['username']= $username;
               header("location:/client");
               die;
           }
           else{
           echo "<script>
             alert('Incorrect Username or Password');
              </script>";
           }
        }

    }

    
}