<?php

namespace App\Calculator;

use App\Calculator\Exception\NoOperandsException;

class Subtraction extends OperationAbstract implements OperationInterface
{
	public function calculate()
	{
		if (count($this->operands) == 0 ) {
			throw new NoOperandsException;
		}
		else {
			foreach($this->operands as $index => $operand){
				if ($index === 0) {
					$result = 0;
					$result = $operand;
					continue;
				}

				$result = bcsub($result, $operand);
			}

			return $result;
		}
	}
}
