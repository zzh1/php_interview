<?php
/**
 * Date: 2018/7/4
 * Time: 9:23
 */
/**
 * 引用：在PHP中引用意味着用不同的名字访问同一个变量内容
 * 定义方式：使用&符号
 * 工作原理：
 */
//memory_get_usage(); // 返回分配给 PHP 的内存量
//array range ( mixed $start , mixed $end [, number $step = 1 ] ) //建立一个包含指定范围单元的数组。

var_dump(memory_get_usage());

//定义一个变量
$a = range(0,1000);
var_dump(memory_get_usage());

//定义变量b，将a变量的值赋值给b
// COW Copy On Write
$b = $a;
var_dump(memory_get_usage());

// 对a进行修改
$a = range(0,1000);
var_dump(memory_get_usage());
