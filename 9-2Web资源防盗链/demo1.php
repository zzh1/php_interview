<?php
/**
 * 相关概念
 *      什么是防盗链
 *      防盗链的工作原理
 *      防盗链的实现方法
 *
 * 什么是防盗链
 *      盗链概念
 *          盗链是指在自己的页面上展示一些并不在自己服务器上的内容
 *          获得他人服务器上的资源地址，绕过别人的资源展示页面，直接在自己的页面上向最终用户提供此内容
 *          常见的是小站盗用大战的图片、音乐、视频、软件等资源
 *          通过盗链的方法可以减轻自己服务器的负担，因为真实的空间和流量均是来自别人的服务器
 *
 *      防盗链概念
 *          防止别人通过一些技术手段绕过本站的资源展示页面，盗用本站的资源，让绕开本站资源展示页面的资源链接失效。
 *          可以大大减轻服务器及带宽的压力。
 *
 * 防盗链的工作原理
 *      工作原理
 *          通过Referer或者签名，网站可以检测目标网页访问的来源网页，
 *          如果是资源文件，则可以跟踪到显示它的网页地址。
 *          一旦检测到来源不是本站即进行阻止或者放回指定的页面。
 *
 *          通过计算签名的方式，判断请求是否合法，如果合法则显示，否则返回错误信息。
 *
 *      Referer
 *          Nginx 模块 ngx_http_referer_module 用于阻挡来源非法的域名请求
 *          Nginx指令 valid_referers,全局变量$invalid_referer
 *
 *          valid_referers none | blocked | server_names | string ...;
 *          none: "Referer"来源头部为空的情况
 *          blocked: "Referer"来源头部不为空，但是里面的值被代理或者防火墙删除了，
 *                   这些值都不以 http://或者https://开头
 *          server_names: "Referer"来源头部包含当前的server_names
 *
 *      防盗链的实现方法
 *          如图
 *
 *
 * 传统防盗链遇到的问题
 *      伪造Referer
 *          可以使用加密签名解决
 *
 *      加密签名
 *          使用第三方模块HttpAccessKeyModule实现Nginx防盗链
 *          accesskey on|off 模块开关
 *          accesskey_hashmethod md5 | sha-1 签名加密方式
 *          accesskry_arg GET参数名称
 *          accesskey_signature 加密规则
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 */
?>

<img src="https://www.imooc.com/static/img/index/logo.png"/>


