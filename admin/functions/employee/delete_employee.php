<?php

    $id =   $_GET['id'];

    require_once "../conntact.php";

    $delete_employee    =   "DELETE FROM employee WHERE id = $id";
    $query  =   $conn -> query($delete_employee);

    if ($query) {

        header ("location: ../../employee_table.php");

    } else {

        $conn -> query_error;

    }