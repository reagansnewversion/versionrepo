<?php
class LocationSeeder extends Seeder {
	public function run() {
		$location = new Location();
		$location->name = "Sample Grid";
		$location->wild = "true";
		$location->save();
	}
}
?>