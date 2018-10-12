<?php
/**
 * 回顾真题
 *      不断在文件hello.txt头部写入一行"Hello World"字符串，要求代码完整
 * 考点：文件读取/写入操作
 * 延伸：目录操作函数、其他文件操作
 *
 * 文件读取/写入操作
 *      fopen()函数
 *          resource fopen (string $filename , string $mode)  filename 指定的名字资源绑定到一个流上。
 *          用来打开一个文件，打开时需要指定打开模式
 *          打开模式：  r/r+、 r:只读方式打开，指针指向文件头  r+:读写方式打开，指针指向文件头
 *                      w/w+、 w:写入方式打开，指针指向文件头并将文件大小截为零（清空文件） w+：读写方式打开，其余相同
 *                      a/a+、 a:写入方式打开，指针指向文件末尾(追加方式)。  a+: 读写方式打开，其余相同
 *                      x/x+、 x:创建并以写入方式打开，将文件指向文件头。如文件已存在，则 fopen() 调用失败并返回 FALSE
 *                             x+:创建并以读写方式打开，其他与x一样
 *                      b、t、 b:以二进制形式打开。t:windows独有，文本转换标记，将\n转换为\r\n 等等
 *      写入函数
 *          int fwrite(resource $handle , string $string [, int $length ]) --  把 string 的内容写入 文件指针 handle 处。
 *                  handle：文件系统指针，是典型地由 fopen() 创建的 resource(资源)。
 *          fputs()：fwrite()的别名
 *      读取函数
 *          string fread(resource $handle , int $length)-- 读取文件
 *                  handle: 文件系统指针，是典型地由 fopen() 创建的 resource(资源)。
 *                  返回所读取的字符串， 或者在失败时返回 FALSE。
 *          string fgets(resource $handle [, int $length ]) - 从文件指针中读取一行
 *                  从指针 handle 指向的文件中读取了 length - 1 字节后返回字符串。如果文件指针中没有更多的数据了则返回 FALSE。
 *                  错误发生时返回 FALSE。
 *          string fgetc(resource $handle) --  从文件指针中读取字符
 *                  返回一个包含有一个字符的字符串，该字符从 handle 指向的文件中得到。
 *                  碰到 EOF 则返回 FALSE。
 *      关闭文件函数
 *          bool fclose() -- 关闭一个已打开的文件指针
 *                  handle 文件指针必须有效，并且是通过 fopen() 或 fsockopen() 成功打开的。
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE。
 *      不需要fopen()打开的函数
 *          string file_get_contents(string $filename[, bool $use_include_path = false [, resource $context [, int $offset = -1 [, int $maxlen ]]]])
 *                  -- 将整个文件读入一个字符串
 *                  file_get_contents() 函数是用来将文件的内容读入到一个字符串中的首选方法。
 *                  The function returns the read data 或者在失败时返回 FALSE.
 *          int file_put_contents(string $filename , mixed $data [, int $flags = 0 [, resource $context ]])
 *                  — 将一个字符串写入文件
 *                  和依次调用 fopen()，fwrite() 以及 fclose() 功能一样。
 *                  该函数将返回写入到文件内数据的字节数，失败时返回FALSE
 *      其他读取函数
 *          array file(string $filename [, int $flags = 0 [, resource $context ]])--把整个文件读入一个数组中
 *          int readfile(string $filename [, bool $use_include_path = false [, resource $context ]])--输出文件
 *                  返回从文件中读入的字节数。如果出错返回 FALSE 并且除非是以 @readfile() 形式调用，否则会显示错误信息。
 *      访问远程文件
 *           开启allow_url_fopen,HTTP协议链接只能使用只读，FTP协议可以使用只读或者只写
 *
 * 延伸考点：目录操作函数
 *      名称相关:
 *          string basename(string $path [, string $suffix ]) 返回路径中的文件名部分
 *                  path 一个路径。在 Windows 中，斜线（/）和反斜线（\）都可以用作目录分隔符。
 *                      在其它环境下是斜线（/）。
 *                  suffix 如果文件名是以 suffix 结束的，那这一部分也会被去掉。
 *                  返回 path 的基本的文件名。
 *          string dirname(string $path): 返回路径中的目录部分
 *                  给出一个包含有指向一个文件的全路径的字符串，本函数返回去掉文件名后的目录名。
 *          mixed pathinfo():返回文件路径的信息
 *                  如果没有传入 options ，将会返回包括以下单元的数组 array：dirname，basename 和 extension（如果有），以 及filename。
 *      目录读取：
 *          resource opendir(string $path [, resource $context ])--打开目录句柄
 *                  打开一个目录句柄，可用于之后的 closedir()，readdir() 和 rewinddir() 调用中。
 *                  如果成功则返回目录句柄的 resource，失败则返回 FALSE。
 *          string readdir([ resource $dir_handle ]) -- 从目录句柄中读取条目
 *                  返回目录中下一个文件的文件名。文件名以在文件系统中的排序返回。
 *                  dir_handle: 目录句柄的 resource，之前由 opendir() 打开
 *                  成功则返回文件名 或者在失败时返回 FALSE
 *          void closedir([ resource $dir_handle ])--关闭目录句柄
 *                  关闭由 dir_handle 指定的目录流。流必须之前被 opendir() 所打开。
 *          void rewinddir(resource $dir_handle)-- 倒回目录句柄
 *      目录删除：
 *          bool rmdir(string $dirname [, resource $context ])- 删除目录
 *                  尝试删除 dirname 所指定的目录。 该目录必须是空的，而且要有相应的权限。 失败时会产生一个 E_WARNING 级别的错误。
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE。
 *          bool mkdir(string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]])
 *                  -- 尝试新建一个由 pathname 指定的目录
 *                  mode: 默认的 mode 是 0777，意味着最大可能的访问权。有关 mode 的更多信息请阅读 chmod() 页面。
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE
 *
 * 延伸考点：其他函数
 *      文件大小：
 *          int filesize(string $filename) -- 取得文件大小
 *                  返回文件大小的字节数，如果出错返回 FALSE 并生成一条 E_WARNING 级的错误。
 *      目录(下面两函数 为磁盘)大小:
 *          float disk_free_space(string $directory) - 返回目录中的可用空间
 *                  directory 文件系统目录或者磁盘分区。
 *                  以浮点返回可用的字节数， 或者在失败时返回 FALSE。
 *                  例：$df = disk_free_space("C:");
 *          float disk_total_space(string $directory) - 返回一个目录的磁盘总大小
 *                  -- 以浮点返回一个目录的磁盘总大小字节数， 或者在失败时返回 FALSE。
 *      文件拷贝
 *          bool copy(string $source , string $dest [, resource $context ]) - 拷贝文件
 *                  将文件从 source 拷贝到 dest。
 *                  source 源文件路径。
 *                  dest 目标路径。如果 dest 是一个 URL，则如果封装协议不支持覆盖已有的文件时拷贝操作会失败。
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE。
 *      删除文件
 *          bool unlink(string $filename [, resource $context ]) - 删除文件
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE。
 *      文件类型
 *          string filetype(string $filename) - 取得文件类型
 *                  返回文件的类型。 可能的值有 fifo，char，dir，block，link，file 和 unknown。
 *                  如果出错则返回 FALSE。
 *      重命名文件或者目录
 *          bool rename(string $oldname , string $newname [, resource $context ]) - 重命名一个文件或目录
 *                  尝试把 oldname 重命名为 newname。
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE。
 *      文件截取
 *          bool ftruncate(resource $handle , int $size) -  将文件截断到给定的长度
 *                  接受文件指针 handle 作为参数，并将文件大小截取为 size。
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE。
 *      文件属性
 *          bool file_exits(string $filename) - 检查文件或目录是否存在
 *                  如果由 filename 指定的文件或目录存在则返回 TRUE，否则返回 FALSE。
 *          bool is_readable(string $filename) - 判断给定文件名是否可读
 *                  如果由 filename 指定的文件或目录存在并且可读则返回 TRUE，否则返回 FALSE。
 *          bool is_writeable(string $filename):别名 is_writable() - 判断给定的文件名是否可写
 *                  如果文件 filename 存在并且可写则返回 TRUE。
 *          bool is_executeable(string $filename) - 判断给定文件名是否可执行
 *                  如果文件存在且可执行则返回 TRUE，错误时返回FALSE。
 *          int filectime(string $filename) - 取得文件的 inode 修改时间
 *                  返回文件上次 inode 被修改的时间， 或者在失败时返回 FALSE。
 *                  时间以 Unix 时间戳的方式返回
 *          int fileatime(string $filename) -  取得文件的上次访问时间
 *                  返回文件上次被访问的时间， 或者在失败时返回 FALSE。
 *                  时间以 Unix 时间戳的方式返回。
 *          int filemtime(string $filename) - 取得文件修改时间
 *                  返回文件上次被修改的时间， 或者在失败时返回 FALSE。
 *                  时间以 Unix 时间戳的方式返回，可用于 date()。
 *      文件锁
 *          bool flock(resource $handle , int $operation [, int &$wouldblock ]) - 轻便的咨询文件锁定
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE。
 *      文件指针
 *          int ftell(resource $handle) -  返回文件指针读/写的位置
 *                  返回由 handle 指定的文件指针的位置，也就是文件流中的偏移量。
 *          int fseek(resource $handle , int $offset [, int $whence = SEEK_SET ]) - 在文件指针中定位
 *                  在与 handle 关联的文件中设定文件指针位置。 新位置从文件头开始以字节数度量，是以 whence 指定的位置加上 offset
 *                  成功则返回 0；否则返回 -1。注意移动到 EOF 之后的位置不算错误。
 *          bool rewind(resource $handle) - 倒回文件指针的位置
 *                  将 handle 的文件位置指针设为文件流的开头。
 *                  成功时返回 TRUE， 或者在失败时返回 FALSE。
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


