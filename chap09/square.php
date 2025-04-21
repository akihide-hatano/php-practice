<?php

    function isEven($num){
        return $num % 2 === 0;   
    }

    function square($num){
        return $num * $num;
    }

    function squareRoot($num){
        return sqrt($num);
    }

    $inputNumber = 4*5;

    if(is_numeric($inputNumber)){
        if(isEven($inputNumber)){
            $result = square($inputNumber);
            echo "{$inputNumber} は偶数なので、2乗すると {$result} です。\n";
        }else{
            $result = squareRoot($inputNumber);
            echo "{$inputNumber} は奇数なので、平方根すると {$result} です。\n";
        }
        
    }else if(is_string($inputNumber)){
            echo "文字列なんて入れてないで寝ろ";
        }else if(is_array($inputNumber)){
            echo "配列だぞ。わかってるのか";
    }else if(is_bool($inputNumber)){
        echo "真偽値やろ。分かってんねん。";
    }else{
        echo "何の値入れてるかわからんわ";
    }


?>