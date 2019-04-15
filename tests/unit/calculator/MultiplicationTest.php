<?php
	class MultiplicationTest extends \PHPUnit\Framework\TestCase 
	{
		public function testOperandsMultiply()
		{
			$multiplication = new \App\Calculator\Multiplication;

			$multiplication->setOperands([3, 4]);

			$this->assertEquals(12, $multiplication->calculate());
		}

		public function testThrowExceptionWhenNoOperandsAreGiven()
		{
			$this->expectException(\App\Calculator\Exception\NoOperandsException::class);

			$multiplication = new \App\Calculator\Multiplication;
			$multiplication->calculate();
		}
	}