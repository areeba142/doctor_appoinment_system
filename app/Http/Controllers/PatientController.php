<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientsignup;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $form)
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
