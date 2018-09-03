<?php
//创建socket监听
//
$sockserv = stream_socket_server('tcp://0.0.0.0:8000',$errno,$errstr);

for($i = 0;$i<5;$i++ )
{
    if(pcntl_fork() == 0)
    {
        while(true)
        {
            $conn = stream_socket_accept($sockserv);
            if($conn == false)
            {
                continue;
            }
            $request = fread($conn,9000);
            $response = 'hello';
            fwrite($conn,$response);
            fclose($conn);
        }
        exit(0);
    }
}


