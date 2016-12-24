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
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 1;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		}
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 1;
			$match->target_type_id = $n;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [1, 5, 6, 17];
		$effective = [2, 3, 4, 7, 8, 10, 11, 12, 13, 14, 16, 18];
		$super = [9, 15];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 2;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 2;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		}
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 2;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$noeffect = [5];
		$not = [12];
		$effective = [1, 2, 4, 6, 7, 8, 9, 10, 11, 13, 14, 15, 16, 17, 18];
		$super = [3];

		foreach($noeffect as $ne) {
			$match = new Effectiveness();
			$match->move_type_id = 3;
			$match->target_type_id = $ne;
			$match->no_effect = 'true';
			$match->save();
		}
		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 3;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 3;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 3;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}
	}
}
?>