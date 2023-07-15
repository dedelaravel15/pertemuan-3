<?php 
$hari  = "sabtu";
$mood;
switch($hari){
    case 'senin' :
        $mood = 'senin | stres';
        break;
    case 'selasa' :
        $mood = 'stres banget';
        break;
    case 'rabu' :
        $mood = 'kurang stres nya';
        break;
    case 'kamis' :
        $mood = 'senyum';
        break;          
    case 'jumat' :
        $mood = 'senym bahagia';
        break;
    case 'sabtu':
    case 'minggu' :
        $mood = 'full senyum';
        break;
    default : 
    $mood = 'biasa aja';
    break;             
}
echo "hari ini saya " . $mood;

