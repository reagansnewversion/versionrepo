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
<div class="menu">
	<div class="menurow col-lg-12 col-md-12">
		<div class="menubutton col-lg-5 col-lg-offset-1 col-md-5">
			Pokemon
		</div>
		<div class="menubutton col-lg-5 col-lg-offset-1 col-md-5">
			Pokedex
		</div>
	</div>
	<div class="menurow col-lg-12 col-md-12">
		<div class="menubutton col-lg-5 col-lg-offset-1 col-md-5">
			Bag
		</div>
		<div class="menubutton col-lg-5 col-lg-offset-1 col-md-5">
			Trainer Card
		</div>
	</div>
	<div class="menurow col-lg-12 col-md-12">
		<div class="menubutton col-lg-5 col-lg-offset-1 col-md-5">
			Options
		</div>
		<div class="menubutton col-lg-5 col-lg-offset-1 col-md-5">
			Save
		</div>
	</div>
</div>
@stop
@section('bottom-script')
<script type="text/javascript" src="/js/menu.js"></script>
@stop
