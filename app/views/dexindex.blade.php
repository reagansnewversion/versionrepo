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
	<div class="menurow text-center col-lg-12 col-md-12">
		<div id="pokemon" class="menubutton col-lg-6 col-md-6">
			Pokemon
		</div>
		<div id="pokedex" class="menubutton col-lg-6 col-md-6">
			Pokedex
		</div>
	</div>
	<div class="menurow text-center col-lg-12 col-md-12">
		<div id="bag" class="menubutton col-lg-6 col-md-6">
			Bag
		</div>
		<div id="card" class="menubutton col-lg-6 col-md-6">
			Trainer Card
		</div>
	</div>
	<div class="menurow text-center col-lg-12 col-md-12">
		<div id="options" class="menubutton col-lg-6 col-md-6">
			Options
		</div>
		<div id="save" class="menubutton col-lg-6 col-md-6">
			Save
		</div>
	</div>
</div>
<div class="pokemonmenu">Pokemon</div>
<div class="pokedexmenu">Pokedex</div>
<div class="bagmenu">Bag</div>
<div class="cardmenu">Trainer Card</div>
<div class="optionsmenu">Options</div>
<div class="savemenu">Save</div>
@stop
@section('bottom-script')
<script type="text/javascript" src="/js/menu.js"></script>
@stop
