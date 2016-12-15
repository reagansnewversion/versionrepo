<?php

class TypesTableSeeder extends Seeder {
	public function run()
	{
		$type = new Type();
		$type->type = "Bug";
		$type->save();

		$type = new Type();
		$type->type = "Dark";
		$type->save();

		$type = new Type();
		$type->type = "Dragon";
		$type->save();

		$type = new Type();
		$type->type = "Electric";
		$type->save();

		$type = new Type();
		$type->type = "Fairy";
		$type->save();

		$type = new Type();
		$type->type = "Fighting";
		$type->save();

		$type = new Type();
		$type->type = "Fire";
		$type->save();

		$type = new Type();
		$type->type = "Flying";
		$type->save();

		$type = new Type();
		$type->type = "Ghost";
		$type->save();

		$type = new Type();
		$type->type = "Grass";
		$type->save();

		$type = new Type();
		$type->type = "Ground";
		$type->save();

		$type = new Type();
		$type->type = "Ice";
		$type->save();

		$type = new Type();
		$type->type = "Normal";
		$type->save();

		$type = new Type();
		$type->type = "Poison";
		$type->save();

		$type = new Type();
		$type->type = "Psychic";
		$type->save();

		$type = new Type();
		$type->type = "Rock";
		$type->save();

		$type = new Type();
		$type->type = "Steel";
		$type->save();

		$type = new Type();
		$type->type = "Water";
		$type->save();

	}
}
?>