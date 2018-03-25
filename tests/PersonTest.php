<?php
/**
 * This contains all tests for the TestTravisCI\Person class
 *
 * @link https://github.com/mangopeaches/test-travis-ci
 * @copyright Copyright (c) 2018 Thomas Breese
 * @license https://github.com/mangopeaches/test-travis-ci/LICENSE.md (MIT License)
 */
namespace TestTravisCI\Tests;

use TestTravisCI\Person;

/**
 * This class contains all tests for full coverage of the TestTravisCI\Person class
 */
class PersonTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Tests creating a new person
	 * @return void
	 */
	public function testCreatePerson()
	{
		$person = new Person('Steve', 'Smith', 39);
		$this->assertInstanceOf('TestTravisCI\Person', $person);
	}

	/**
	 * Tests accessing first name
	 * @return void
	 */
	public function testGetFirstName()
	{
		$person = new Person('Steve', 'Smith', 39);
		$this->assertEquals('Steve', $person->getFirstName());
	}

	/**
	 * Tests accessing last name
	 * @return void
	 */
	public function testGetLastName()
	{
		$person = new Person('Steve', 'Smith', 39);
		$this->assertEquals('Smith', $person->getLastName());
	}

	/**
	 * Tests accessing full name
	 * @return void
	 */
	public function testGetFullName()
	{
		$person = new Person('Steve', 'Smith', 39);
		$this->assertEquals('Steve Smith', $person->getFullName());
	}

	/**
	 * Tests accessing age
	 * @return void
	 */
	public function testGetAge()
	{
		$person = new Person('Steve', 'Smith', 39);
		$this->assertEquals(39, $person->getAge());
	}

	/**
	 * Tests incrementing age
	 * @return void
	 */
	public function testAgeIncrease()
	{
		$person = new Person('Steve', 'Smith', 39);
		$person->age(10);
		$this->assertEquals(49, $person->getAge());
	}
}
