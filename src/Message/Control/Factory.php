<?php

namespace Kutny\Message\Control;

use Kutny;

/**
 * Interface Factory
 *
 * @package Kutny\Message
 */
interface Factory
{

	/**
	 * @return Kutny\Message\Control
	 */
	public function create();
}
