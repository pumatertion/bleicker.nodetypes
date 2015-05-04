<?php

namespace Bleicker\NodeTypes;

use Bleicker\Nodes\AbstractContentNode;

/**
 * Class Column
 *
 * @package Bleicker\NodeTypes
 */
class Column extends AbstractContentNode implements ColumnInterface {

	/**
	 * @var integer
	 */
	protected $colspan;

	/**
	 * @var integer
	 */
	protected $offset;

	/**
	 * @param int $colspan
	 * @return $this
	 */
	public function setColspan($colspan = NULL) {
		$this->colspan = $colspan;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getColspan() {
		return $this->colspan;
	}

	/**
	 * @param int $offset
	 * @return $this
	 */
	public function setOffset($offset = NULL) {
		$this->offset = $offset;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getOffset() {
		return $this->offset;
	}
}
