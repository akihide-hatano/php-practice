<?php

    class Member{
        public static $memberCount = 0;
        public $name;

        function __construct($name)
        {
            $this -> name = $name;
            self::$memberCount ++;
        }

        public static function getMemberCount(){
            return self::$memberCount;
        }

        function getName(){
            return $this -> name;
        }

        function greeting(){
            echo "こんにちは{$this->name}さん";
        }
    }

    //オブジェクトを作成
    $member1 = new Member("佐藤");
    $member2 = new Member("石田");

    // 静的プロパティに直接アクセスして会員数を表示
    echo "現在の会員数: " . Member::$memberCount . "\n";
    
   $member2->greeting();




?>