<?php

    $id =   $_GET['id'];

    require_once "../conntact.php";

    $delete_pricing    =   "DELETE FROM pricing WHERE id = $id";
    $query  =   $conn -> query($delete_pricing);

    if ($query) {

        header ("location: ../../pricing.php");

    } else {

        $conn -> query_error;

    }