<?php

namespace Bleicker\NodeTypes;

use Bleicker\Nodes\AbstractContentNode;

/**
 * Class HeadlineNode
 *
 * @package Bleicker\NodeTypes
 */
class HeadlineNode extends AbstractContentNode {

	/**
	 * @var string
	 */
	protected $header;

	public function __construct($header) {
		$this->header = $header;
	}

	/**
	 * @param string $header
	 * @return $this
	 */
	public function setHeader($header) {
		$this->header = $header;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getHeader() {
		return $this->header;
	}
}
