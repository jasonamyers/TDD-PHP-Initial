<?php
//String Calculator

class StringCalculator {
	public function Add($string){
		if (strlen($string) != 0){
			if(preg_match("/\\n,/", $string) == 0){
			$numbers = preg_split("/[\\n|,]+/", $string);
			$sum = 0;
			foreach ($numbers as $number) {
				$sum += $number;
			}
			return $sum;
		}
		} else {
			return 0;	
		}
		
	}
}


?>