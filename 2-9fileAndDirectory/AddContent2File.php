<?php
$file = './hello.txt';
$handle = fopen($file,'r');
$content = fread($handle,filesize($file));
fclose($handle);
$content = 'hello world '.$content;
$handle = fopen($file,'w');
fwrite($handle,$content);
fclose($handle);
