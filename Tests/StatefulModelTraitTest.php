<?php
/**
 * @copyright  Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Model\Tests;

/**
 * Tests for \Joomla\Model\StatefulModelTrait.
 */
class StatefulModelTraitTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @testdox  Calling getState() without a state set will throw an Exception
	 *
	 * @covers              Joomla\Model\StatefulModelTraitTest::getState
	 * @expectedException   \UnexpectedValueException
	 */
	public function testgetStateException()
	{
		/** @var \Joomla\Model\StatefulModelTrait $object */
		$object = $this->getObjectForTrait('\\Joomla\\Model\\StatefulModelTrait');
		$object->getState();
	}

	/**
	 * @testdox  A Registry representing the state is set and retrieved
	 *
	 * @covers    Joomla\Model\StatefulModelTraitTest::getState
	 * @covers    Joomla\Model\StatefulModelTraitTest::setState
	 */
	public function testSetAndgetState()
	{
		/** @var \Joomla\Model\StatefulModelTrait $object */
		$object = $this->getObjectForTrait('\\Joomla\\Model\\StatefulModelTrait');

		/** @var \Joomla\Registry\Registry $state */
		$state = $this->getMockBuilder('\\Joomla\\Registry\\Registry')
			->getMock();

		$object->setState($state);

		$this->assertSame($state, $object->getState());
	}
}
