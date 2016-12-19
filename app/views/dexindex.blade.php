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
		<button type="submit" id="pokemon" class="menubutton pokemon col-lg-6 col-md-6">
			Pokemon
		</button>
		<button id="pokedex" class="menubutton col-lg-6 col-md-6">
			Pokedex
		</button>
	</div>
	<div class="menurow text-center col-lg-12 col-md-12">
		<button id="bag" class="menubutton col-lg-6 col-md-6">
			Bag
		</button>
		<button id="card" class="menubutton col-lg-6 col-md-6">
			Trainer Card
		</button>
	</div>
	<div class="menurow text-center col-lg-12 col-md-12">
		<button id="options" class="menubutton col-lg-6 col-md-6">
			Options
		</button>
		<button id="save" class="menubutton col-lg-6 col-md-6">
			Save
		</button>
	</div>
</div>
<div class="pokemonmenu">
	Pokemon
	<button class="back">Back</div>
</div>
<div class="pokedexmenu">
	Pokedex
	<button class="back">Back</button>
</div>
<div class="bagmenu">Bag
	<button class="back">Back</button>
</div>
<div class="cardmenu">Trainer Card
	<button class="back">Back</button>
</div>
<div class="optionsmenu">Options
	<button class="back">Back</button>
</div>
<div class="savemenu">Save
	<button class="back">Back</button>
</div>
@stop
@section('bottom-script')
<script type="text/javascript" src="/js/menu.js"></script>
@stop
