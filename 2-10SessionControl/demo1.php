<?php
/**
 * 回顾真题
 *      简述cookie和session的区别及各自的工作机制，存储位置等，简述cookie的优缺点
 *
 * 考点
 *      PHP的会话控制技术
 *
 * 会话控制技术
 *      Cookie：存储在客户端的信息文件
 *      Cookie的操作：
 *          写  setcookie($name,$value,$expire,$path,$domain,$secure)
 *              数组形式 setcookie('a[b]',$val);
 *          读  $_COOKIE
 *          删除 setname($name,'',time()-1000)
 *
 *      Cookie的优点和缺点：
 *          信息保存在客户端，不占用服务端空间
 *          缺点呢，在客户端，敏感信息不应存储，且客户可以禁止掉
 *
 *
 *      Session：将使用信息放到服务端
 *      Session的操作：
 *          session_start();
 *          $SESSION;
 *          $SESSION = []
 *          session_destroy();
 *      Session的配置
 *          session.auto_start: 是否自动开启session
 *          session.cookie_domain：存储sessionid的cookie的有效域名（sessionid是保存在cookie里的，是基于cookie的）
 *          session.cookie_lifetime
 *          session.cookie_path
 *          session.name  (默认为：PHPSESSID)
 *          session.save_path
 *          session.use_cookies:是否使用cookie来传递sessionid
 *          session.use_trans_sid:是否使用传递的方式来传递id
 *          // （着重）垃圾回收机制
 *          //一下三个的解释：每100次调用session_start的时候会清理1次 过期文件（最后修改时间超过1440秒的为过期文件）
 *          session.gc_probability = 1（有一次清理机会）
 *          session.gc_divisor = 100（每访问100次）
 *          session.gc_maxlifetime = 1440（文件最后修改时间超过这个秒数会变成过期文件）
 *
 *          session.save_handler: session存储的句柄
 *
 *      Session的优点和缺点
 *          优点：信息安全，在服务器
 *          缺点：占用服务器资源。
 *                分布式问题，服务器多台的时候，session无法夸服务器使用。 解决：使用redius
 *
 *      传递SessionID的问题
 *          session_name()和session_id()
 *          SID
 *          //例子
 *              <a href="1.php?<?php echo session_name().'='.session_id() ?>">下个页面</a>
 *              <a href="1.php?<?php echo SID;?>">下个页面</a>
 *
 *      Session存储
 *          session_set_save_handler()
 *          MySql,Memcache,Redis等
 *
 * 解题方法
 *      充分理解Session和Cookie的工作原理
 *
 * 一网打尽
 *      Session信息的存储方式，如何进行遍历
 *      答：存储方式，默认情况是存储到服务器文件的，还可以
 *              通过session_set_save_handler存储到数据库、内存等等
 *          遍历，$_SESSION数组即可
 *
 *
 *
 * 复习一：
 *      cookie和session原理及区别
 *
 *          cookie采用的是客户端的会话状态的一种存储机制。它是服务器在本地机器上存储的
 *      一小段文本或者是内存中的一段数据，并随每一个请求发送至同一个服务器。
 *
 *          session是一种服务端的信息管理机制，它把这些信息以文件的形式存放在服务器的硬盘空间上（
 *      这是默认情况，可以用memcache把这种数据放到内存里）当客户端向服务器发送请求时，要求服务端
 *      产生一个session时，服务器会先检查一下，客户端的cookie里面有没有session_id，是否过期。
 *      如果有这样的session_id的话，服务器端会根据cookie里的session_id把服务器的session检索出来。
 *      如果没有这样的session_id的话，服务器端会重新建立一个。PHPSESSID是一串加了密的字符串，它的
 *      生成按照一定规则来执行。同一客户端启动二次session_start的话，session_id是不一样的。
 *
 *      区别：Cookie保存在客户端浏览器中，而Session保存在服务器上。Cookie机制是通过检查客户身上的
 *            “通行证”来确定客户身份的话，那么session机制就是通过检查服务器上的"客户明细表"来确认
 *            客户身份。session相当于程序子啊服务器上建立的一份客户档案，客户来访的时候只需要查询
 *            客户档案表就可以了。
 *
 *
 *
 *
 *
 *
 *
 */
