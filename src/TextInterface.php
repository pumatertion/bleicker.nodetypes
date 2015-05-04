<?php
namespace Bleicker\NodeTypes;

/**
 * Class Text
 *
 * @package Bleicker\NodeTypes
 */
interface TextInterface {

	/**
	 * @return string
	 */
	public function getBody();

	/**
	 * @param string $body
	 * @return $this
	 */
	public function setBody($body = NULL);
}