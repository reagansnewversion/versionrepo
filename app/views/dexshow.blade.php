@extends('layouts.master')
@section('content')
#<?php if($pokemon->id < 10) {?>00<?php } else if($pokemon->id < 100 && $pokemon->id >= 10) {?>0<?php }?>{{{$pokemon->id}}}: {{{$pokemon->name}}}
<br>
@if($pokemon->img_url != null)
	<img src="{{{$pokemon->img_url}}}">
@endif
<br>
The {{{$pokemon->description}}} Pokemon
<br>
{{{$type1->type}}}@if($type2 != null)/{{{$type2->type}}}@endif
<br>
{{{$pokemon->entry}}}
@stop