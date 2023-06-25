<?php


    $id      = $_POST['id'];
    $statue  = $_POST['statue'];

    // print_r($_POST);
    // exit();

    require_once "../conntact.php";

    $edite   =  "UPDATE client
    SET
        statue = $statue
    WHERE
        id = $id
    ";

    $query  =  $conn -> query($edite);

    if ($query) {

        header ("location: ../../client_table.php");

    } else {

        echo $conn -> error;

    }