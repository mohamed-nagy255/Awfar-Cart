<?php

    $name   =   $_POST['username'];
    $pass   =   md5($_POST['password']);
    $priv   =   $_POST['priv'];

    require_once "../conntact.php";

    // print_r ($_POST);
    // exit();

    $insert_owner    =   "INSERT INTO
    owner
    (username, password, priv)
    VALUE
    ('$name' , '$pass' , '$priv')
    ";

    $query  =   $conn -> query($insert_owner);

    if ($query) {

        header ("location: ../../owner_table.php");

    } else {

        $conn -> query_error;

    }