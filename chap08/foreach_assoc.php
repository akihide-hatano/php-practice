<?php

$data = ['高江' => '男', '掛谷' => '女', '日尾' => '男', '薄井'=>'hogehoge', '和田' => '男'];

    foreach( $data as $key => $val){
        print "{$key}は{$val}です<br/>";
    
        print "名前は{$key}です<br/>";

    }
    
    print"薄井は{$data["薄井"]}です<br/>";





?>