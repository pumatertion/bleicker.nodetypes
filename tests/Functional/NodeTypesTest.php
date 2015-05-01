<?php

namespace Tests\Bleicker\NodeTypes;

use Bleicker\NodeTypes\Page;

/**
 * Class NodeTypesTest
 *
 * @package Tests\Bleicker\NodeTypes
 */
class NodeTypesTest extends FunctionalTestCase {

	/**
	 * @test
	 */
	public function pageChildrenTest() {
		$_1 = new Page();
		$_1->setTitle(uniqid('Page '));

		$_2 = new Page();
		$_2->setTitle(uniqid('Page '));

		$_3 = new Page();
		$_3->setTitle(uniqid('Page '));

		$_4 = new Page();
		$_4->setTitle(uniqid('Page '));

		$_5 = new Page();
		$_5->setTitle(uniqid('Page '));

		$_6 = new Page();
		$_6->setTitle(uniqid('Page '));

		$_1->addChild($_2->addChild($_3->addChild($_4->addChild($_5->addChild($_6)))));

		$this->entityManager->persist($_1);
		$this->entityManager->flush();

		$id = $_1->getId();

		$this->entityManager->clear();

		/** @var Page $_1 */
		$_1 = $this->entityManager->find(Page::class, $id);

		$this->assertEquals(1, $_1->getChildren()->count());
	}
}
