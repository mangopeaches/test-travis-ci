<?php
/**
 * This is a sample file we will unit test to test Travis-CI
 *
 * @link https://github.com/mangopeaches/test-travis-ci
 * @copyright Copyright (c) 2018 Thomas Breese
 * @license https://github.com/mangopeaches/test-travis-ci/LICENSE.md (MIT License)
 */
namespace TestTravisCI;

/**
 * Person
 *
 * This is a basic sample class to demonstrate
 * how we can unit test with travis-ci
 */
class Person
{

	/**
	 * First name of the person
	 * @var string
	 */
	protected $firstName = '';

	/**
	 * Last name of the person
	 * @var string
	 */
	protected $lastName = '';

	/**
	 * Age of the person
	 * @var int
	 */
	protected $age = 0;

	/**
	 * Instantiate a new instance
	 * @param string $firstName
	 * @param string $lastName
	 * @param int $age
	 */
	public function __construct($firstName, $lastName, $age)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
	}

	/**
	 * Returns the first name
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * Returns the last name
	 * @return string
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * Returns the age
	 * @return int
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * Returns the full name
	 * @return string
	 */
	public function getFullName()
	{
		return sprintf('%s %s', $this->firstName, $this->lastName);
	}
}
