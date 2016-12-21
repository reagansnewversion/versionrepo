@extends('layouts.master')
@section('content')
	Welcome to New Version!
	What would you like to do?
	<a href="/newgame"><button class="btn btn-primary">Start a New Game</button></a>
	<button id="button" class="btn btn-success">Resume Game</button>

	<div id="landingpageform">
		{{Form::open(array('class'=>"form-horizontal", 'method'=>"POST", 'action'=>"HomeController@resume"))}}
			<label for="email">Enter your email address</label>
			<input type="text" id="email" name="email">
			<label for="password">Enter your password</label>
			<input type="password" id="password" name="password">
		<button type="submit" class="btn btn-primary">Resume Game</button>
		{{Form::close()}}
	</div>
@stop
@section('bottom-script')
	<script type="text/javascript">
		var button = $("#button");
		button.click(function() {
			$("#landingpageform").css("opacity", 1);
		});
	</script>
@stop