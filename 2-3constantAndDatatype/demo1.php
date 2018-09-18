<?php
/**
 * Date: 2018/7/4
 * Time: 15:00
 *
 * 真题：
 * PHP中字符串可以使用哪三种定义方法以及各自的区别是什么？
 * 考点：
 *     PHP的字符串的定义方式及各自区别
 *     延伸：数据类型及常量
 *
 *
 * PHP字符串的定义方式及各自区别
 * 定义方式：
 *    单引号   双引号   heredoc和newdoc
 * 区别：
 *     单引号
 *          单引号不能解析变量
 *          单引号不能解析转义字符，只能解析单引号和反斜线本身( \'   \\)
 *          变量和变量、变量和字符串、字符串和字符串之间可以用.链接
 *     双引号
 *          双引号可以解析变量，变量可以使用特殊字符和{}包含
 *          双引号可以解析所有转义字符
 *          也可以使用.来链接
 *     效率上单引号效率更高
 *
 *     Heredoc类似于双引号
 *     Newdoc类似于单引号
 *     两者都用来处理大文本。
 *
 * 延伸考点 ：
 *      数据类型：三大数据类型（标量、符合、特殊）
 *
 *          浮点类型：浮点类型不能运用到比较运算中
 *          布尔类型：FALSE的七种情况  0, 0.0, '', '0',false,array(),NULL
 *          数组类型：
 *              超全局数组  $GLOBALS、$_GET、$_POST、$_REQUEST、$_SESSION、
 *                          $_COOKIE、$_SERVER、$_FILES、$_ENV
 *              $_SERVER['SERVER_ADDR'] --- 服务器端ip地址
 *              $_SERVER['SERVER_NAME'] --- 服务器名称
 *              $_SERVER['REQUEST_TIME'] -- 请求时间
 *              $_SERVER['QUERY_STRING'] -- 服务器请求时？后面的参数。
 *              $_SERVER['HTTP_REFERER'] -- 上级请求页面 从哪过来的，如果直接通过网址访问 为空
 *              $_SERVER['HTTP_USER-AGENT']- 头信息中的user_agent信息
 *              $_SERVER['REMOTE_ADDR'] ---  客户端ip地址
 *              $_SERVER['REQUEST_URI'] ---  当前脚本路径，根目录之后的目录。
 *              $_SERVER['PATH_INFO'] ----- 包含由客户端提供的、跟在真实脚本名称之后并且在查询语句（query string）之前的路径信息，如果存在的话。
 *                                              例如，如果当前脚本是通过 URL http://www.example.com/php/path_info.php/some/stuff?foo=bar 被访问，那么 $_SERVER['PATH_INFO'] 将包含 /some/stuff。
 *          NULL：  三种情况  直接赋值为NULL、未定义的变亮、unset销毁的变量
 *
 *      常量
 *          定义 const、define。
 *          const更快，是语言结构，define是函数
 *          define不能用于类常量的定义，const可以
 *          常量一经定义，不能被修改，不能被删除
 *
 *          预定义常量
 *              __FILE__   --- 返回所在文件的文件路径加文件名
 *              __LINE__、 --- 所在行的行号
 *              __DIR__、  --- 所在目录
 *              __FUNCTION__、-- 所在函数体的函数名称
 *              __CLASS__、  -- 类名
 *              __TRAIT__、-- 5.4新特性 trait名称
 *              __METHOD__、-- 类名加方法名
 *              __NAMESPACE__-- 返回命名空间名称
 *
 *
 *  真题：
 *  1. 用PHP写出显示客户端IP与服务器IP的代码
 *       $SERVER['REMOTE_ADDR']     $_SERVER['SERVER_ADDR']
 *
 *  2. __FILE__表示什么意思？
 *      所在文件的路径加文件名
 *
 *
 *
 */





