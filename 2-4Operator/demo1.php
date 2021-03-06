<?php
/**
 * 真题：
 *      foo()和@foo()之间的区别
 * 考点：PHP的运算符的错误控制符@
 * 延伸：PHP所有运算符考点
 *      运算符的优先级
 *      比较运算符
 *      递增/递减运算符
 *      逻辑运算符
 *
 * PHP的错误控制符
 *      PHP支持一个错误运算符:@。当将其放置在一个PHP表达式之前，该表达式可能产生的任何错误信息都被忽略掉
 *
 * 延伸考点
 *      1. 运算符的优先级
 *          递增/递减>!>算数运算符>大小比较>    (不)相等比较>引用>位运算符(^)>位运算符(|)
 *          >逻辑与>逻辑或>三目>赋值>    and>xor>or
 *
 *      2.比较运算符
 *          == 和 ===的区别
 *          等值判断(FALSE的七种情况)
 *
 *      3.递增/递减运算符
 *          递增/递减运算符不影响布尔值   true+-仍为true false+-仍为false
 *          递减NULL值没有效果
 *          递增NULL值为1
 *          递增和递减在前就先运算后返回，反之就先返回，后运算
 *
 *      4. 逻辑运算符
 *          短路作用
 *          ||和&&  与 or和and的优先级不同
 *
 * 一网打尽
 *
 *
 *
 */