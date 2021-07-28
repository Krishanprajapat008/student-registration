<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class userinfo extends Model
{
    use HasFactory;
    public $table='userinfo';


    public function setPasswordAttribute($password){

        $this->attributes['password'] = Hash::make($password);
}
public function setCnfpasswordAttribute($cnfpassword){

    $this->attributes['cnfpassword'] = Hash::make($cnfpassword);
}
   
}
