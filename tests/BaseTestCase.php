<?php
namespace Tests\Bleicker\NodeTypes;

/**
 * Class BaseTestCase
 *
 * @package Tests\Bleicker\NodeTypes
 */
abstract class BaseTestCase extends \PHPUnit_Framework_TestCase {

	protected function setUp() {
		putenv('CONTEXT=testing');
	}
}
