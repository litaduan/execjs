<?php

use Chenos\ExecJs\Liquid\Liquid;

require __DIR__.'/autoload.php';

$liquid = new Liquid();

$liquid->getContext()->load('./liquid.js');
