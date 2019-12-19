@extends('mainlayout')
@section('content')
<style>
  .zoom {
    padding: 3px;
    transition: transform .2s;
  }

  .zoom:hover {
    transform: scale(1.5); 
    cursor: pointer;
  }
</style>
<Br><br><br>
<div class="row">
  <div class="col-sm-6"><br><br><Br><Br>
    <h1> Online Doctor Appointment System </h1><br>
    <p>
      Fullestop specializes in developing Online Doctor Appointment Solutions for doctors, hospitals and nursing homes. Our portfolio includes some of the high-performing appointment booking solutions for leading organizations. We combine our technical skills and innovative ideas to deliver a solution which meets your requirements in best possible way.
      <br>
      The solutions delivered by us eliminate the gap between patients and doctors. They give patients the flexibility to book their appointment with the doctor in their neighborhood. Our highly experienced team of developers understands your requirements well, and delivers a solution which is up-to-the-mark.
    </p>
  </div>
  <div class="col-sm-6">
    <img src="../img/main.gif" width="100%" height="500px" >
  </div>
</div>

</div>
<br><hr><Br>
<div class="container">
  <h2 class="text-muted"> <center> <b>Find doctors by Health Concern </b></center></h2>
  <br><br>
  <div class="row text-center">
    <div class="col-sm-3 zoom"> 
      <img src="../img/skin.png" class="rounded"  width="50" height="50"> 
      <span><b> Skin Specialist </b></span>
    </div>
    <div class="col-sm-3 zoom"> 
      <img src="../img/dentist.png" class="rounded"  width="50" height="50"> 
      <span><b> Dentist </b></span>
    </div>
    <div class="col-sm-3 zoom">
      <img src="../img/gyn.png" class="rounded"  width="50" height="50"> 
      <span><b> Gynecologist </b></span>
    </div>
    <div class="col-sm-3 zoom"> 
      <img src="../img/child.png" class="rounded"  width="50" height="50"> 
      <span><b> Child Specialist </b></span>
    </div>
  </div>
  <br><br>
  <!-- First row end  -->
  <div class="row text-center">
    <div class="col-sm-3 zoom"> 
      <img src="../img/sur.png" class="rounded"  width="50" height="50"> 
      <span><b> General Surgeon </b></span>
    </div>
    <div class="col-sm-3 zoom"> 
      <img src="../img/diab.png" class="rounded"  width="50" height="50"> 
      <span><b> Diabaties Specialist </b></span>
    </div>
    <div class="col-sm-3 zoom" >
      <img src="../img/eye.png" class="rounded"  width="50" height="50"> 
      <span><b> Eye Specialist </b></span>
    </div>
    <div class="col-sm-3 zoom"> 
      <img src="../img/therapist.png" class="rounded"  width="50" height="50"> 
      <span><b> Therapist </b></span>
    </div>
  </div>

</div>
<br><Br>
<div class="jumbotron">
  <center><h3 class="text-muted"><b>We Provided the facilities</b></h3></center><br><br>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4"> 

      <ul> <h3><b> For Patients </b></h3>
        <li> Can browse through doctors’ profile </li>
        <li> Can read specialty information of doctors </li>
        <li> View history of old appointments </li>
        <li> Add/Change personal information </li>
        <li> Signup/Login </li>
        <li>Can find a doctor according to specialty, name and location </li>
        <li> Can book an appointment at the flexible time and date </li>
        <li> Can cancel an appointment through their user page </li>
      </ul>
    </div>
    <div class="col-sm-4">

      <ul>
        <h3><b> For Doctors </b></h3>
        <li>  Can create have their own profile page</li>
        <li>Can edit their information from profile area</li>
        <li>Can edit their schedule</li>
        <li>Can edit their available hours for a specific date</li>
        <li>Can confirm or decline an appointment</li>
        <li>Google Maps integration on the profile page</li>
        <li>Can register with the site and show their interest to become members</li>
      </ul>
    </div>
    <div class="col-sm-2"></div>

  </div>
</div><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <img src="../img/about.gif" width="100%" height="300px">
    </div>
    <div class="col-sm-5 ">
      <div class="row mx-auto col-sm-4 mt-5">
        <span class="h3"> About Us </span>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center mb-3">
          <button class="btn btn-dark mr-3">Doctor</button>
        <button class="btn btn-dark">Patient</button>
        </div>
      </div>
    </div>
    
  </div>
  
</div>


@endsection