<?php
	class SubtractionTest extends \PHPUnit\Framework\TestCase 
	{
		public function testOperationIsSuccessful()
		{
			$subtraction = new \App\Calculator\Subtraction;

			$subtraction->setOperands([12, 5]);

			$this->assertEquals(7, $subtraction->calculate());
		}
	}