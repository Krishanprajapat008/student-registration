<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class userController extends Controller
{
        //Update records

        public function regstr(Request $req){

            $register = new student();

            $register->fname = $req->fname;
            $register->lname = $req->lname;
            $register->gender = $req->gender;
            $register->fname = $req->fname;
        }


}

// <input type="text" name="fname" Placeholder="Enter First Name">
// <input type="text" name="lname" Placeholder="Enter First Name"><br><br>

// <label for="Gender">Gender:</label><br>

// <label for="Male">Male :</label>
// <input type="radio" name="gender" value="Male">
// <label for="css">Female :</label>
// <input type="radio" name="gender" value="Female"><br><br>
//   
//  
// <input type="email" name="email" Placeholder="Enter Email ID"><br><br>
// <input type="text" name="address" Placeholder="Enter Address"><br><br>
// <input type="text" name="phone" Placeholder="Enter Phone number">
// <input type="text" name="mobile" Placeholder="Enter Mobile number"><br><br>

// <input type="text" name="state" Placeholder="State">
// <input type="number" name="pin" Placeholder="pin">
// <input type="text" name="city" Placeholder="city">

// <input type="text" name="Country" Placeholder="country"><br><br>

// <input type="password" name="password" Placeholder="Password">
// <input type="password" name="cnfpassword" Placeholder="Confirm Password"><br><br>

// <input type="file" name="profileimage">
