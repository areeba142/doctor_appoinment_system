<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor Appointment System</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/974abdcd43.js" crossorigin="anonymous"></script>
</head>


<body>
  @section('navbar')
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">DOCTOR SEARCH ONLINE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Health Zone</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sign Up
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sign In
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  @show

  <div class="container">
    @yield('content')   
  </div>
  
  @section('footer')
  <div class="container-fluid bg-dark pt-4">
    <div>
      <h2 class="text-center text-white font-weight-bold">Quick Contacts</h2>
    </div>
    
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-lg-3 mr-3 mb-2" style="border: solid 1px white">
         <p>
          <center>
            <span class="text-white">
              <i class="far fa-envelope fa-2x text-warning"></i><br>
              <span>Via E-Mail</span>
            </span>
          </center>
          <div class="py-4">
            <span>
              <span class="text-white">Personal :</span>
              <br>
              <span class="text-warning">kareeba505@gmail.com</span>
            </span>
            <br><br>
            <span>
              <span class="text-white">Appointment :</span>
              <br>
              <span class="text-warning">appoint@system.com</span>
            </span>
            <br><br>
            <span>
              <span class="text-white">Business Development :</span>
              <br>
              <span class="text-warning">onile@system.com</span>
            </span>
            <br><br>
            <span>
              <span class="text-white">Send an fax at :</span><br>
              <span class="text-warning">+91-141-4045223</span>
            </span>
          </div>
        </div>

        <div class="col-lg-3 mr-3 mb-2" style="border: solid 1px white">
         <p>
          <center>
            <span class="text-white">
              <i class="fas fa-phone fa-2x text-warning"></i><br>
              <span>Via Phone</span>
            </span>
          </center>
          <div class="py-4">
            <span>
              <span class="text-white">Personal Phone :</span>
              <br>
              <span class="text-warning">0300-1234567</span>
            </span>
            <br><br>
            <span>
              <span class="text-white">Office Number :</span>
              <br>
              <span class="text-warning">0300-1234567</span>
            </span>
            <br><br>
            <span>
              <span class="text-white">Business Development :</span>
              <br>
              <span class="text-warning">onile@system.com</span>
            </span>
          </div>
        </div>
        <div class="col-lg-3 mr-3 mb-2" style="border: solid 1px white">
         <p>
          <center>
            <span class="text-white">
              <i class="fab fa-skype fa-2x text-warning"></i><br>
              <span>Via Skype</span>
            </span>
          </center>
          <div class="py-4">
            <span>
              <span class="text-white">Skype :</span>
              <br>
              <span class="text-warning">kareeba505@gmail.com</span>
            </span>
            <br><br>
            <span>
              <span class="text-white">Appointment :</span>
              <br>
              <span class="text-warning">appoint@system.com</span>
            </span>
            <br><br>
            <span>
              <span class="text-white">Mail us :</span><br>
              <span class="text-warning">onile@system.com</span>
            </span>
          </div>
        </div>
      </div>
   @show
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 </body>
 </html>