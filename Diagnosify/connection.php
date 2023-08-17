<?php

    $database= new mysqli("localhost","root","root","edoc", 8111);
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>