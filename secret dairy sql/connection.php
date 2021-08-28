<?php

$link = mysqli_connect("localhost" , "root" ,"" ,"secret_diary1");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>