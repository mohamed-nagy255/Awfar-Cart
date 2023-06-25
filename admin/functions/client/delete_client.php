<?php

    $id =   $_GET['id'];

    require_once "../conntact.php";

    $delete_client    =   "DELETE FROM client WHERE id = $id";
    $query  =   $conn -> query($delete_client);

    if ($query) {

        header ("location: ../../client_table.php");

    } else {

        $conn -> query_error;

    }