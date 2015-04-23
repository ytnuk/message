<?php

namespace Ytnuk\Message;

use Nette;
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
		$parent = $this->lookup(Nette\Application\UI\Control::class);
		$parameters = $parent->getTemplate()->getParameters();
		$this->getTemplate()->add('messages', isset($parameters['flashes']) ? $parameters['flashes'] : []);
	}
}
