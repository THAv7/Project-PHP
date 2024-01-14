<?php
    $value=['first name'=>'Eun','last name'=>'Chantha'];
?>
<body>
    <html>
        <?php
        foreach ($value as $key => $array)
        print_r("<li>$key => $array</li>");
        ?>
    </html>
</body>