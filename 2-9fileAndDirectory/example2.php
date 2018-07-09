<?php
$dir = './test';

//打开目录
//读取目录当中的文件
//如果文件类型是目录，继续打开目录
//读取子目录的文件
//如果文件类型是文件，输出文件名称
//关闭目录
//

function loopDir($dir){
    $handle = opendir($dir);
    while(false!==($file=readdir($handle))){
//        echo $file."\n";
        if ($file != '.' && $file!='..'){  //所有目录都有 .  ..两个目录，操作前，必须过滤掉
            echo $file."\n";
            if (filetype($dir.'/'.$file) == 'dir'){
                loopDir($dir.'/'.$file);
            }
        }
    }
}

loopDir($dir);


//着重练习 fopen opendir readdir closedir

