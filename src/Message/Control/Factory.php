<?php

namespace WebEdit\Message\Control;

use WebEdit;

/**
 * Interface Factory
 *
 * @package WebEdit\Message
 */
interface Factory
{

	/**
	 * @return WebEdit\Message\Control
	 */
	public function create();
}
