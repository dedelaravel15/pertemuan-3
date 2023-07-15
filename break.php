<?php 
$hewan = ['kucing', 'anjing', 'kambing', 'ayam', 'jerapah'];
    for($i = 1; $i < count($hewan); $i++){
        if($hewan[$i] == "jerapah"){
            echo "ketemu jerapah";
            break;
        }
        echo "bukan jerapah";
    }