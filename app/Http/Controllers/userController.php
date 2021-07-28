<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class userController extends Controller
{
        //student Login
        
        function login(Request $req)
        {
    
            
            $user = User::where(['email'=>$req->email])->first();
    
            if(!$user || !Hash::check($req->password, $user->password))
            {
                return redirect('/login');
            }
            else{
                $req->session()->put('user',$user);
    
                return redirect('/');
            }
            
        }
       

}


