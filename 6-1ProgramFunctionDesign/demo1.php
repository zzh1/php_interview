<?php
/**
 * 真题回顾
 *      编写一个在线留言本，实现用户的在线留言功能，留言信息存储到数据库
 *      ，要求设计数据表内容以及使用PHP编码完成。
 *
 * 考点
 *      数据表设计
 *      数据表创建语句
 *      选择PHP连接数据库的方式
 *      编码能力
 *
 * 数据表设计
 *      分析数据表结构
 *          留言板有哪些信息需要存储
 *          留言信息：ID，留言标题，留言内容，留言时间，留言人
 *
 * 数据表的创建
 *          留言本message
 *          CREATE TABLE message(
                `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
 *              `title` VARCHAR(120) NOT NULL DEFAULT '',
 *              `content` VARCHAR(255) NOT NULL DEFAULT '',
 *              `created_at` INT NOT NULL DEFAULT '0',
 *              `user_name` VARCHAR(32) UNSIGNED NOT NULL DEFAULT '',
 *               KEY message_user_name(user_name)
 *          )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 *
 * 选择PHP连接数据库的方式
 *          PDO : 可扩展性更好、支持预处理、面向对象
 *          MySQLi：只支持MySQL操作、支持预处理、面向对象和过程，效率较高
 *          MYSQL:  只支持Mysql数据库、没有预处理的支持、面向过程
 *
 * 编码能力
 *      PDO的基本操作
 *      <?php
 *          try{
                操作数据库代码
 *          }catch(PDOException $e){
                echo $e->getMessage();
 *          }
 *
 *      操作数据库的代码
 *          $pdo = new PDO($dsn,$username,$password,$attr);
 *          $sql = 'select id,title,content FROM message where user_name=:user_name';
 *          $stmt = $PDO->prepare($sql);
 *          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
 *
 * 解题方法
 *      根据考题所出功能，先分析应该存储哪些信息，设计好数据表，这一步很关键，如果编码时
 *      才发现设计有问题，会浪费大量的时间，基本没有时间改，所以要先设计好，然后根据设计
 *      好的数据表创建数据表，通常建议大家使用PDO来链接Mysql，最终完成编码，所以一定要
 *      熟悉PDO的基本操作。
 *
 * 一网打尽
 *      真题
 *          设计一个无线分类表
 *
 *
 *
 *
 *
 *
 *
 *
 */




