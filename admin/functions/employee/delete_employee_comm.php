<?php

    $id =   $_GET['id'];

    require_once "../conntact.php";

    $delete_employee    =   "ALTER TABLE employee DROP Totale WHERE id = $id";
    $query  =   $conn -> query($delete_employee);

    if ($query) {

        header ("location: ../../employee_table.php");

    } else {

        $conn -> query_error;

    }