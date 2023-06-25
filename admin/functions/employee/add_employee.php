<?php

    $name   =   $_POST['username'];
    $pass   =   md5($_POST['password']);
    $phone  =   $_POST['phone'];
    $priv   =   $_POST['priv'];

    require_once "../conntact.php";

    // print_r ($_POST);
    // exit();

    $insert_employee    =   "INSERT INTO
    employee
    (username, password, phone, priv)
    VALUE
    ('$name' , '$pass' , '$phone' , '$priv')
    ";

    $query  =   $conn -> query($insert_employee);

    if ($query) {

        header ("location: ../../employee_table.php");

    } else {

        $conn -> query_error;

    }