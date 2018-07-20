<?php
/**
 * 回顾真题
 *      有A(id,sex,par,c1,c2)，B(id,age,c1,c2)两张表，其中A.id与B.id关联，
 *      现在要求写出一条SQL语句，将B中age>50的记录的c1,c2更新到A表中统一
 *      记录中的c1,c2字段中
 *
 * 考点分析
 *      MySQL的关联UPDATE语句
 *      延伸：MySQL的关联查询语句
 *
 * MySQL的关联UPFATE语句
 *      关联更新
 *          UPDATE A,B SET A.c1=B.c1, A.c2=B.c2 WHERE A.id = B.id
 *          UPDATE A INNER JOIN B ON A.id=B.id SET A.c1=B.c1,A.c2=B.c2 WHERE......
 *
 *       真题解答
 *          方法一：update A,B set A.c1=B.c1,A.c2=B.c2 where A.id=B.id and B.age>50;
 *          方法二：update A inner join B on A.id = B.id set A.c1=B.c1,A.c2=B.c2 where B.age>50
 *
 * 延伸考点：MySQL的关联查询语句
 *      六种关联查询
 *          交叉连接()
 *
 */
