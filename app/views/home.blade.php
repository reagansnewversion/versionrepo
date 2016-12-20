@extends('layouts.master')
@section('content')
	Welcome to New Version!
	What would you like to do?
	<a href="/newgame"><button class="btn btn-primary">Start a New Game</button></a>
	<button id="button" class="btn btn-success">Resume Game</button>

	<div id="landingpageform">
		<form class="form-horizontal" method="POST" action="HomeController@resume">
			<label for="email">Enter your email address</label>
			<input type="text" id="email" name="email">
		</form>
		<button type="submit" class="btn btn-primary">Resume Game</button>
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