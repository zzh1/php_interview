<?php
// 请写出以139开头的11位手机号码的正则表达式

// 13988888888
$str = '13981288888';
$pattern = '/^139\d{8}$/';
preg_match($pattern,$str,$match);
//var_dump($match);
phpinfo();

