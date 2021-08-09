<?php
// Delete empty dir
require('str.php');
$dir = 'z:/upl1';
$ar = dir_to_array($dir,true);
if ($ar == false) {
    exit("Not found files $dir");
}
//print_r($ar);

function show_files($ar,$key='') {
    if (is_array($ar)) {
        foreach($ar as $k=>$val) {
            show_files($val,$k);
        }
        if (count($ar)==0) {
            if (is_dir($key)) {
                rmdir($key);
            }
        }
    } else {
        //echo $key.' '.$ar . PHP_EOL;
    }
}

show_files($ar);