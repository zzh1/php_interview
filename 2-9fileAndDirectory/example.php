<?php
// 打开文件
//
// 将文件内容读取出来，在开头加入Hello World
//
// 将拼接好的字符串写回到文件中
//
// Hello 789
//
$file = './hello.txt';
$handle = fopen($file,'r');
$content = fread($handle,filesize($file));
$content = 'Hello World'.$content;
fclose($handle);
$handle = fopen($file,'w');
fwrite($handle,$content);
fclose($handle);



