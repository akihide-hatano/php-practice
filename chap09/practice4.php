

<?php
    $language = "Python";
    print "{$language} は ";
    print match($language){
        "Python","PHP","Ruby"=>"インタープリター言語",
        "C言語","Java"=>"コンパイル言語"
    };
    print "です。<br/>";
?>