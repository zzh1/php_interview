<?php
function loopDir($dir)
{
    $handle = opendir($dir);
    while (false !== ($file = readdir($handle))) {
        if($file != '.' && $file!='..'){
            echo $file."\n";
            if(filetype($dir.'/'.$file) == 'dir'){
                loopDir($dir.'/'.$file);
            }
        }
    }
}

$dir = './test';
loopDir($dir);


