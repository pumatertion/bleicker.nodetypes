<?php

namespace Bleicker\NodeTypes;

use Bleicker\Nodes\AbstractContentNode;

/**
 * Class Text
 *
 * @package Bleicker\NodeTypes
 */
class Text extends AbstractContentNode implements TextInterface {

	/**
	 * @var string
	 */
	protected $body;

	/**
	 * @param string $body
	 * @return $this
	 */
	public function setBody($body = NULL) {
		$this->body = $body;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBody() {
		return $this->body;
	}
}
