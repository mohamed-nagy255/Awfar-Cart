<?php

    $name      =   $_POST['username'];
    $shop      =   $_POST['shop_name'];
    $shops     =   $_POST['shops'];
    $phone     =   $_POST['phone'];
    $address   =   $_POST['address'];
    $code      =   $_POST['code'];
    $sale      =   $_POST['sale_id'];
    $pric      =   $_POST['pricing_id'];
    $employee  =   $_POST['employee_id'];
    $start     =   $_POST['starting_date'];
    $expiry    =   $_POST['expiry_date'];

    require_once "../conntact.php";

    $select_pricing = "SELECT commoiswion FROM pricing WHERE id = $pric";
    $query = $conn -> query($select_pricing) -> fetch_assoc();
    @$comm = $query['commoiswion'];

    // print_r ($_POST);
    // exit();

    $insert_client    =   "INSERT INTO
    client
    (username, shop_name, shops, phone, address, code, sale_id, pricing_id, employee_id, starting_date, expiry_date, commoiswion) 
    VALUE
    (
    '$name' , 
    '$shop' ,
    '$shops' ,
    '$phone' ,
    '$address' ,
    '$code' ,
    '$sale' ,
    '$pric' ,
    '$employee' ,
    '$start' ,
    '$expiry',
    $comm
    )
    ";

    $query  =   $conn -> query($insert_client);

    if ($query) {

        header ("location: ../../client_table.php");

    } else {

        $conn -> query_error;

    }


    