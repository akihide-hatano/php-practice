<?php
    $rank = "";

    $result = match($rank){
        "甲"=>"大変いいです",
        "乙"=>"いいです",
        "丙"=>"大変いいです",
        default=>"設定してください"
    };
    print $result;
    
?>