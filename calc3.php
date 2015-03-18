<?php

class Calculator{

	public $input;

	// Where I would put a constructor function if it were necessary with this class

	public function execute($input){
		$arr = str_split($input);
		for($i=0; $i<count($arr); $i++){
			if($arr[$i] == '*'){
				$arr[$i] = $arr[$i-1] * $arr[$i+1];
				unset($arr[$i-1]); 
				unset($arr[$i+1]); 

			}
			if($arr[$i] == '/'){
				$arr[$i] = $arr[$i-1] / $arr[$i+1]; 
				unset($arr[$i-1]); 
				unset($arr[$i+1]); 
			}
		}
		for($i=0; $i<count($arr); $i++){
			if($arr[$i] == '+'){
				$arr[$i] = $arr[$i-1] + $arr[$i+1];
				unset($arr[$i-1]); 
				unset($arr[$i+1]); 

			}
			if($arr[$i] == '-'){
				$arr[$i] = $arr[$i-1] - $arr[$i+1]; 
				unset($arr[$i-1]); 
				unset($arr[$i+1]); 
			}
		}
		return $arr[0];
	}
}

$calc = new Calculator;
echo $calc->execute(1+2*3-4/2*4+8*2-10);

?>