<?php
namespace Ytnuk\Message;

use Nette;
use Ytnuk;

final class Control
	extends Ytnuk\Application\Control
{

	protected function startup() : array
	{
		$flashes = [];
		if ($this->getPresenter()->hasFlashSession() && $session = $this->getPresenter()->getFlashSession()) {
			$parent = $this->lookup(Nette\Application\UI\PresenterComponent::class);
			if ($parent instanceof Nette\Application\UI\PresenterComponent) {
				$flashes = (array) $session[$parent->getParameterId('flash')] ?? [];
			}
		}

		return [
			'messages' => $flashes,
		];
	}
}
