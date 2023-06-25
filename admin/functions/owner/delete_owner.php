<?php

    $id =   $_GET['id'];

    require_once "../conntact.php";

    $delete_owner    =   "DELETE FROM owner WHERE id = $id";
    $query  =   $conn -> query($delete_owner);

    if ($query) {

        header ("location: ../../owner_table.php");

    } else {

        $conn -> query_error;

    }