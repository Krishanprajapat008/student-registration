<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\userinfo;

class studentController extends Controller
{
    public function create()
 
    {
        return view('create');
    }
 
    // public function show(Request $request)
 
    // {
    //     $input = $request->all();
 
    //     $request->validate([
    //         'fname' => 'required|max:255',
    //         'lname' => 'required|max:255',
    //         'gender' => 'required',
    //         'phone' => 'required|min:10',
    //         'address' => 'required|max:255',
    //         'email' => 'required|email|max:255',
    //         'password' => 'required|min:6|max:255',
            
    //     ]);
 
    // }

    function show (Request $req){

        $store = new userinfo();

        $store->fname = $req->fname;
        $store->lname = $req->lname;
        $store->gender = $req->gender;
        $store->email = $req->email;
        $store->address = $req->address;
        $store->phone = $req->phone;
        $store->Mobile = $req->mobile;
        $store->state = $req->state;
        $store->pin = $req->pin;
        $store->city = $req->city;
        $store->country = $req->country;
        $store->password = $req->password;
        $store->cnfpassword = $req->cnfpassword;
        $store->fimg = $req->fimg;

        $store->save();

        return redirect('register');



    }
 
}
