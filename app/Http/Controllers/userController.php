<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\student;
use App\Models\userinfo;

class userController extends Controller
{
        //student Login

        function login(Request $req)
        {
    
            
            $user = userinfo::where(['email'=>$req->email])->first();
    
            if(!$user || !Hash::check($req->password, $user->password))
            {
                // return redirect('/login');
                return "Login Failed";
            }
            else{
                // $req->session()->put('user',$user);
    
                //return redirect('/');
                return "login sucesss";
            }
            
        }
       

}


