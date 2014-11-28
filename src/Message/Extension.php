<?php

namespace Ytnuk\Message;

use Kdyby;
use Nette;
use Ytnuk;

/**
 * Class Extension
 *
 * @package Ytnuk\Message
 */
final class Extension extends Nette\DI\CompilerExtension implements Ytnuk\Config\Provider
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
					'tags' => [Ytnuk\Application\Extension::COMPONENT_TAG]
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
