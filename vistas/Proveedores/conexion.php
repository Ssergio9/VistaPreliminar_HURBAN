<?php
function connection(){
    $host = "localhost";
    $user = "root";
    $passw= "";
    $bd = "hurban";
    $con = mysqli_connect($host,$user,$passw);
    mysqli_select_db($con,$bd);
    return $con;


}


?>