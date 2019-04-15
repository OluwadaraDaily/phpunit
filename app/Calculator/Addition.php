<?php

namespace App\Calculator;

use App\Calculator\Exception\NoOperandsException;
/**
 * 
 */
class Addition extends OperationAbstract implements OperationInterface, Countable
{

	public function calculate()
	{
		// $result = 0;

		// foreach($this->operands as $operand)
		// {
		// 	$result += $operand;
		// }

		// return $result;
		if(count($this->operands) == 0 ) {
			# code...
			throw new NoOperandsException;
		}
		else return array_sum($this->operands);
	}
}