<?php
//Mysql数据库层的优化
/**
 * 相关概念
 *      优化方向
 *      优化方案
 *
 * 优化方向
 *      数据表数据类型优化
 *      索引优化
 *      SQL语句的优化
 *      存储引擎的优化
 *      数据表结构设计的优化
 *      数据库服务器架构的优化
 *
 * 数据表数据类型优化
 *      字段使用什么样的数据类型更合适
 *      字段使用什么样的数据类型性能更快
 *
 *      tinyint、smallint、bigint
 *      考虑空间的问题，考虑范围的问题
 *
 *      char、varchar
 *      存储字符串长度是否固定
 *
 *      enum
 *      特定、固定的分类可以使用enum存储，效率更快
 *
 *      IP地址的存储(iptolong()  longtoip())
 *      使用整型存储IP地址
 *
 *
 * 索引优化
 *      建立合适的索引
 *      索引在什么场景下效率最高
 *
 *      索引的创建原则
 *      索引的注意事项
 *
 *      索引的创建原则
 *          索引不是越多越好，在合适的字段上创建合适的索引
 *          符合索引的前缀原则
 *
 *      索引的注意事项
 *          符合索引的前缀原则
 *          like查询%的问题
 *          全表扫描优化
 *          or条件索引使用情况
 *          字符串类型索引失效的问题
 *
 * SQL语句的优化
 *      优化查询过程中的数据访问
 *      优化长难句的查询语句
 *      优化特定类型的查询语句
 *
 *      优化查询过程中的数据访问
 *          使用Limit
 *          返回列不用*
 *
 *      优化长难句的查询语句
 *          变复杂为简单
 *          切分查询
 *          分解关联查询
 *
 *      优化特定类型的查询语句
 *          优化count()
 *          优化关联查询
 *          优化子查询
 *          优化Group by 和 distinct
 *          优化limit和union
 *
 * 存储引擎的优化
 *      尽量使用InnoDB存储引擎
 *
 * 数据表结构设计的优化
 *      分区操作
 *          通过特定的策略对数据表进行物理拆分
 *          对用户透明
 *          partition by
 *
 *      分库分表
 *          水平拆分
 *          垂直拆分
 *
 * 数据库架构的优化
 *      主从复制
 *      读写分离
 *      双主热备
 *      负载均衡
 *          通过LVS的三种基本模式实现负载均衡
 *          MyCat数据库中间件实现负载均衡
 *
 * 
 *
 *
 */
