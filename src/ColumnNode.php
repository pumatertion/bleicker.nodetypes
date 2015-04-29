<?php

namespace Bleicker\NodeTypes;

use Bleicker\Nodes\AbstractContentNode;
use Doctrine\Common\Collections\Collection;

/**
 * Class ColumnNode
 *
 * @package Bleicker\NodeTypes
 */
class ColumnNode extends AbstractContentNode {

	/**
	 * @return Collection
	 */
	public function getChildren() {
		return $this->children;
	}
}
