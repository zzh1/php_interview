<?php
$id = $_GET['id'];

if(empty($id)){
    $id = '';
}

$cache_name = md5(__FILE__).$id.'.html';

$cache_lifetime = 3600;

//var_dump(filectime(__FILE__) <= filectime($cache_name));
//var_dump(filemtime(__FILE__) <= filemtime($cache_name));
//var_dump(filectime($cache_name));
//var_dump(filemtime(__FILE__) <= filemtime($cache_name));

if(filemtime(__FILE__) <= filemtime($cache_name)  && file_exists($cache_name) && filemtime($cache_name) + $cache_lifetime > time()){
    include $cache_name;
    exit;
}

ob_start();
?>
<b>This is My Script id = <?php echo $id;?></b>
<?php
$content = ob_get_contents();
ob_end_flush();

$handle = fopen($cache_name,'w');
fwrite($handle,$content);
fclose($handle);
?>