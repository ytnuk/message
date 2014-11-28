<?php

namespace Kutny\Message;

use Kutny;

/**
 * Class Control
 *
 * @package Kutny\Message
 */
final class Control extends Kutny\Application\Control
{

	protected function startup()
	{
		$this->template->messages = $this->parent->template->flashes;
	}
}
