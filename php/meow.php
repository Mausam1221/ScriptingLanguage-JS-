<?php
    // $age=array(
    //     "ram"=>24,
    //     "bibek"=>20,
    //     "sushant"=>29,
    // );

    $age=[
        'ram'=>24,
        'bibek'=>20,
        'sushant'=>23,
    ];
    foreach($age as $key => $val){
        echo $key."=".$val;
    }


    $colors=array("blue",5,5.5,"Orange");
    echo "<pre>";
    echo $age["ram"];
    echo "<pre>";
?>