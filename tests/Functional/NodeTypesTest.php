<?php

namespace Tests\Bleicker\NodeTypes;

use Bleicker\NodeTypes\Headline;
use Bleicker\NodeTypes\Text;

/**
 * Class NodeTypesTest
 *
 * @package Tests\Bleicker\NodeTypes
 */
class NodeTypesTest extends FunctionalTestCase {

	/**
	 * @test
	 */
	public function headlineTest() {
		$node = new Headline();
		$node->setTitle('foo')->setSubtitle('bar');
		$this->nodeService->add($node)->flush();
		$id = $node->getId();

		/** @var Headline $persisted */
		$persisted = $this->nodeService->get($id);

		$this->assertInstanceOf(Headline::class, $persisted);
		$this->assertEquals('foo', $persisted->getTitle());
		$this->assertEquals('bar', $persisted->getSubtitle());
	}

	/**
	 * @test
	 */
	public function textTest() {
		$node = new Text();
		$node->setBody('foo');
		$this->nodeService->add($node)->flush();
		$id = $node->getId();

		/** @var Text $persisted */
		$persisted = $this->nodeService->get($id);

		$this->assertInstanceOf(Text::class, $persisted);
		$this->assertEquals('foo', $persisted->getBody());
	}
}
