<?php
/**
 * 真题：请列出3种PHP数组循环操作的语法，并注明各种循环的区别
 *
 * 考点：
 *      PHP的遍历数组的三种方式及各自区别
 *      延伸：分支结构
 *
 *
 * PHP的遍历数组的三种方式及各自区别
 *      使用for循环(包括while  do...while)
 *      使用foreach循环
 *      使用while、list()、each()组合循环
 *
 *  区别：
 *      for循环只能遍历索引数组，foreach可以遍历索引和关联数组，联
 *      合使用list()、each()和while循环同样可以遍历索引和关联数组。
 *      while、list()、each()组合不会reset()
 *      foreach遍历会对数组进行reset()操作
 *
 *      PS: 索引数组--- 数字作为键名的数组一般叫索引数组
 *          关联数组 -- 字符串表示键的数组交关联数组
 *
 *
 * 延伸考点：PHP分支考点
 *   1.  if...elseif...
 *      在elseif语句中只能有一个表达式为true,即在elseif语句中只能有一个语句块被执行，
 *      多个elseif从句是排斥关系。
 *      使用elseif语句有一个基本原则，总把优先范围小的条件放在前面处理。
 *   2. switch...case..
 *      和if不同的是,switch后面的控制表达式的数据类型只能是整型、浮点类型或者字符串
 *      continue语句作用到switch的作用类似于break
 *      跳出switch外的循环，可以使用continue2
 *
 *      switch...case会生成跳转表，直接跳转到对应case
 *      效率：如果条件比一个简单的比较要复杂得多或者在一个很多次的循环中，那么用switch语句可能会快一些
 *
 * 解题方法
 *      理解循环内部机制，更易于记忆foreach的reset特性，
 *      分支结构中理解了switch...case的执行步骤也就不难理解为什么效率高了
 *
 *
 * 一网打尽：
 *      真题1 PHP中如何优化多个if...elseif语句的情况？
 *          答案  ：1. 可能性大的条件往前移
 *                  2. 如果判断的值的类型是整型、浮点、或字符串的话，可以使用switch...case来替换
 *
 *
 *
 *
 *
 */

//while - list() - each() 遍历数组
$indexData = array(
    '0' => "AA",
    '1' => "BB",
    '2' => "CC"
);

while (list($key, $value) = each($indexData)) {
    echo $value . "4" . "<br>";
}



