<?php

//What is a namespace???
namespace App\Models;

class User
{
	//Public properties
	public $first_name;
	public $last_name;
	public $email;

	//setFirstName function
	public function setFirstName($firstName)
	{
		$this->first_name = trim($firstName);
		// $this->is_not_something_

	}

	//getFirstName function
	public function getFirstName()
	{
		return $this->first_name;
	}

	//setLastName function
	public function setLastName($lastName)
	{
		$this->last_name = trim($lastName);
	}

	//getLastName function
	public function getLastName()
	{
		return $this->last_name;
	}

	//Get full name function
	public function getFullName()
	{

		return $this->first_name. ' '. $this->last_name;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getEmailVariables()
	{
		return [
			'full_name' => $this->getFullName(),
			'email' => $this->getEmail()
		];	
	}
}
