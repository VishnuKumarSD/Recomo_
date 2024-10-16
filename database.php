<?php
    
    try{
        $conn = mysqli_connect("localhost","root","","movie website");
        //echo "database connected";
    }catch(mysqli_sql_exception){
        echo "couldn't connect";
    }
?>