<?php

echo "Hello World!";
echo "\n";
$lala = "luck";
$append = "This is";
$append1 = "for append/add into sentence";
echo "<br>";
echo lala;
define ("okay" , "This is testing for define function");//add true to make it case sensative
function a() {
        echo "<p>this is testing inside of function for global variable : $lala<p>";
        
        }
        a();
        echo "<br>";
        echo "<br>";
        echo "athis is testing outside of function for global variable : $lala";

        function b() {
        global $lar ;
        $lar = "larlar";
        echo "<p>bthis is testing inside of function for global variable : $lar<p>";
        
        }
        echo b();
        $lalala = $lar;
        echo "<br>";
        echo "<br>";
        echo "bthis is testing outside of function for global variableasdas: $lalala";

        
        function c() {
        echo "<p>Cthis is testing inside of function for global variable :" . $GLOBALS['lala']."<p>" ;
        
        }
        echo "<br>";
        echo c();


        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo strlen("la la la la");
        echo "<br>";
        echo str_word_count("la1 la2 la3 la4");
        echo "<br>";
        echo strpos("la1 la2 la3 la4", "3");
        echo "<br><br><br><br><br>";
        echo okay;
        echo "<br><br>";
        $append .= $append1;
        echo $append;

?>