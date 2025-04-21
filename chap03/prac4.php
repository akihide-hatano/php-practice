

<?php

function totalPrice($discount,$price){
    $sum = (1-$discount)*$price;
    echo "値引き額は{$sum}円です。";
}

totalPrice(0.2,6000);

?>