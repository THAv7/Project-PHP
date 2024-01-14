<?php
    $car = [
        "camary",
        'tesla',
        "rang revo",
        50,
        true
    ];
    //echo $car[4];
    /*foreach($car as $v=>$value){
        echo $v." ".$value."<br>";
    }*/
    $str = "Hello cambodia code in the future in the code Hello";
    $word = explode(" ",$str);
    array_push($word,"aaa","bbb","ccc");
    $word["a"] = "HelloPHP";
    //echo count($car);
    print_r($word);
    //$array = implode(",",$word);
    //print_r("<br>".$array);

    echo array_key_exists("a",$word);   //check index of key in array;
    echo in_array("HelloPHP",$word);   // check value of array ("HelloPHP")
    $word = array_reverse($word,true);  // array_reverse
    print_r($word);

    $input =array("a"=> "greean","red","b"=>"green","blue");
    $search = array_search('green', $input); //array_search
    print_r($search);

    $result= array_unique($input);  //array_unique: Delete value as same as
    print_r($result);

    $count = array_count_values($word);
    print_r($count);
?>