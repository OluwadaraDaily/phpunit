<?php
	class UserTest extends \PHPUnit\Framework\TestCase 
	{
		//Set up function for the user model
		// protected function setUp()
		// {
		// 	$this->user = new \App\Models\User;
		// } 
		public function testGetFirstName()
		{
			//This is a test to get the first name of the user. 


			//Create an instance of the user model
			$user = new \App\Models\User;

			//Setter function to set first name. That is, pass a value to the user model to set
			$user->setFirstName('Oluwadara');

			//Using assertion to set check if the name is set using thr getter function
			$this->assertEquals($user->getFirstName(), 'Oluwadara'); 
		}

		public function testGetLastName()
		{
			//This is a test to get the last name of the user. 


			//Create an instance of the user model
			$user = new \App\Models\User;

			//Setter function to set last name. That is, pass a value to the user model to set
			$user->setLastName('Oloye');

			//Using assertion to set check if the name is set using a getter function.
			$this->assertEquals($user->getLastName(), 'Oloye'); 
		}

		public function testGetFullName()
		{
			$user = new \App\Models\User;
			$user->setFirstName('Oluwadara');
			$user->setLastName('Oloye');

			$this->assertEquals($user->getFullName(), 'Oluwadara Oloye');
		}

		public function testTrimFirstAndLastName()
		{
			$user = new \App\Models\User;

			$user->setFirstName('    Oluwadara');
			$user->setLastName('Oloye     ');

			$this->assertEquals($user->getFirstName(), 'Oluwadara');
			$this->assertEquals($user->getLastName(), 'Oloye');
		}

		public function testSetEmailAddress()
		{
			$user = new \App\Models\User;

			$user->setEmail('daraoloye99@gmail.com');

			$this->assertEquals($user->getEmail(), 'daraoloye99@gmail.com');
		}

		public function testEmailVaraiblesHaveCorrectValues()
		{
			$user = new \App\Models\User;

			$user->setFirstName('    Oluwadara');
			$user->setLastName('Oloye     ');
			$user->setEmail('daraoloye99@gmail.com');

			$emailVariables = $user->getEmailVariables();

			//Returns the part of the email variable that has a specific key
			$this->assertArrayHasKey('full_name', $emailVariables);
			$this->assertArrayHasKey('email', $emailVariables);

			//Checking whether the variables gotten correspond with the set values
			$this->assertEquals($emailVariables['full_name'], 'Oluwadara Oloye');
			$this->assertEquals($emailVariables['email'], 'daraoloye99@gmail.com');		
		}
 	}