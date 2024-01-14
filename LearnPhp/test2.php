
    <?php
        define("Day_of_the_week",7);
        echo Day_of_the_week."<br>";

        const Weekend = 7;
        echo Weekend."<br>";
        echo __LINE__."<br>";
        echo __FILE__."<br>";
        echo __DIR__;
    ?>
    <?php
        $arr= [1,2,3,4];
        foreach($arr as $index => &$value){
            $value = $value * 2;
            echo "<br>";
        }
        print_r($arr);

        echo "<br>";
        foreach ($arr as $value){
            echo $arr[3]."<br>";
        }
    ?>