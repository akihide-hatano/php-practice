<?php
    
    function isEven($num){
        return $num % 2 === 0;
    }
    $input = 10;
    
    if(isEven($input)){
        print "{$input}は偶数じゃい";
    }else{
        print "{$input}は奇数じゃい";
        
    }


    //引数を値で使用する場合
    function getRemainderByFive($num){
        return $num % 5;
    }

    function nijyou($num){
        return $num*$num;
    }

    $inputNumber = 26;
    $remainder = getRemainderByFive($inputNumber);
    echo "<div>{$inputNumber}の5で割ったあまりは{$remainder}です。</div>";
    
    $nijyouremain = nijyou($inputNumber);
    echo "<div>{$inputNumber}の2乗は{$nijyouremain}です。</div>";

    $halfnijyou = $nijyouremain / 2;
    echo $halfnijyou;
    

?>