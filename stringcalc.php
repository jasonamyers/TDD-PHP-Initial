<?php
//String Calculator

class StringCalculator {
	public function Add($string){
		if (strlen($string) != 0){
			$numbers = explode(",", $string);
			$sum = 0;
			foreach ($numbers as $number) {
				$sum += $number;
			}
			return $sum;
		} else {
			return 0;	
		}
		
	}
}


?>