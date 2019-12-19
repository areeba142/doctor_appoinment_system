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
    <label>Date of birth</label>
    <input type="date"  name="date" placeholder="Date of birth" >
  </div>
  <div class="form-group">
    <label>City</label>
    <input type="text"  name="city" placeholder="City" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
</div>

@endsection