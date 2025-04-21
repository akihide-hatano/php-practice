<?php
$data = ['山田', 'a', '日尾', '薄井', '和田'];
foreach( $data as $index => $value){
    print "名前は{$value}です<br/>";
    if ($index === 1) {
        $upperCaseValue = strtoupper($value); // 大文字に変換
        print "大文字の名前は{$upperCaseValue}です<br/>";
    }
}
?>