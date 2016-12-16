@extends('layouts.master')
@section('content')
@foreach($pokemon as $pk)
	@if($pk->id % 5 == 0)
		<br>
	@endif
	<div class="col-lg-3 col-md-3">
		<a href="/pokedex/{{{$pk->id}}}">#<?php if($pk->id < 10) {?>00<?php } else if($pk->id < 100 && $pk->id >= 10) {?>0<?php }?>{{{$pk->id}}}: {{{$pk->name}}}</a>
		@if($pk->img_url != null)
			<img src="{{{$pk->img_url}}}">
		@endif
	</div>
@endforeach
@stop