<?php

$id = $employee['id'];
$total = $employee['Total'];

// echo $total;
// exit();


        $query = "SELECT * FROM client WHERE employee_id = $id";

        $query_run = $conn -> query($query);

        $qty= 0;
        while ($num = $query_run -> fetch_assoc()) {
            $qty += $num['commoiswion'];
        }
        echo $qty;

        if ($qty != $total) {

            $update = " UPDATE employee
            SET
            Total = $qty
            WHERE 
            id = $id
            ";

            $query_update = $conn -> query($update);
            $date = date('d');

            // if (isset ($date) == 7 ) {

            //     // $zero = 0;
    
            //     // $update = " UPDATE employee
            //     // SET
            //     // Total = $zero
            //     // WHERE 
            //     // id = $id
            //     // ";

            //     $delete = "DELETE FROM employee as Total WHERE id = $id";
    
            //     $query_update = $conn -> query($delete);
    
            // }

        } 
        

        

    //     $d=mktime(11, 14, 54, 8, 12, 2014);
    //     $date = date("Y-m-d h:i:sa", $d);

    // if (isset (date("Y-m-1 1:i:sa"))) {
    //     echo "true";
    //     exit();
    // }