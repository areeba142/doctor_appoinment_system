<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientsignup extends Model
{
    //
    public $timestamps=false;
    protected $fillable = ['First_name' , 'Last_name' , 'Email' , 'Password' , 'Date_of_birth' , 'City'];
}
