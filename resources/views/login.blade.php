@extends('layouts.template')

@section('body')

<title>Login Page</title>

<header class="w3-container w3-teal w3-padding-top-32">
  <h1>Log In Account</h1>
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
  <button class="w3-button w3-section w3-teal w3-ripple"> Log In account </button></p>

  </form>

</div>
    
@endsection

