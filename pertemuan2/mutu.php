<?php
$nilai_akhir=77;
if ($nilai_akhir>=85){
    $mutu ="A";
} elseif($nilai_akhir>=75){
    $mutu ="B";
}elseif($nilai_akhir>=55){
    $mutu ="C";
}elseif($nilai_akhir>=40){
    $mutu ="D";
} else {
    $mutu ="E";
}
    
echo("nilai akhir=". $nilai_akhir);
echo ("<br/>");
echo ("nilai mutu=".$mutu);
?>