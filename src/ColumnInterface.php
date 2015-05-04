<?php
namespace Bleicker\NodeTypes;

/**
 * Class Column
 *
 * @package Bleicker\NodeTypes
 */
interface ColumnInterface {

	/**
	 * @return int
	 */
	public function getOffset();

	/**
	 * @param int $colspan
	 * @return $this
	 */
	public function setColspan($colspan = NULL);

	/**
	 * @return int
	 */
	public function getColspan();

	/**
	 * @param int $offset
	 * @return $this
	 */
	public function setOffset($offset = NULL);
}