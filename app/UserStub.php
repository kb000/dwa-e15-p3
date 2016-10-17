<?php

namespace Kb0\FrontendBuddy;

/**
 * Data container class for stub users.
 */
class UserStub
{
	public function __construct() { }

	public $firstName = '';
	public $lastName = '';
	public $postalCode = '';
	public $email = '';
	public $username = '';
	public $photoUri = '';
    public $locale = '';

	/**
	 * Gets the user properties for display as hash.
	 * @return hashmap
	 */
	public function getDisplayProperties() {
		return [
			"Name" => $this->getFullName(),
			"Email" => $this->email,
			"Username" => $this->username,
			"Postal Code" => $this->postalCode,
			"Locale" => $this->locale,
		];
	}

	private function getFullName() {
		return $this->firstName . ' ' . $this->lastName;
	}
}
