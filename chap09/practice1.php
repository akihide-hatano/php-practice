<!-- for命令とcontinue命令とを使って、1～100の範囲にある奇数値の合計を求めてみましょう。 -->

<?php

    $sum = 0;
    for( $i =0 ; $i < 100; $i++){
        if($i%2 === 0){
            continue;
        }
        $sum += $i;
    }
    print "1から100までの奇数の合計は{$sum}です。"
?>



