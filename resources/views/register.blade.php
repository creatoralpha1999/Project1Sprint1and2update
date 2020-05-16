@extends('layout')
@section('main_content')
<h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<form method="post" action="{{url('register')}}">
    {{@csrf_field()}}
	<label for="name"><b>Name:   </b></label>
    <input type="text" placeholder="Enter your Name" name="name" required>
		<br>
		<p>
		<label><label for="register"><b>Register as:</b></label></label>
  <select id="register" name="register_as">
    <option value="Property Owner">Property Owner</option>
    <option value="Building Management">Building Management</option>
	<option value="Strata Management">Strata Management</option>
     </select>
	 </p>
	 <br>
    <label for="email"><b>Email:   </b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
		<br>
    <label for="password"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
		<br>
    <label for="password-repeat"><b>Repeat Password:</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" required>
    <hr>
		<br>
    <p> Requesting for an account will ask you agree to our <a href="#">Terms & Privacy</a>.</p>
	<p> 
<label>
      <input type="checkbox" checked="checked" name="agree"> I Agree.
    </label>	</p>
    <button type="submit" class="registerbtn">Register</button>
    </form>
  </div>
@endsection