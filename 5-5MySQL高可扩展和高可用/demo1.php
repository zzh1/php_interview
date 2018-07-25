<?php
/**
 * 真题
 *      简述MySQL分表操作和分区的工作原理，分别说说分区和分表的使用场景和各自优点
 *
 * 考点
 *      分区表的原理
 *      分库分表的原理
 *      延伸：MySQL的复制原理及负载均衡
 *
 * 分区表的原理
 *      工作原理
 *          对用户而言，分区表是一个独立的逻辑表，但是底层MySQL将其分成多个物理字表
 *          ，这对用户来说是透明的，每一个分区表都会使用一个独立的表文件。
 *          创建表时使用partition by子句定义每个分区存放的数据，执行查询时，优化器会
 *          根据分区定义过滤那些没有我们需要数据的分区，这样查询只需要查询所需数据在
 *          的分区即可。
 *          分区的主要目的是将数据按照一个较粗的粒度分在不同的表中，这样可以将相关的
 *          数据存放在一起，而且如果想一次性删除整个分区的数据也比较方便。
 *
 *      适用场景
 *          1.表非常大，无法全部存在内存，或者只在表的最后有热点数据，其他都是历史数据
 *          2.分区表的数据更易维护，可以对独立的分区进行独立的操作
 *          3.分区表的数据可以分布在不同的机器上，从而高效使用资源
 *          4.可以使用分区表来避免某些特殊的瓶颈
 *          5.可以备份和恢复独立的分区
 *      限制
 *          1.一个表最多只能有1024个分区
 *          2.5.1版本中，分区表表达式必须是整数，5.5可以使用分区
 *          3.分区字段中如果有主键和唯一索引列，那么主键列和唯一列都必须包含进来
 *          4.分区表中无法使用外键约束
 *          5.需要对现有表的结构进行修改
 *          6.所有分区都必须使用相同的存储引擎
 *          7.分区函数中可以使用的函数和表达式会有一些限制
 *          8.某些存储引擎不支持分区
 *          9.对于MyISAM的分区表，不能使用load index into cache
 *          10.对于MyISAM表，使用分区表时需要打开更多的文件描述符
 *
 *
 * 分库分表的原理
 *      工作原理
 *          通过一些HASH算法或者工具实现将一张数据表垂直或者水平进行物理切分
 *
 *      适用场景
 *          1.单表记录条数达到百万到千万级别时
 *          2.解决表锁的问题
 *      分表方式
 *          水平分割
 *              表很大，分割后可以降低在查询时需要读的数据和索引的页数，同时也降低了索引
 *              的层数，提高查询速度
 *
 *              使用场景
 *                  1.表中的数据本身就有独立性，例如表中分别记录各个地区的数据或者不同时
 *                    期的数据，特别是有些数据常用，有些不常用。
 *                  2.需要把数据存放在多个介质上
 *
 *              水平分表缺点
 *                  1.给应用增加复杂度，通常查询时需要多个表名，查询所有数据都需UNION操作
 *                  2.在许多数据库应用中，这种复杂性会超过它带来的优点，查询时会增加读一个索引层的磁盘次数
 *
 *          垂直分表
 *              把主键和一些列放在一个表，然后把主键和另外的列放到另一个表中
 *
 *              使用场景
 *                  1.如果一个表中某些列常用，而另外一些列不常用
 *                  2.可以使数据行变小，一个数据页能存储更多数据，查询时减少I/O次数
 *              垂直分表缺点
 *                  管理冗余列，查询所有数据需要JOIN操作
 *
 * 分表缺点
 *      有些分表策略基于应用层的逻辑算法，一旦逻辑算法改变，整个分表逻辑都会改变，扩展性较差
 *      对于应用层来说，逻辑算法无疑增加开发成本
 *
 *
 * 延伸：MySQL的赋值原理及负载均衡
 *      MySQL主从复制工作原理
 *          在主库上把数据更改记录到二进制日志
 *          从库将主库的日志复制到自己的中继日志
 *          从库读取中继日志中的事件，将其重放到从库数据中
 *      MySQL主从复制解决的问题
 *          数据分布：随意停止或开始复制，并在不同地理位置分布数据备份
 *          负载均衡：降低单个服务器的压力
 *          高可用和故障切换：帮助应用程序避免单点失败
 *          升级测试：可以使用高可用版本的MySQL作为从库
 *
 * 解题方法
 *      充分掌握分区和分表的工作原理和使用场景，在面试中，此类题通常比较灵活，
 *      会给一些现有公司遇到问题的场景，大家可以根据分区和分表已经MySQL复制、
 *      负载均衡的适用场景来根据情况进行回答。
 *
 * 一网打尽
 *      真题:
 *          设定网站的用户数量在千万级，但是活跃用户的数量只有1%，如何通过
 *          优化数据库提高活跃用户的访问速度？
 *          答：两种方式 分区：将活跃用户分在一区，其余在另一区，
 *                       分库分表：水平切分，活跃用户数据切分一个表，其余在另外表
 *
 *
 *
 */

