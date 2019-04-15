<?php

namespace App\Calculator;

use App\Calculator\Exception\NoOperandsException;
/**
 * 
 */
class Multiplication extends OperationAbstract implements OperationInterface 	
{

	public function calculate()
	{
		if(count($this->operands) == 0 ) {
			# code...
			throw new NoOperandsException;
		}
		else{
			foreach($this->operands as $index => $operand){
				if($index === 0){
				$new = $operand;
				continue;
			}
			}
			$new = bcmul($new, $operand);
		}

		return $new;
	}
}