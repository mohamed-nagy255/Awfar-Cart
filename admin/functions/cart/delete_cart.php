<?php

    $id =   $_GET['id'];

    require_once "../conntact.php";

    // print_r($_GET);
    // exit();

    $delete_cart    =   "DELETE FROM cart WHERE id = $id";
    $query  =   $conn -> query($delete_cart);

    if ($query) {

        header ("location: ../../cart_table.php");

    } else {

        $conn -> query_error;

    }