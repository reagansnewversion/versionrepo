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

		$noeffect = [11];
		$not = [10, 16];
		$effective = [1, 2, 3, 4, 5, 6, 7, 9, 12, 13, 14, 15, 17];
		$super = [8, 18];

		foreach($noeffect as $ne) {
			$match = new Effectiveness();
			$match->move_type_id = 4;
			$match->target_type_id = $ne;
			$match->no_effect = 'true';
			$match->save();
		}
		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 4;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 4;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 4;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [7, 14, 17];
		$effective = [1, 4, 5, 8, 9, 10, 11, 12, 13, 15, 16, 18];
		$super = [2, 3, 6];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 5;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 5;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 5;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$noeffect = [9];
		$not = [1, 5, 8, 14, 15];
		$effective = [3, 4, 6, 7, 10, 11, 18];
		$super = [2, 12, 13, 16, 17];

		foreach($noeffect as $ne) {
			$match = new Effectiveness();
			$match->move_type_id = 6;
			$match->target_type_id = $ne;
			$match->no_effect = 'true';
			$match->save();
		}
		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 6;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 6;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 6;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [3, 11, 16, 18];
		$effective = [2, 4, 5, 6, 7, 8, 9, 13, 14, 15];
		$super = [1, 10, 12, 17];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 7;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 7;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 7;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [4, 12, 16, 17];
		$effective = [2, 3, 5, 7, 8, 9, 11, 13, 14, 15, 18];
		$super = [1, 6, 10];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 8;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 8;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 8;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$noeffect = [6, 13];
		$not = [2, 17];
		$effective = [1, 3, 4, 5, 7, 8, 10, 11, 12, 14, 16, 18];
		$super = [9, 15];

		foreach($noeffect as $ne) {
			$match = new Effectiveness();
			$match->move_type_id = 9;
			$match->target_type_id = $ne;
			$match->no_effect = 'true';
			$match->save();
		}
		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 9;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 9;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 9;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [1, 3, 7, 8, 12, 14];
		$effective = [2, 4, 5, 6, 9, 10, 13, 15, 17];
		$super = [11, 16, 18];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 10;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 10;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 10;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$noeffect = [8];
		$not = [10, 12];
		$effective = [1, 2, 3, 5, 6, 9, 11, 13, 15, 18];
		$super = [4, 7, 14, 16, 17];

		foreach($noeffect as $ne) {
			$match = new Effectiveness();
			$match->move_type_id = 11;
			$match->target_type_id = $ne;
			$match->no_effect = 'true';
			$match->save();
		}
		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 11;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 11;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 11;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [6, 7, 16, 17];
		$effective = [2, 4, 5, 9, 12, 13, 14, 15, 18];
		$super = [1, 3, 8, 10, 11];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 12;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 12;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 12;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$noeffect = [9];
		$not = [6, 16, 17];
		$effective = [1, 2, 3, 4, 5, 7, 8, 10, 11, 12, 13, 14, 15, 18];

		foreach($noeffect as $ne) {
			$match = new Effectiveness();
			$match->move_type_id = 13;
			$match->target_type_id = $ne;
			$match->no_effect = 'true';
			$match->save();
		}
		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 13;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 13;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 

		$noeffect = [14, 17];
		$not = [11, 15, 16];
		$effective = [2, 3, 4, 6, 7, 8, 9, 12, 13, 18];
		$super = [1, 5, 10];

		foreach($noeffect as $ne) {
			$match = new Effectiveness();
			$match->move_type_id = 14;
			$match->target_type_id = $ne;
			$match->no_effect = 'true';
			$match->save();
		}
		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 14;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 14;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 14;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$noeffect = [2];
		$not = [1, 9, 17];
		$effective = [3, 4, 5, 7, 8, 10, 11, 12, 13, 15, 16, 18];
		$super = [6, 14];

		foreach($noeffect as $ne) {
			$match = new Effectiveness();
			$match->move_type_id = 15;
			$match->target_type_id = $ne;
			$match->no_effect = 'true';
			$match->save();
		}
		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 15;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 15;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 15;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [6, 10, 11, 17, 18];
		$effective = [2, 3, 4, 5, 7, 9, 13, 14, 15, 16];
		$super = [1, 8, 12];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 16;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 16;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 16;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [6, 7, 11, 18];
		$effective = [1, 2, 3, 4, 8, 9, 10, 13, 14, 15, 17];
		$super = [5, 12, 16];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 17;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 17;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 17;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}

		$not = [3, 4, 10];
		$effective = [1, 2, 5, 6, 8, 9, 12, 13, 14, 15, 18];
		$super = [7, 11, 16, 17];

		foreach($not as $n) {
			$match = new Effectiveness();
			$match->move_type_id = 18;
			$match->target_type_id = $n;
			$match->not_very_effective = 'true';
			$match->save();
		}
		foreach($effective as $ef) {
			$match = new Effectiveness();
			$match->move_type_id = 18;
			$match->target_type_id = $ef;
			$match->effective = 'true';
			$match->save();
		} 
		foreach($super as $s) {
			$match = new Effectiveness();
			$match->move_type_id = 18;
			$match->target_type_id = $s;
			$match->super_effective = 'true';
			$match->save();
		}
	}
}
?>