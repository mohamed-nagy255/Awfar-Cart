<?php

    $name   =   $_POST['prname'];
    $desc   =   $_POST['descr'];
    $price  =   $_POST['price'];
    $ratio  =   $_POST['ratio'];
    // $commoiswion   =   $_POST['commoiswion'];

    $commoiswion = ($price * $ratio) / 100 ;

    require_once "../conntact.php";

    // print_r ($commoiswion);
    // exit();

    $insert_pricing    =   "INSERT INTO
    pricing
    (prname, descr, price, ratio, commoiswion)
    VALUE
    ('$name' , '$desc' , '$price' , '$ratio' , '$commoiswion')
    ";

    @$query  =   $conn -> query($insert_pricing);

    if ($query) {

        header ("location: ../../pricing.php");

    } else {

        $conn -> query_error;

    }