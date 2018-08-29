<?php
/**
 * 为什么要减少HTTP请求
 *      性能黄金法则
 *          只有10%-20%的最终用户响应时间花在接收请求的HTML文档上，剩下的80%-90%时间花
 *          在HTMl文档所引用的所有组件(图片，script,css,flash等等)进行的HTTP请求上。
 *
 *      如何改善
 *          改善响应时间的最简单途径就是减少组件的数量，并由此减少HTTP请求的数量。
 *
 *      HTTP连接产生的开销
 *          域名解析 -- TCP连接 -- 发送请求-- 等待--下载资源--解析时间
 *
 *      疑问？
 *          DNS缓存
 *          Keep-Alive
 *
 *      打破谣言
 *          查找DNS缓存也需要时间，多个缓存就要查找多次有可能缓存会被清除。
 *          HTTP1.1协议规定请求只能串行发送，也就是说一百个请求必须逐次发送，前面的一个请求完成才能开始下个请求。
 *
 *      减少HTTP请求的方式
 *          图片地图
 *              图片地图允许你在一个图片上关联多个URL。目标URL的选择取决于用户单击了图片上的哪个位置。
 *              我们可以通过使用五个分开的图片，然后每个图片对应一个超链接
 *              产生了5个HTTP请求，我们的目标是要减少HTTP请求
 *              将五个图片合并为一张图片，然后以位置信息定位超链接。
 *              把HTTP请求减少为一个，可以保证设计的完整性和功能的齐全性。
 *
 *              使用<map><area></area></map>标签
 *              未使用图像地图的例子：
 *              http://stevesouders.com/hpws/imagemap-no.php
 *              使用了图像地图的例子
 *              http://stevesouders.com/hpws/imagemap.php
 *
 *          CSS Sprites
 *              CSS Sprites中文翻译为CSS精灵，通过使用合并图片，通过指定
 *              css的background-image和background-position来显示元素
 *
 *              background-position属性
 *                  background-position:x y;x和y可以写负值也可以写正直，我们可
 *                  以想象图片的左上方为(0,0),以(0,0)坐标向右是为负数的x轴，以
 *                  (0,0)坐标向下是为负数的y轴。
 *
 *              使用CSS精灵的案例
 *              http://stevesouders.com/hpws/sprites.php
 *
 *              性能影响
 *                  图片地图与CSS精灵的响应时间基本上相同，但比使用各自独立图片的方式要快50%以上
 *
 *          合并脚本和样式表适
 *              使用外部的js和css文件引用的方式，因为这要比直接写在页面中性能要更好一点
 *              独立的一个js比用多个js文件组成的页面载入要快38%
 *
 *              把多个脚本合并为一个脚本，把多个样式表合并为一个样式表
 *              http://stevesouders.com/hpws/combo-none.php
 *              http://stevesouders.com/hpws/combo.php
 *
 *          图片使用Base64编码减少页面请求数
 *              采用Base64的编码方式将图片直接嵌入到网页中，而不是从外部载入
 *              <img sre="data:image/git;base64,/9j/4AAQSkZJ...">
 *              http://stevesouders.com/hpws/inline-images.php
 *              http://stevesouders.com/hpws/inline-css-images.php
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
 *
 *
 */


