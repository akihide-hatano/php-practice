<?php
    $sum = 0;
    for($i = 1; $i <= 100; $i++){
        $sum += $i;
        if($sum > 1000){break;}
    }
    print $sum;


?>