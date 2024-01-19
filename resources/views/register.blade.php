@extends('layouts.template')

@section('body')

<title>Sign Up Page</title>

<header class="w3-container w3-teal w3-padding-top-32">
  <h1>Register Account</h1>
</header>

<div class="w3-container w3-half w3-margin-top">

<form class="w3-container w3-card-4">

<p>
<label>Email</label></p>
<input class="w3-input" type="text" style="width:90%" required>
<p>
<label>Password</label></p>
<input class="w3-input" type="password" style="width:90%" required>
<p>
<label>Retype password</label></p>
<input class="w3-input" type="password" style="width:90%" required>

<p>
<label>Gender</label></p>
<input class="w3-radio" type="radio" name="gender" value="male" checked>


<label>Male</label></p>

<p>
<input class="w3-radio" type="radio" name="gender" value="female">
<label>Female</label></p>

<p>
<button class="w3-button w3-section w3-teal w3-ripple"> Register account </button></p>

</form>

</div>
    
@endsection