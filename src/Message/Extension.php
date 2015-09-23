<?php
namespace Ytnuk\Message;

use Kdyby;
use Nette;
use Ytnuk;

final class Extension
	extends Nette\DI\CompilerExtension
	implements Ytnuk\Config\Provider
{

	public function getConfigResources() : array
	{
		return [
			'services' => [
				[
					'class' => Control::class,
					'implement' => Control\Factory::class,
				],
			],
			Kdyby\Translation\DI\TranslationExtension::class => [
				'dirs' => [
					__DIR__ . '/../../locale',
				],
			],
		];
	}
}
