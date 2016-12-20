@extends('layouts.master')
@section('content')
	[This will be text from the professor introducing the world. It will involve timed intervals to emulate an actual opening screen.]

	<form class="form-horizontal" method="POST" action="HomeController@savetrainer">
		<div class="form-group">
			<label for="email">Enter your email address</label>
			<input type="text" name="email">
		</div>

		<div class="form-group">
			<label for="name">What is your name?</label>
			<input type="text" name="name">
		</div>

		<div class="form-group">
			<label for="gender">Are you a boy or a girl?</label>
			<select type="radio" name="gender">
				<option>Boy</option>
				<option>Girl</option>
			</select>
		</div>

		<div class="form-group">
			<label for="password">Enter a secure password</label>
			<input type="password" name="password">
		</div>

		<div class="form-group">
			<label for="confirmpassword">Confirm your password</label>
			<input type="password" name="confirmpassword">
		</div>
		<button type="submit" class="btn btn-primary">Get started!</button>
	</form>
@stop