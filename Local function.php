<?php
 $x=45;
 $y=20;
 $z=12;

 function text(){
    static $a=0;
    $a++;

    echo "Add of the Number is".$a;
 }
 text();
 echo "<br/>";
 text();

?>