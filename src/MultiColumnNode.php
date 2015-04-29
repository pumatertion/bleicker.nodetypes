<?php

namespace Bleicker\NodeTypes;

use Bleicker\Nodes\AbstractContentNode;
use Doctrine\Common\Collections\Collection;

class MultiColumnNode extends AbstractContentNode {

	/**
	 * @return Collection
	 */
	public function getChildren() {
		return $this->children;
	}
}
