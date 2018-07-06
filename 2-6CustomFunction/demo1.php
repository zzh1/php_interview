<?php
/**
 * 真题：example1
 * 考点: 变量的作用域和静态变量
 * 延伸：函数的参数及参数的引用传递
 * 延伸：函数的返回值及引用返回
 * 延伸：外部文件的导入
 * 延伸：系统内置函数
 *
 * 变量的作用域:
 *      变量的作用域也称变量的范围，变量的范围即它定义的上下文背景(也是它的生效范围)。大部分
 * 的PHP变量只有一个单独的范围。这个单独的范围跨度同样包含了include和require引入的文件。
 *  global关键字
 *  $GLOBALS及其他超全局数组
 *
 * 静态变量(static)
 *      静态变量仅在局部函数域中存在，但当程序执行离开次作用域时，其值并不会消失。
 *      static关键字：
 *          1. 仅初始化一次
 *          2. 初始化时需要赋值
 *          3. 每次执行函数该值会保留
 *          4. static修饰的变量是局部的，仅在函数内部有效
 *          5. 可以记录函数的调用次数，从而可以在某些条件下终止递归
 *
 * 延伸考点：函数的参数
 *      默认情况下，函数参数通过值传递
 *      如果希望允许函数修改它的值，必须通过引用传递参数
 *
 * 延伸考点：函数的返回值
 *      值通过使用可选的返回语句(return)返回
 *      可以返回包括数组和对象的任意类型
 *      返回语句会中止函数执行，将控制权交回函数调用处
 *      省略return,返回值为NULL,不可有多个返回值
 *
 * 延伸考点：函数的引用返回
 *      从函数返回一个引用，必须在函数声明和指派返回值给一个变量时都是用引用运算符&
 *
 * 延伸考点：外部文件的导入
 *      include/require语句包含并运行指定文件
 *      如果给出指定路径名按照路径来找，否则从include_path中查找
 *      如果include_path中也没有，则从调用脚本文件所在的目录和当前工作目录下寻找
 *
 *      当一个文件被包含时，其中所包含的代码继承了include所在行的变量范围
 *
 *      加载过程中未找到文件则include结构会发出一条警告；这一点和require不同，后者会发出一个致命错误。
 *      require在出错时产生E_COMPILE_ERROR级别的错误。
 *      换句话说将导致脚本中止而include只产生警告(E_WARNING)，脚本继续运行。
 *
 *      require(include)/require_once(include_once)唯一区别是PHP会检查该文件是否已经被包含过，如果是则不会再次包含。
 *
 * 延伸考点：系统内置函数
 *      时间日期函数
 *          date()、strtotime()、mktime()、time()、microtime()、date_default_timezone_set()
 *      IP处理函数
 *          ip2long()、long2ip()
 *      d打印处理
 *          print()、printf()、print_r()、echo、sprintf()、var_dump()、var_export()
 *      序列化及反序列化
 *          serialize()、unserialize()
 *      字符串处理函数
 *          implode()、explode()、join()、strrev()、trim()、
 *          ltrim()、rtrim()、strstr()、number_format()....
 *      数组处理函数
 *          array_keys()、array_values()、array_diff()、
 *          array_intersect()、array_merge()、array_shift()、
 *          array_unshift()、array_pop()、array_push()、sort()等
 *
 * 解题方法
 *      着重记忆PHP函数的定义相关内容，理解变量作用域、静态变量、函数的参数和
 *      返回值的相关内容，重点记忆我们总结的内置函数。
 *
 *
 * 一网打尽
 *      真题
 *
 *
 *
 *
 *
 */
//function mgFun(){
//    static $a=1;
//    echo $a++;
//}
//mgFun();
//mgFun();
//mgFun();
//echo NULL;

/*$a = 1;
$b = $a = 2 + $a  + $a ;
echo $b;

$a = 1;
$b = $a + $a + $a = 2 + $a;
echo $b;

$a = 1;
$b = $a + $a = 2 + $a;
echo $b;

$a = 1;
$b = $a + $a  + $a = 2 ;
echo $b;*/


//引用返回例子
function &myFunc(){
    static $b=10;   //必须静态变量，否则本函数永远返回10
    return $b;
}
$a = myFunc();
$a = 1000;
echo myFunc()."\n";
$a = &myFunc();
$a = 100;
echo myFunc();




