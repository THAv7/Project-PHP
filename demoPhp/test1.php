<?php
    $people= [
        ['chantha',22,'kampongcham',['number','10689758']],
        ['vantha',20,'phnom penh'],
        ['chanthy',23,'siem reap']
    ];
    //echo $people[1][2];

    /*function show($str){
        echo $str;
    }
    show('welcome to my channel');*/

    function demo($parameter){
        echo '<pre>';
            die(var_dump($parameter));
        echo '</pre>';
    }
    demo(['Hello','world']);
?>