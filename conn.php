<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "owmisart";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("error");
    }

?>