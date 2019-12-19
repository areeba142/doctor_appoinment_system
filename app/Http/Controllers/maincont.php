<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsignup;
class maincont extends Controller
{
    //
    public function index(Request $form){
    	$this->validate($form,[
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'pass' => 'required',
        'date' => 'required',
        'city' => 'required'
    	]);

    	$patientsignup = new patientsignup([
    	'First_name' => $form->get('fname'),
        'Last_name' => $form->get('lname'),
        'Email' => $form->get('email'),
        'Password' => $form->get('pass'),
        'Date_of_birth' => $form->get('date'),
        'City' => $form->get('city')
    	]);
    	$patientsignup->save();

    }
}
