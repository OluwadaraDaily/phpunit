<?php
	class AdditionTest extends \PHPUnit\Framework\TestCase 
	{
		public function testAddsUpGivenOperands()
		{
			//INstantiate Addition class
			$addition = new \App\Calculator\Addition;

			//Set operands
			$addition->setOperands([5, 10]);

			//Assertion:Checking whether we're going to get the expected result
			$this->assertEquals(15, $addition->calculate());
		}

		public function testThrowExceptionWhenNoOperandsAreGiven()
		{
			$this->expectException(\App\Calculator\Exception\NoOperandsException::class);

			$addition = new \App\Calculator\Addition;
			$addition->calculate();
		}
	}