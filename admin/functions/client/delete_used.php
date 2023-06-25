<?php

    require_once "../conntact.php";

    $delete_client    =   "DELETE FROM client_used ";
    $query  =   $conn -> query($delete_client);

    if ($query) {

        header ("location: ../../client_table.php");

    } else {

        $conn -> query_error;

    }