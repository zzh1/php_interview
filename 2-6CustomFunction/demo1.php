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
 *  的PHP变量只有一个单独的范围。这个单独的范围跨度同样包含了include和require引入的文件。
 *  global关键字
 *      PHP作用域：全局环境和局部环境彼此独立隔离，互相不能访问各自里面的变量。
 *      global $a是外部$a的同名引用
 *      $GLOBALS['a']是外部的全局变量$a本身
 *      参考：https://blog.csdn.net/qq_19557947/article/details/77854147
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
 *          string date('Y-m-d H:i:s'[,int $timestamp])：格式化一个本地时间/日期 $timestamp默认值为 time()
 *          int strtotime(string $time): 将任何字符串的日期时间描述解析为时间戳
 *          int mktime([ int $hour = date("H")  ...]): 取得一个日期的时间戳
 *          int time(void): 返回当前时间的时间戳
 *          mixed microtime():返回当前时间戳和微秒数
 *          bool date_default_timezone_set('Asia/Shanghai')：设定用于一个脚本中所有日期时间函数的默认时区
 *      IP处理函数
 *          int ip2long(string $ip_address):将IPV4的字符串互联网协议转换成长整型数字
 *          string long2ip(int $proper_address)：将长整型转化为字符串形式带点的互联网标准格式地址（IPV4）
 *      d打印处理
 *          int print(string $arg):输出字符串，总是返回1
 *          int printf(string $format[,mixed $arg[..]]):输出格式化字符串,返回输出字符串的长度。
 *          mixed print_r(mixed $expression [, bool $return = FALSE ]):以易于理解的格式打印变量
 *              参数: $return 参数为true时， print_r()会直接返回信息，而不是输出
 *              返回：当 return 参数设置成 TRUE，本函数会返回 string 格式。否则返回 TRUE。
 *          void echo(string $arg1 [, string $... ]): 输出一个或多个字符串 输出所有参数。不会换行。
 *              echo不是一个函数,是语言结构
 *          string sprintf(string $format [, mixed $args [, mixed $... ]]):返回一个格式化字符串。
 *              类似printf，但不输出，值返回
 *          void var_dump()：打印变量的相关信息
 *              此函数显示关于一个或多个表达式的结构信息，包括表达式的类型与值。数组将递归展开值，通过缩进显示其结构。
 *          mixed var_export()：输出或返回一个变量的字符串表示
 *              它和 var_dump() 类似，不同的是其返回的表示是合法的 PHP 代码。
 *      序列化及反序列化
 *          string serialize( mixed $value )：产生一个可存储的值的表示
 *          mixed unserialize(string $str)：从已存储的表示中创建 PHP 的值
 *              返回的是转换之后的值，可为 integer、float、string、array 或 object。
 *              如果传递的字符串不可解序列化，则返回 FALSE，并产生一个 E_NOTICE。
 *      字符串处理函数
 *          string implode(string $glue , array $pieces):将一个一维数组的值转化为字符串
 *              返回一个字符串，其内容为由 glue 分割开的数组的值。implode(",", $array);
 *          array explode(string $delimiter , string $string [, int $limit ])：使用一个字符串分割另一个字符串
 *              此函数返回由字符串组成的 array，每个元素都是 string 的一个子串，它们被字符串 delimiter 作为边界点分割出来。
 *          join() == 别名 implode()
 *          string strrev(string $string ):反转字符串
 *          string trim(string $str):去除字符串首尾处的空白字符
 *          string ltrim(string $str):删除字符串开头的空白字符（或其他字符）
 *          stirng rtrim(string $str):删除字符串末端的空白字符（或者其他字符）
 *          string strstr(string $haystack , mixed $needle):查找字符串的首次出现
 *          string number_format(float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = ",")
 *              :以千位分隔符方式格式化一个数字
 *              参数：
 *                      number:格式化的数组
 *                      decimals:要保留的小数位数
 *                      dec_point:指定小数点显示的字符
 *                      thousands_sep:指定千位分隔符显示的字符
 *          ....
 *      数组处理函数
 *          array array_keys(array $array)：返回数组中部分的或所有的键名
 *          array array_values(array $array)：返回 input 数组中所有的值并给其建立数字索引。
 *          array array_diff(array $array1 , array $array2 [, array $... ])：返回数组差集
 *                  返回一个数组，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。注意键名保留不变。
 *          array array_intersect(array $array1 , array $array2 [, array $... ])：计算数组的交集
 *                  返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值。
 *          array array_merge(array $array1 [, array $... ])：合并一个或多个数组
 *                  如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。然而，如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。
 *          mixed array_shift(array &$array)：将数组开头的单元移出数组
 *                  将 array 的第一个单元移出并作为结果返回，将 array 的长度减一并将所有其它单元向前移动一位。所有的数字键名将改为从零开始计数，文字键名将不变
 *          int array_unshift(array &$array , mixed $value1 [, mixed $... ])：在数组开头插入一个或多个单元，返回 array 数组新的单元数目
 *                  将传入的单元插入到 array 数组的开头。注意单元是作为整体被插入的，因此传入单元将保持同样的顺序。所有的数值键名将修改为从零开始重新计数，所有的文字键名保持不变。
 *          mixed array_pop(array &$array)：弹出数组最后一个单元（出栈）
 *                  弹出并返回 array 数组的最后一个单元，并将数组 array 的长度减一。
 *          int array_push(array &$array , mixed $value1 [, mixed $... ])：将一个或多个单元压入数组的末尾（入栈）。 返回处理之后数组的元素个数。
 *          bool sort(array &$array [, int $sort_flags = SORT_REGULAR ])：对数组排序。成功时返回 TRUE， 或者在失败时返回 FALSE。
 *          等
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
//function &myFunc(){
//    static $b=10;   //必须静态变量，否则本函数永远返回10
//    return $b;
//}
//$a = myFunc();
//$a = 1000;
//echo myFunc()."\n";
//$a = &myFunc();
//$a = 100;
//echo myFunc();




