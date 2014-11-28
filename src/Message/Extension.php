<?php

namespace Kutny\Message;

use Nette;
use Kutny;
use Kdyby;

/**
 * Class Extension
 *
 * @package Kutny\Message
 */
final class Extension extends Nette\DI\CompilerExtension implements Kutny\Config\Provider
{

	/**
	 * @return array
	 */
	public function getConfigResources()
	{
		return [
			'services' => [
				'message' => [
					'implement' => Control\Factory::class,
					'tags' => [Kutny\Application\Extension::COMPONENT_TAG]
				]
			],
			Kdyby\Translation\DI\TranslationExtension::class => [
				'dirs' => [
					__DIR__ . '/../../locale'
				]
			]
		];
	}
}
