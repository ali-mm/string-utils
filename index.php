<?php

require __DIR__ .'/vendor/autoload.php';

use Alimm\StringUtils\Str;

var_dump(Str::contains('abcd', ['ab', 'x']));
