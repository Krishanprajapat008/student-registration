<!DOCTYPE html>
<html>
<head>
    <title>student forms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
<body>
<div class="container mt-3 mb-3">
 
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
 
    <h3>Student Registration Form</h3>
    <form action="/update" method="POST" enctype="multipart/form-data">
 
        @csrf
 
    <div class="container">
        
<div class="row row-cols-2">

        <div class="form-group col">
            <label>First Name</label>
            <input type="text" class="form-control" name="fname" id="fname">
        </div> 
        <div class="form-group col">
            <label>Last Name</label>
            <input type="text" class="form-control"name="lname" id="lname">
        </div>

</div>

<div class="row">
 
        <div class="form-group px-3">
            <label>Gender</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Male" id="male" name="gender">
                    <label class="custom-control-label" for="male">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Female" id="female" name="gender">
                    <label class="custom-control-label" for="female">Female</label>
                </div>
        </div>
</div>

<div class="row row-cols-2">

<div class="form-group col">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        
        <div class="form-group col">
            <label>Address</label>
            <input type="text" class="form-control" name="address" id="address"> 
        </div>

        <div class="form-group col">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>

        <div class="form-group col">
            <label>Mobile</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
 
        
</div>

<div class="row row-cols-2">

        <div class="form-group col">
            <label>State</label>
            <input type="text" class="form-control" name="state" id="state">
        </div>
        <div class="form-group col">
            <label>PIN</label>
            <input type="text" class="form-control" name="pin" id="pin">
        </div>
        <div class="form-group col">
            <label>City</label>
            <input type="text" class="form-control" name="city" id="city">
        </div>
        <div class="form-group col">
            <label>Country</label>
            <input type="text" class="form-control" name="country" id="country">
        </div>
</div>
<div class="row row-cols-2">
 
        <div class="form-group col">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group col">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="cnfpassword" id="cnfpassword">
        </div>
</div>
 
        <div class="form-group">
            <label>Profile Image</label>
            <input type="file" class="form-control" name="file" id="file">
        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-dark">
 
    </form>
</div>
</div>
</div>
</body>
 
</html>