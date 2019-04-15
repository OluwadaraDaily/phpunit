<?php

namespace App\Calculator;

use App\Calculator\Exception\NoOperandsException;
/**
 * 
 */
class Division extends OperationAbstract implements OperationInterface, Countable
{
	

	public function calculate()
	{
		
		if(count($this->operands) === 0 ) {
			# code...
			throw new NoOperandsException;
		}
		// $result = 0;

		// foreach ($this->operands as $index => $operand) {
		// 	if ($index == 0) {
		// 		$result = $operand;
		// 		continue;
		// 	}

		// 	$result = $result/$operand;
		// }

		// return $result;

		//ANOTHER METHOD
		return array_reduce(array_filter($this->operands), function($a, $b){

			/* This function accepts in an array and then a function. The function accepts two variables. the first and the second variables. Then check if the variables are null. If they are not, perform the division. If they are, just output null */
			
			if ($a !== null && $b !== null) {
				return $a / $b;
			}
			return $b;
		});
	}
}