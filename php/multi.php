<?php
    $emp=[
        [1,"anup","manager",30000],
        [2,"rakesh","IT expert",25000],
        [3,"aananda","sales",25000]
    ];
    // echo "<pre>";
    // print_r ($emp);
    // echo "</pre>";

    foreach($emp as $val1){
        foreach($val1 as $val2){
            echo $val2. " ";//. to concatinate
        }
        echo "<br>";
    }
?>