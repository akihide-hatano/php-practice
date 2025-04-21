<!-- 変数$languageの値が「Python」「PHP」「Ruby」であれば「インタプリター言語」「C#」「Java」であれば「コンパイル言語」と表示するスクリプトを、switch命令を使って作成してください。 -->

<?php
    $language = "Python";

    switch($language){
        case "Python":
        case "PHP":
        case "Ruby":
            $type = "インタプリター言語";
            break;

        case "c#":
        case "Java":
            $type = "コンパイル言語";
            break;

        default:
            $type = "不明な言語";
            break;         
    }
    print "{$language}は{$type}です。"

?>