<?php
class ItemSeeder extends Seeder
{
	public function run() 
	{
		$item = new Item();
		$item->name = 'Potion';
		$item->description = 'A spray-like medicine that heals 20 hp';
		$item->type = 'Heal';
		$item->target = "Self";
		$item->
		$item->save();
	}
}
?>