<?php
/**
 * 回顾真题
 *      您是否使用过版本控制软件？如果有您有的版本控制软件的名字是什么？
 *
 * 考点：
 *      版本控制软件
 *      延伸：PHP的运行原理
 *      延伸：PHP的常见配置项
 *
 * 版本控制软件：
 *      集中式和分布式
 *
 *      集中式：CVS和SVN
 *      分布式：Git
 *
 * 延伸考点：PHP的运行原理
 *      Nginx + PHP-FPM
 *
 *      CGI: 语言解析器与webServer的通信 比如：PHP CGI解析器
 *      FastCGI：CGI的改良版本，每次处理完后不会kill掉进程，会保留，使这个进程一次处理多个请求
 *      PHP-FPM：PHP FastCGI Process Manager(FastCGI的进程管理器)：
 *              管理包括两种进程，
 *                  master进程(只有一个，负责监听端口) -- 监听端口   默认 9000
 *                  worker进程(一般会有多个，每个进程都会嵌入一个PHP解析器)--处理PHP代码
 *
 * 延伸考点：PHP常见配置项
 *      register_globals 注入变量
 *      allow_url_fopen 是否允许打开远程文件
 *      allow_url_include 是否允许远程包含文件
 *      date.timezone 设置时区
 *      display_errors 是否显示错误
 *      error_reporting 显示错误的级别设置
 *      safe_mode 是否开启安全模式
 *      upload_max_filesize 上传最大的文件大小
 *      max_file_uploads 上传的最大文件数量
 *      post_max_size 提交的post数据的最大大小
 *
 * 解题方法
 *      理解并牢记以上知识点并理解PHP运行原理
 *
 * 一网打击
 *      请简述CGI、FastCGI和PHP-FPM的区别
 *      答：CGI：语言解析器与web服务器之间的协议，桥梁作用
 *          FastCGI：CGI的改良版本
 *          PHP-FPM：FastCGI process Manager(进程管理器)
 *
 *
 *
 *
 *
 */


