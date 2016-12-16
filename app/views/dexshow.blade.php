@extends('layouts.master')
@section('content')
#<?php if($pokemon->id < 10) {?>00<?php } else if($pokemon->id < 100 && $pokemon->id >= 10) {?>0<?php }?>{{{$pokemon->id}}}: {{{$pokemon->name}}}
<br>
The {{{$pokemon->description}}} Pokemon
<br>
{{{$pokemon->entry}}}
@stop