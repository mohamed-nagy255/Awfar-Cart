<?php

    // require_once "../conntact.php";

    $select_date  =  "SELECT * FROM client";

    @$query  =  $conn -> query($select_date);

    // $date  =  $query -> fetch_assoc();

    foreach ($query as $key) {
        
        $id = $key['id'];
        $dateA = $key['expiry_date'];
        $dateB = date("y.m.d");                

        if(strtotime($dateA) < strtotime($dateB)){

            $query = $conn -> query("UPDATE client
            SET
                statue = 0
            WHERE
            id = $id
            "
            );

            if ($query) {
                header ("location: ../../index.php");
            }

        }
        // else {
        //     echo "dateB is newer";
        // }

    }

   
    
    

    
