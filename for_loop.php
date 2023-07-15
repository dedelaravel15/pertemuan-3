<?php 
for($i = 01; $i < 10; $i++){
        echo "<br/>Angka ". $i;
}

$stres = ['mood', 'stres', 'kurang stres', 'stres hilang', 'senyum', 'full senyum'];

for($i = 0; $i < count($stres); $i++){
    echo '<br>hari ini ' . $stres[$i];
}