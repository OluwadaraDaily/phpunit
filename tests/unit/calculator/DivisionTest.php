<?php
	class DivisionTest extends \PHPUnit\Framework\TestCase 
	{
		public function testDividesGivenOperands()
		{
			$division = new \App\Calculator\Division;

			//Set the hard coded operands
			$division->setOperands([100 ,2]);

			// Assertion to be sure that the calculation will give the expected answer 
			$this->assertEquals(50, $division->calculate());
		}

		public function testIgnoresDivisionByZero()
		{
			$division = new \App\Calculator\Division;
			$division->setOperands([10, 0, 0, 2, 0]);

			$this->assertEquals(5, $division->calculate());

			//We remove the zeros using array_filter
		}

		public function testThrowExceptionWhenNoOperandsAreGiven()
		{
			$this->expectException(\App\Calculator\Exception\NoOperandsException::class);

			$division = new \App\Calculator\Division;
			$division->calculate();
		}
	}