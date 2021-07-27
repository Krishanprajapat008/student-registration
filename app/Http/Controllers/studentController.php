<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function create()
 
    {
        return view('create');
    }
 
    public function store(Request $request)
 
    {
        $input = $request->all();
 
        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'gender' => 'required',
            'phone' => 'required|min:10',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255',
            
        ]);
 
        $input['password'] = bcrypt($input['password']);
        Student::create($input);
 
        return back()->with('success','Successfully registered a new student!');
 
    }

    function update (Request $req){

        $store = new student();

        $store->fname = $req->fname;
        $store->lname = $req->lname;
        $store->gender = $req->gender;
        $store->email = $req->email;
        $store->address = $req->address;
        $store->phone = $req->phone;
        $store->mobile = $req->mobile;
        $store->state = $req->state;
        $store->pin = $req->pin;
        $store->city = $req->city;
        $store->country = $req->country;
        $store->password = $req->password;
        $store->cnfpassword = $req->cnfpassword;

        $store->save();

        redirect('student/create');



    }
 
}
