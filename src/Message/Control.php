<?php

namespace WebEdit\Message;

use WebEdit;

/**
 * Class Control
 *
 * @package WebEdit\Message
 */
final class Control extends WebEdit\Application\Control
{

	protected function startup()
	{
		$this->template->messages = $this->parent->template->flashes;
	}
}
