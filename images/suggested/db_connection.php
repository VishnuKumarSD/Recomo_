<?php
    
    try{
        $conn = mysqli_connect("localhost","root","","movie website");
        //echo "database connected";
        

        //  $sql = "SELECT title,length,image FROM movies";
        //  $all_movies = $conn->query($sql);
        //  $row = mysqli_fetch_assoc($all_movies);
        //  echo $row["image"]; // Check the output in your browser

    }catch(mysqli_sql_exception){
        echo "couldn't connect";
    }
?>