<?php
    $name="ChanthaSon";
    $gender="Male";
    $age="22";
    echo $name." ".$gender." ".$age."<br><br>";
?>
<?php
    echo "Name: ".$name."<br>Sex: ".$gender."<br>Age: ".$age."<br><br>";
?> 
<?php
    $a=100;
    $b=90;
    $c=80;
    $sum=$a+$b+$c;
    $avg=($sum/3);
    function insert(){
        global $sum;
        global $avg;
        echo "Total score: ".$sum;
        echo "<br>Average: ".$avg;
    }
    function show(){
        global $sum;
        global $avg;
    }
    insert();
?>