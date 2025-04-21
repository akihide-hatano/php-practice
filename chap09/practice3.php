<!-- ［4］のスクリプトをif命令を使って書き換えてみましょう。 -->

<?php
    $language = "Python";

    if($language === "Python"|| $language === "PHP" || $language === "RUby"){
        print "{$language}はインタープリター言語です。";
    }else if($language === "Python"|| $language === "PHP"){
        print"{$language}はコンパイル言語です。";
    }else{
        print "設定していない言語です";
    }

?>