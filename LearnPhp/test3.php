<?php
    $arr  = ["name"=>"code",12,false];
    $str =  serialize($arr);
    $a = unserialize($str);
    print_r($a);
    echo __LINE__;
    echo "successful";
    setcookie( "/", time() +7*24*60*60);
?>