<?php
$a = range(0,3);
xdebug_debug_zval('a');

$a = range(0,2);

$b = &$a;
xdebug_debug_zval('a');
xdebug_debug_zval('b');

$a = range(0,3);
xdebug_debug_zval('a');
