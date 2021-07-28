@extends('navbar')

@section('content')

<div class="container">

<form action="register" method="post">

    @csrf
    <input type="text" name="fname" Placeholder="Enter First Name">
    <input type="text" name="lname" Placeholder="Enter First Name"><br><br>

    <label for="Gender">Gender:</label><br>
    
    <label>Male :</label>
    <input type="radio" name="gender" value="Male">
    <label>Female :</label>
    <input type="radio" name="gender" value="Female"> 
      
     
    <input type="email" name="email" Placeholder="Enter Email ID"><br><br>
    <input type="text" name="address" Placeholder="Enter Address"><br><br>
    <input type="text" name="phone" Placeholder="Enter Phone number">
    <input type="text" name="mobile" Placeholder="Enter Mobile number"><br><br>

    <input type="text" name="state" Placeholder="State">
    <input type="number" name="pin" Placeholder="pin"><br><br>
    <input type="text" name="city" Placeholder="city">
    <input type="text" name="country" Placeholder="country"><br><br>

    <input type="password" name="password" Placeholder="Password">
    <input type="password" name="cnfpassword" Placeholder="Confirm Password"><br><br>

    <input type="file" name="fimg">

    <button>Submit</button>

</div>
</form>

@endsection