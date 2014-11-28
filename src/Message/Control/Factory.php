<?php

namespace Ytnuk\Message\Control;

use Ytnuk;

/**
 * Interface Factory
 *
 * @package Ytnuk\Message
 */
interface Factory
{

	/**
	 * @return Ytnuk\Message\Control
	 */
	public function create();
}
