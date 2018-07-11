<?php
/**
 * 回顾真题
 *      AJAX技术利用了什么协议？简述AJAX的工作机制
 * 考点：
 *      AJAX的基本工作原理
 *      延伸：jQuery的AJAX操作
 *
 * AJAX的基本工作原理
 *      AJAX基础概念
 *          Asynchronous JavaScript and XML
 *          通过在后台与服务器进行少量数据交换，AJAX可以使网页实现异步更新
 *      AJAX工作原理
 *          XMLHttpRequest是AJAX的基础
 *          XMLHttpRequest用于在后台与服务器交换数据
 *      XMLHttpRequest对象请求
 *          open(method,url,async)
 *          send(string)
 *      XMLHttpRequest对象响应
 *          responseText
 *          responseXML
 *
 *          onreadystatechange
 *          readyState:0(请求未初始化),1(服务器连接已建立),2(请求已接受),3(请求处理中),4(请求已完成，且响应已就绪)
 *          status: 200 400
 *      常用方法
 *          $(ele).load()  $.ajax()   $.get()   $.post()    $.getJSON()  $.getScript()
 *
 * 解题方法
 *      理解AJAX工作原理，这也是与面试官面料时可能被问到的。
 *      牢记jQuery的AJAX操作方法，遇到AJAX编程题，先考虑jQuery的AJAX操作方式，
 *      ，判断是GET还是POST请求，然后选择对应的方法，通常不会考察JavaScript的原生操作方法。
 *
 * 一网打尽
 *      真题：要求写出jQuery中，可以处理AJAX的几种方法
 *          $.ajax()  $.get()   $.post()  $.getJSON()  $.getScript()
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


