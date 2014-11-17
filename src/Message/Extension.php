<?php

namespace WebEdit\Message;

use Nette;
use WebEdit;

/**
 * Class Extension
 *
 * @package WebEdit\Message
 */
final class Extension extends Nette\DI\CompilerExtension implements WebEdit\Config\Provider
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
					'tags' => [WebEdit\Application\Extension::COMPONENT_TAG]
				]
			]
		];
	}
}
