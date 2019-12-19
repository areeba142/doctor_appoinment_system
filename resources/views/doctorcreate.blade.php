@extends('mainlayout')
@section('content')
<br><br>
<style>
	.div{
		background-image: url('../img/reg.png');
		height: 100vh;
	}
	</style>
	
<div class="container-fluid div">
	<center>

<form action="{{url('/submit')}}" method="POST">
	{{ csrf_field() }}
	<br><br>
	<h2>Create a New Account </h2><br><br>
	<div class="form-group">
    <label>First Name</label>
    <input type="text"  name="fname" placeholder="First Name" >
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text"  name="lname" placeholder="Last Name" >
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email"  name="email" placeholder="Enter email" >
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password"  name="pass" placeholder="Enter password" >
  </div>
  <div class="form-group">
    <label>City</label>
    <input type="text"  name="city" placeholder="City" >
  </div>
  <div class="form-group">
    <label>Degree from</label>
    <input type="text"  name="degree" placeholder="University Name" >
  </div>
  
  <div class="form-group">
    <label>Specialized in</label>
    <input type="text"  name="special" placeholder="Specialization" >
  </div>
  <div class="form-group">
    <label>Attached CV</label>
    <input type="file"  name="cv" placeholder="Document attached" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
</div>

@endsection