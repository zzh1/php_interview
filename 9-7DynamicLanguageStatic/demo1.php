<?php
//动态语言静态化
/**
 * 相关概念
 *      什么是动态语言静态化
 *      为什么要静态化
 *      静态化的实现方式
 *
 * 什么是动态语言静态化
 *      将现有PHP等动态语言的逻辑代码生成为静态HTML文件，用户访问动态脚本
 *      重定向到静态HTML文件的过程。
 *
 *      对实时性要求不高的页面
 *
 * 为什么要静态化
 *      原因：
 *          动态脚本通常会做逻辑计算和数据查询，访问量越大，服务器压力越大
 *          访问量大时可能会造成CPU负载过高，数据库服务器压力过大
 *          静态化可以减低逻辑处理压力，降低数据库服务器查询压力
 *
 *
 * 静态化的实现方式
 *      使用模板引擎
 *          可以使用Smarty的缓存机制生成静态HTML缓存文件
 *          $smarty->cache_dir = $ROOT."/cache"; //缓存目录
 *          $smarty->caching = true; //是否开启缓存
 *          $smarty->cache_lifetime = "3600"; //缓存时间
 *          $smarty->display(string template[, string cache_id[, string compile_id]]);
 *
 *          $smarty->clear_all_cache(); //清除所有缓存
 *          $smarty->clear_cache('file.html'); //清除指定的缓存
 *          $smarty->clear_cache('article.html',$art_id);//清除同一个模板下的指定缓存号的缓存
 *
 *     利用ob系列的函数
 *          ob_start(): 打开输出控制缓冲
 *          ob_get_contents(): 返回输出缓冲区内容
 *          ob_clean(): 清空输出缓冲区
 *          ob_end_flush(): 冲刷出(送出)输出缓冲区内容并关闭缓冲
 *
 *          ob_start();
 *          输出到页面的HTML代码...
 *          ...
 *          ob_get_contents();
 *          ob_end_flush();
 *          fopen()写入
 *
 *          可以判断文件的inode修改时间，判断是否过期 使用filectime函数
 *
 *
 *
 *
 *
 */






