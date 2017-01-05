<?php
class SquareSeeder extends Seeder {

	public function run() {
		$letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L"];
		$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
		foreach($letters as $letter) {
			foreach($numbers as $number) {
				$square = new Square();
				$square->letter = $letter;
				$square->number = $number;
				$square->save();
			}
		}
	}
}
?>