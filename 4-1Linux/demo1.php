<?php
/**
 * 回顾真题：
 *      写出尽可能多的Linux命令
 * 考点：
 *      linux常见命令
 *      延伸：系统定时任务
 *      延伸：vi/vim编辑器
 *      延伸：shell基础
 *
 * Linux常用命令
 *      系统安全
 *          sudo  su  chmod   setfacl
 *      进程管理
 *          w  top  ps  kill   pkill  pstree  killall
 *      用户管理
 *          id  usermod  useradd  groupadd  userdel
 *      文件系统
 *          mount umount fsck  df  du
 *      系统关机和重启
 *          shutdown  reboot
 *      网络应用
 *          curl  telnet  mail  elinks
 *      网络测试
 *          ping netstat  host
 *      网络配置
 *          hostname  ifconfig
 *      常用工具
 *          ssh  screen  clear  who  date
 *      软件包管理
 *          yum  rpm  apt-get
 *      文件查找和比较
 *          locate  find
 *      文件内容查看
 *          head  tail   less  more
 *      文件处理
 *          touch  unlink  rename  ln  cat
 *      目录操作
 *          cd   mv  rm  pwd  tree cp ls
 *      文件权限属性
 *          setfacl  chmod  chown   chgrp
 *      压缩/解压
 *          bzip2/bunzip2   gzip/gunzip   zip/unzip   tar
 *      文件传输
 *          ftp   scp
 *
 * 延伸：Linux系统的定时任务
 *      crontab命令
 *          crontab -e
 *          * * * * * * 命令(分时日月周)
 *      at命令
 *          # at 2:00 tomorrow
 *          at>/home/Jason/do_job
 *          at>Ctrl+D
 *
 * 延伸：vi/vim编辑器
 *      模式
 *          一般模式、编辑模式和命令行模式
 *          一般模式：删除、复制和粘贴
 *          切换编辑模式：i、I  o  O  a  A  r  R
 *          切换命令行模式：  :  /  ?
 *      移动光标
 *          ctrl+f、 ctrl+b、0或者功能键Home、$或者功能键End、G、gg、N+enter
 *      查找和替换
 *          /word    ?word    :n1,n2s/word1/word2/g
 *          :1    $s/word1/word2/g    :1,$s/word1/word2/gc
 *      删除、复制和粘贴
 *          x,X   dd    ndd   yy   nyy   p   P   ctrl+r   .
 *      保存和退出
 *          w   q   wq
 *      视图模式
 *          v   V    ctrl+v    y    d
 *      配置
 *          :setnu (显示行)    :setnonu（不显示行）
 *
 * 延伸：shell基础
 *      脚本执行方式
 *          赋予权限，直接执行，例：chmod + x test.sh; ./test.sh
 *          调用解释器使得脚本执行，例：bash  csh   ash  bsh  ksh等等
 *          使用source命令， 例：source test.sh
 *      编写基础
 *          开头用#!指定脚本解释器，例如：#!/bin/sh
 *          编写具体功能
 *
 * 解题方法
 *      牢记以上基础知识点
 *
 * 一网打尽
 *      真题：如何实现每天0点钟重新启动服务器
 *      crontab -e
 *      * * * * * reboot
 *      分 时 日 月 周 reboot
 *      0  0  * * * reboot
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

