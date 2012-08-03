<?php
//String Calculator

class StringCalculator {
	public function Add($string){
		if (strlen($string) == 3){
			$numbers = explode(",", $string);
			$sum =  $numbers[0] + $numbers[1];
			return $sum;
		} else if (strlen($string) == 1){
			return $string;
		} else {
			return 0;	
		}
		
	}
}


?>