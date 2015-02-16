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
		//TODO: use Flash/Message storage when available
		$parameters = [];
		$parent = $this->getParent();
		if ($parent instanceof Ytnuk\Application\Control) {
			$parameters = $parent->getTemplate()->getParameters();
		}
		$this->getTemplate()->add('messages', isset($parameters['flashes']) ? $parameters['flashes'] : []);
	}
}
