@extends('layouts.master')
@section('content')
<?php for($i = 0; $i < count($squares); $i++) {?>
	<?php if($i == 0 || $squares[$i]->letter != $squares[$i-1]->letter) {?>
	
	<?php } ?>
<?php } ?>
{{-- <div class="row A">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="A1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="A12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row B">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="B1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="B12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row C">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="C1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="C12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row D">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="D1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="D12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row E">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="E1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="E12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row F">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="F1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="F12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row G">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="G1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="G12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row H">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="H1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="H12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row I">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="I1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="I12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row J">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="J1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="J12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row K">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="K1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div <?php $i=0; foreach($pokemon as $pk) {?> data-name[<?php echo($i); $i++; ?>]=<?= $pk->name ?> <?php } ?>id="K10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="K12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div>
<div class="row L">
	<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="L1" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L2" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L3" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L4" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L5" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L6" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L7" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L8" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L9" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L10" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L11" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		<div id="L12" class="square col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</div>
</div> --}}
@stop
@section('bottom-script')
<script type="text/javascript">
	$("#K10").mouseenter(function() {
		var rand = (Math.floor((Math.random() * 11)));
		var pokemon = $(this).data("name[" + rand + "]");
		if(pokemon != undefined) {
			console.log("A wild " + pokemon + " appeared!");
		} else {
			console.log("Nothing appeared!");
		}
	});
</script>
@stop