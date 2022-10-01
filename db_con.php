<?php

$sn ="localhost";
$un ="root";
$pw = "";
$dbn="hackathon";

$conn = mysqli_connect($sn,$un,$pw,$dbn);
if(!$conn){
    echo "failed";
}
?>