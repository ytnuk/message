<?php
namespace Ytnuk\Message\Control;

use Ytnuk;

interface Factory
	extends Ytnuk\Application\Control\Factory
{

	public function create() : Ytnuk\Message\Control;
}
