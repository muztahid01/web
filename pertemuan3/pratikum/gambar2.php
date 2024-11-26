<?php
$n = 5;
for ($a=$n; $a>0;$a--){
    for($i=1;  $i<=$a; $i++){
        echo "&nbsp;" ;
    }
    for ($a1=$n; $a1>=$a;$a1--){
        echo "*";
    }
    echo "<br>";
}
?>