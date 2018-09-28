<?php
/**
 * 回顾真题：至少写出一种验证139开头的11位手机号码的正则表达式
 * 考点：手机号码的正则表达式编写
 *
 * 延伸：正则表达式组成及编写方法
 * 延伸考点：正则表达式
 *      正则表达式的作用：分割、查找、匹配、替换字符串
 *      分隔符：正斜线(/)、hash符号(#)以及取反符号(~)
 *      通用原子: \d  十进制0-9            \D  除了0-9以外的字符
 *                \w  数字、字母、下划线   \W  除了数字、字母、下划线
 *                \s  空白符               \S  除了空白符
 *      元字符：   .   *   ?  $ + {n} {n,} {n,m} [] () [^]  | [-]
 *      模式修正符： i 不区分大小写
 *                   m 表示多行匹配。什么是多行匹配呢？就是匹配换行符两端的潜在匹配。影响正则中的^$符号（前提字符串里有换行）
 *                   e 可执行模式，此为PHP专有参数，例如preg_replace函数。PHP7.0  以移除
 *                   s  /s 与/m相对，单行模式匹配。
 *                   U  取消贪婪模式
 *                   x /x 忽略空白模式。
 *                   A 必须以此模式开头
 *                   D 修正$对\n的忽略
 *                   u 进行utf-8中文匹配时用到
 *      后向引用
 *      贪婪模式
 *      正则表达式PCRE函数：
 *                  int preg_match(string $pattern , string $subject[, array &$matches [, int $flags = 0 [, int $offset = 0 ]]]):
 *                          执行匹配正则表达式 搜索subject与pattern给定的正则表达式的一个匹配.
 *                          preg_match()返回 pattern 的匹配次数。 它的值将是0次（不匹配）或1次，因为preg_match()在第一次匹配后 将会停止搜索。
 *                  int preg_match_all(string $pattern , string $subject[, array &$matches [, int $flags = PREG_PATTERN_ORDER [, int $offset = 0 ]]]):
 *                          搜索subject中所有匹配pattern给定正则表达式 的匹配结果并且将它们以flag指定顺序输出到matches中.
 *                          返回完整匹配次数（可能是0），或者如果发生错误返回FALSE。
 *                  mixed preg_replace(mixed $pattern , mixed $replacement , mixed $subject [, int $limit = -1 [, int &$count ]])
 *                          搜索subject中匹配pattern的部分， 以replacement进行替换。
 *                          如果subject是一个数组， preg_replace()返回一个数组， 其他情况下返回一个字符串。
                            如果匹配被查找到，替换后的subject被返回，其他情况下 返回没有改变的 subject。如果发生错误，返回 NULL 。
 *                  array preg_split(string $pattern , string $subject [, int $limit = -1 [, int $flags = 0 ]]):
 *                          通过一个正则表达式分隔字符串
 *                          返回一个使用 pattern 边界分隔 subject 后得到 的子串组成的数组， 或者在失败时返回 FALSE。
 *      中文匹配(一般不会考)： UTF-8汉字编码范围是0x4e00-0x9fa5,
 *                  在ANSI(gb2312)环境下，0xb0-0xf7,0xa1-0xfe
 *                  UTF-8要使用u模式修正字符串被当成UTF-8，在ANSI(gb2312)环境下，要使用
 *                  chr将Ascii码转换为字符
 *
 * 解题方法
 *      先写出一个要匹配的字符串
 *      自左向右的顺序使用正则表达式的原子和元字符进行拼接
 *      最终加入模式修正符
 *      不可死记硬背模式
 *      练习常见正则表达式(URL、Email、IP地址、手机号码等)
 *
 *
 *
 */

//中文匹配
/*$str = '中文';
//$pattern = '/[\x{4e00}-\x{9fa5}]+/u';
$pattern = '/['.chr(0xb0).'-'.chr(0xf7).']['.chr(0xa1).'-'.chr(0xfe).']+/';
preg_match($pattern,$str,$match);
var_dump($match);*/




