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
 *          交叉连接(CROSS JOIN),内连接(INNER JOIN),外连接(LEFT JOIN/RIGHT JOIN),
 *          联合查询(UNION与UNION ALL),全连接(FULL JOIN)
 *
 *      交叉连接
 *          select * from A,B(,C)或者
 *          SELECT * FROM A CROSS JOIN B (CROSS JOIN C)
 *          没有任何人关联调价，结果是笛卡尔积，结果集会很大，没有意义，很少使用
 *
 *      内连接
 *          SELECT * FROM A,B WHERE A.id=B.id 或者
 *          SELECT * FROM A INNER JOIN B ON A.id=B.id
 *          多表中同时符合某种条件的数据记录的集合
 *
 *          内连接分为三类
 *              等值连接：ON A.id = B.id
 *              不等值连接：ON A.id > B.id
 *              自连接：SELECT * FROM A T1 INNER JOIN A T2 ON T1.id = T2.pid
 *          INNER JOIN 可以缩写为JOIN
 *
 *      外连接
 *          左外连接: LEFT OUTER JOIN,以左表为主，先查询出左表，按照ON后的关联条件匹配右表，
 *                    没有匹配到的用NULL填充，可以简写成LEFT JOIN
 *          右外连接：RIGHT OUTER JOIN,以右表为主，先查询出右表，按照ON后的关联条件匹配左表，
 *                    没有匹配到的用NULL填充，可以简写成RIGHT JOIN
 *      联合查询
 *          SELECT * FROM A UNION SELECT * FROM B UNION ...
 *          就是把多个结果集集中在一起，UNION前的结果为基准，需要注意的是联合查询的列数要相等，
 *          ，相同的记录行会合并
 *          如果使用UNION ALL，不会合并重复的记录行
 *      全连接
 *          MySQL不支持去全连接
 *          可以使用LEFT JOIN 和 UNION 和 RIGHT JOIN联合使用
 *          SELECT * FROM A LEFT JOIN B ON A.id=B.id UNION SELECT * FROM A RIGHT JOIN B ON A.id=B.id
 *      嵌套查询
 *          SELECT * FROM A WHERE id IN (SELECT id FROM B)
 *
 * 解题方法
 *      根据考题要搞清楚表的结构和多表之间的关系，根据想要的结果思考使用哪种关联方式
 *      ，通常把要查询的列先写出来，然后分析这些列都属于哪些表，才考虑使用关联查询。
 *
 * 一网打尽
 *      真题
 *          为了记录足球比赛的结果，设计表如下
 *          表team--参赛队伍表 ：teamID  teamName
 *          表match--赛程表： matchID hostTeamID  guestTeamID  matchTime  matchResult
 *          其中，match赛程表中hostTeamID和guestTeamID都和team表中的teamID关联，
 *          ，查询2006-6-1到2006-7-1之间举行的所有比赛，并用一下形式列出：拜仁 2:0 不莱梅 2006-6-21
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
