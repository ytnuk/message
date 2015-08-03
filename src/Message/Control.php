<?php
namespace Ytnuk\Message;

use Nette;
use Ytnuk;

/**
 * Class Control
 *
 * @package Ytnuk\Message
 */
final class Control
	extends Ytnuk\Application\Control
{

	/**
	 * @return array
	 */
	protected function startup()
	{
		$flashes = [];
		if ($this->getPresenter()->hasFlashSession() && $session = $this->getPresenter()->getFlashSession()) {
			$parent = $this->lookup(Nette\Application\UI\PresenterComponent::class);
			if ($parent instanceof Nette\Application\UI\PresenterComponent && isset($session[$flashId = $parent->getParameterId('flash')])) {
				$flashes = (array) $session[$flashId];
			}
		}

		return [
			'messages' => $flashes,
		];
	}
}
