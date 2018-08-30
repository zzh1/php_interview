<?php
/**
 * 浏览器缓存和数据压缩
 *      相关概念
 *          HTTP缓存机制
 *          Nginx配置缓存策略
 *          前端代码和资源压缩
 *
 *      HTTP缓存机制
 *          高并发下只能通过提升服务器负载解决？很多，流量，前端，服务器，数据库等层面优化
 *          缓存只能做数据库缓存吗？浏览器缓存
 *          启用浏览器缓存
 *
 *          缓存分类
 *              HTTP缓存模型中，如果请求成功会有三种情况
 *              200 from cache：直接从本地缓存中获取响应，最快速，最省流量，因为根本没有向服务器发送请求
 *
 *              304 Not Modified：协商缓存，浏览器在本地没有命中的情况下
 *              请求头中发送一定的校验数据到服务端，如果服务端数据没有改变
 *              浏览器从本地缓存响应，返回304
 *              快速，发送的数据很少，只返回一些基本的响应头信息，数据量很小，不发送实际响应体。
 *
 *              200 OK: 以上两种缓存全都失败，服务器返回完整响应。没有用到缓存，相对最慢。
 *
 *          本地缓存
 *              浏览器认为本地缓存可以使用，不会去请求服务端
 *
 *          相关Header
 *              Pragma：HTTP1.0时代的遗留产物，该字段被设置为no-cache时，会告知浏览器
 *              禁用本地缓存，即每次都向服务器发送请求。
 *
 *              Expires：HTTP1.0时代用来启用本地缓存的字段，expires值对应一个
 *              形如Thu,31 Dec 2037 23:55:55 GMT的格林威治时间，告诉浏览器缓存实现的时刻，
 *              如果还没到该时刻，标明缓存有效，无需发送请求。
 *
 *              浏览器与服务器的时间无法保持一直，如果时间差距大，就会影响缓存结构。
 *
 *              Cache-Control: HTTP1.1针对Expires时间不一致的解决方案，运用Cache-Control
 *              告知浏览器缓存过期的时间间隔而不是时刻，即使具体时间不一致，也不影响缓存的管理。
 *              no-store:禁止浏览器缓存响应
 *              no-cache:不允许直接使用本地缓存，先发起请求和服务器协商
 *              max-age=delta-seconds: 告知浏览器该响应本地缓存有效的最长期限，以秒为单位。
 *
 *              优先级
 *                  Pragma > Cache-Control > Expires
 *
 *          协商缓存
 *              当浏览器没有命中本地缓存，如本地缓存过期或者响应中声明不允许直接使用本地缓存，
 *              那么浏览器肯定会发起服务端请求
 *              服务端会验证数据是否修改，如果没有通知浏览器使用本地缓存
 *
 *          相关Header
 *              Last-Modified：通知浏览器资源的最后修改时间
 *              Last-Modified：Mon, 30 Jul 2018 06:02:08 GMT
 *
 *              If-Modified-Since: 得到资源的最后修改时间后，会将这个信息通
 *              过If-Modified-Since提交到服务器做检查，如果没有修改，返回304状态码
 *              If-Modified-Since：Mon, 30 Jul 2018 06:02:08 GMT
 *
 *              ETag：HTTP1.1推出，文件的指纹标识符，如果文件内容修改，指纹会改变。
 *              ETag：“5ce-164c641f6c1”
 *
 *              If-None-Match:本地缓存失效，会携带此值去请求服务端，服务端判断该资源是否改变，
 *              如果没有改变，直接使用本地缓存，返回304.
 *              If-None-Match:“5ce-164c641f6c1”
 *
 *
 *      缓存策略的选择
 *          适合缓存的内容
 *              不变的图像，如logo，图标等
 *              js，css静态文件
 *              可下载的内容，媒体文件
 *
 *          建议使用协商缓存
 *              HTML文件
 *              经常替换的图片
 *              经常修改的js，css文件
 *              index.css?签名
 *              index.签名.js
 *
 *          不建议缓存的内容
 *              用户隐私等敏感数据
 *              经常改变的api数据接口
 *
 *
 * Nginx配置缓存策略
 *      本地缓存配置
 *          add_header指令：添加状态码为2XX和3XX的响应头信息
 *          add_header name value [always];
 *          可以设置Pragma/Expires/Cache-Control,可以继承
 *
 *          expires指令：通知浏览器过期时长
 *          expires time;
 *          为负值时表示Cache-Control：no-cache;
 *          当为正或者0时，就表示Cache-Control：max-age=指定的时间；
 *
 *          当为max时，会把Expires设置为 "Thu, 31 Dec 2037 23:55:55 GMT",Cache-Control设置到10年
 *
 *
 *      协商缓存相关配置
 *          Etag指令：指定签名
 *          etag on|off; 默认是on
 *
 *
 * 前端代码和资源的压缩
 *      优势
 *          让资源文件更小，加快文件在网络中的传输，让网页更快的展现，降低带宽和流量开销
 *
 *      压缩方式
 *          js  css  图片  html代码的压缩
 *          Gzip压缩
 *
 *      JavaScript代码压缩
 *          JS压缩的原理一般是去掉多余的空格和回车、替换长变量名、简化一些代码写法等。
 *          JS代码压缩工具很多，有在线工具、有应用程序、有编辑器插件。
 *          常用压缩工具：UglifyJS、YUI Compressor、Closure Compiler
 *
 *          UglifyJS：压缩、语法检查、美化代码、代码缩减、转化
 *          YUI Compressor：来自Yahoo、只有压缩功能
 *          Closure Compiler: 来自Google、功能和UglifyJS类似，压缩的方式不一样
 *
 *      CSS代码压缩
 *          原理跟JS压缩原理类似，同样是去除空白符、注释并且优化一些CSS语义规则等
 *          常用压缩工具：YUI Compressor、CSS Compressor
 *          CSS Compressor: 压缩时可以选择模式
 *
 *      HTML代码压缩
 *          不建议使用代码压缩，有时会破坏代码结构，可以使用Gzip压缩，当然也
 *          可以使用htmlcompressor工具，不过转换后一定要检查代码结构。
 *
 *      图片压缩
 *          除了代码的压缩外，有时对图片的压缩也是很有必要，一般情况下图片在Web系统的
 *          比重都比较大。
 *          压缩工具：tinypng、JpegMini、ImageOptim
 *
 *      Gzip压缩
 *          配置Nginx服务
 *              gzip on|off; #是否开启gzip
 *              gzip_buffers 32 4k | 16 8k #缓冲(在内存中缓冲几块？每块多大)
 *              gzip_comp_level[1-9] #推荐6 压缩级别(级别越高，压的越小，越浪费CPU计算资源)
 *              gzip_disable #正则匹配UA 什么样的Uri不进行gzip
 *              gzip_min_length 200 #开始压缩的最小长度
 *              gzip_http_version 1.0|1.1 #开始压缩的http协议版本
 *              gzip_proxied  # 设置请求者代理服务器，该如何缓存内容
 *              gzip_types text/plain application/xml #对哪些类型的文件用压缩
 *                  ，如txt,xml,html,css
 *              gzip_vary on | off #是否传输gzip压缩标志
 *
 *      其他工具
 *          自动化构建工具Grunt
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
 *
 *
 */
$since = $_SERVER['HTTP_IF_MODIFIED_SINCE'];
$lifetiem = 3600;
if(strtotime($since) + $lifetime > time()){
    header('HTTP/1.1 304 Not Modified');
    exit;
}
header('Last-Modified: '.gmdate('D, d M Y H:i:s',time()).' GMT');
echo time();



