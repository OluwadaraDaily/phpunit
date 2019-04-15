<?php

//This is an abstrzt class where we can write a common code for our operations
//In this case, setting operands is common to both addition and division
namespace App\Calculator;

abstract class OperationAbstract
{
	protected $operands = [];
	
	public function setOperands(Array $operands)
	{
		$this->operands = $operands;
	}
}
