<?php

namespace Ytnuk\Message;

use Ytnuk;

/**
 * Class Control
 *
 * @package Ytnuk\Message
 */
final class Control extends Ytnuk\Application\Control
{

	protected function startup()
	{
		$this->template->messages = $this->parent->template->flashes;
	}
}
