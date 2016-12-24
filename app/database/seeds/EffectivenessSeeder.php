<?php

class EffectivenessSeeder extends Seeder {
	public function run()
	{

		$effective = [4, 6, 9, 11, 13, 18];
		$not = [1, 3, 5, 7, 8, 12, 14, 16, 17];
		$super = [2, 10, 15];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 1;
			$match->target_type1_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 1;
			$match->target_type1_id = $ef;
			$match->effective = 'true';
			$match->save();
		}
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 1;
			$match->target_type1_id = $n;
			$match->super_effective = 'true';
			$match->save();
		}
	}
}
?>