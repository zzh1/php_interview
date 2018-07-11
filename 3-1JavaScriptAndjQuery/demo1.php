<?php
/**
 * 回顾真题
 *      下列不属于JavaScript语法关键/保留字的是(var、$、function、while)
 *
 * 考点：
 *      JavaScript基本语法
 *      延伸：JavaScript内置对象
 *      延伸：JavaScript HTML DOM对象
 *      延伸：jQuery基础知识
 *
 * JS的基本语法
 *      变量的定义
 *          变量必须以字母开头
 *          变量也能以$和_符号开头
 *          变量名称对大小写敏感
 *          使用var关键字来声明变量
 *          可以在一条语句中声明很多变量
 *          未使用值来声明的变量，值是undefined
 *          如果重新声明JS变量，该变量的值不会丢失
 *
 *      数据类型
 *          字符串、数字、布尔、数组、对象、Null、Undefined
 *          JS变量均为对象。当您声明一个变量时，就创建了一个新的对象
 *      创建对象
 *          new Object()
 *          使用对象构造器
 *              function定义函数，里面写 this.定义属性
 *          使用JSON对象   {}
 *
 *      函数
 *          定义方法
 *          无默认值（函数参数不支持默认值）
 *          函数内部声明的变量(使用var)是局部变量
 *          在函数外声明的变量时全局变量，所有脚本和函数都能访问它
 *      运算符
 *          +号可以用来字符串的拼接
 *      流程控制
 *          else if必须分开写
 *
 * 延伸考点：JS内置对象
 *      Number
 *          var pi = 3.14
 *          var myNum=new Number(value);
 *          var myNum=Number(value)
 *      String
 *          var str='This is String';(单引号、双引号在JS中基本无区别)
 *          var str=new String(s);
 *          var str=String(s);
 *          方法和属性
 *      Boolean
 *          var bol=true
 *          var bol=new Boolean(value);
 *          var bole-Boolean(value);
 *          方法和属性
 *      Array
 *          var arr=new Array()
 *          var arr=new Array(size)
 *          var arr=new Array(e1,e2,e3,... en);
 *              PS: JS中数组无关联数组，如想定义类似PHP关联数组的作用，需用对象来实现
 *          方法和属性
 *      Date
 *          var date=new Date();
 *          方法和属性
 *      Math
 *          var pi_value = Math.PI
 *          var sqrt_value=Math.sqrt(15);
 *          方法和属性
 *      RegExp
 *          /pattern/attribute    (正则模式)/(模式修正符)
 *          new RegExp(pattern,attributes);
 *          方法和属性
 *
 * 延伸考点：Window对象
 *      Window对象
 *          Window、Navigator、Screen。History、Location
 *      DOM对象
 *          Document、Element、Attr、Event
 *
 * 延伸考点：Jquery基础知识
 *      jQuery选择器：
 *          基本选择器、层次选择器、过滤选择器、可见性过滤选择器、属性过滤选择器、
 *          子元素过滤选择器、表单对象属性过滤选择器
 *      jQuery事件
 *          $("button").click(function(){..some code...})
 *      jQuery效果
 *          $("p").show()
 *      jQuery DOM操作
 *          属性、值、节点、CSS、尺寸
 *
 * 解题方法
 *      牢记以上基础知识点，比较常考察的是JS的HTML样式操作以及jQuery的选择器个事件、样式操作。
 *
 * 一网打尽
 *      真题：JS中为id是test的元素设置样式为good
 *          document.getElementById('test').className = 'good';
 *      真题：要求使用jQuery事件写在页面元素加载完成之后，动态绑定click事件到btnOK元素
 *          $(function(){
                $(".btnOK").click(function(){
 *                  ...
 *              })
 *          });
 *
 *
 *
 *
 *
 *
 *
 */
