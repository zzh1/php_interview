<?php
/**
 * 回顾真题
 *      不断在文件hello.txt头部写入一行"Hello World"字符串，要求代码完整
 * 考点：文件读取/写入操作
 * 延伸：目录操作函数、其他文件操作
 *
 * 文件读取/写入操作
 *      fopen()函数
 *          用来打开一个文件，打开时需要指定打开模式
 *          打开模式：  r/r+、 r:只读方式打开，指针指向文件头  r+:读写方式打开，指针指向文件头
 *                      w/w+、 w:写入方式打开，指针指向文件头并将文件大小截为零（清空文件） w+：读写方式打开，其余相同
 *                      a/a+、 a:写入方式打开，指针指向文件末尾(追加方式)。  a+: 读写方式打开，其余相同
 *                      x/x+、 x:创建并以写入方式打开，将文件指向文件头。如文件已存在，则 fopen() 调用失败并返回 FALSE
 *                             x+:创建并以读写方式打开，其他与x一样
 *                      b、t、 b:以二进制形式打开。t:windows独有，文本转换标记，将\n转换为\r\n 等等
 *      写入函数
 *          fwrite()
 *          fputs()
 *      读取函数
 *          fread()
 *          fgets()
 *          fgetc()
 *      关闭文件函数
 *          fclose()
 *      不需要fopen()打开的函数
 *          file_get_contents()
 *          file_put_contents()
 *      其他读取函数
 *          file()
 *          readfile()
 *      访问远程文件
 *           开启allow_url_fopen,HTTP协议链接只能使用只读，FTP协议可以使用只读或者只写
 *
 * 延伸考点：目录操作函数
 *      名称相关:
 *          basename()
 *          dirname()
 *          pathinfo()
 *      目录读取：
 *          opendir()
 *          readdir()
 *          closedir()
 *          rewinddir()
 *      目录删除：
 *          rmdir()
 *          mkdir()
 *
 * 延伸考点：其他函数
 *      文件大小：
 *          filesize()
 *      目录(下面两函数 为磁盘)大小:
 *          disk_free_space()
 *          disk_total_space()
 *      文件拷贝
 *          copy()
 *      删除文件
 *          unlink()
 *      文件类型
 *          filetype()
 *      重命名文件或者目录
 *          rename()
 *      文件截取
 *          ftruncate()
 *      文件属性
 *          file_exits()
 *          is_readable()
 *          is_writeable()
 *          is_executeable()
 *          filectime()
 *          fileatime()
 *          filemtime()
 *      文件锁
 *          flock()
 *      文件指针
 *          ftell()
 *          fseek()
 *          rewind()
 *
 * 解题方法
 *      牢记文件操作函数及几种打开模式
 *      理解目录的操作步骤
 *      尝试练习完成目录的复制和删除函数的编写
 *
 *
 * 一网打尽
 *     通过PHP函数的方式对目录进行遍历，写出程序
 *
 *
 *
 *
 *
 *
 */


