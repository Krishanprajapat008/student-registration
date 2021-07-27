<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    public $fillable = ['fname','lname','gender', 'email', 'address','phone','mobile','state','pin','city','country','password', 'cnfpassword','file'];
}
