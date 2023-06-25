<?php

    $code = $_POST['code'];
    $date = $_POST['date'];
    $id = $_GET['id'];
    $qr = $_GET['qr_gn'];
    $count = $_GET['count'];
    $counter = ++$count;

    // print_r($_POST);
    // echo "<br>";
    // print_r($_GET);
    // exit();

    require_once "../admin/functions/conntact.php";

    $select    = "SELECT * FROM client WHERE sale_id = $id && code = $code";
    $query     = $conn -> query($select) -> fetch_assoc();
    $result_id = $query['id'];
    $result_count = $query['count'];
    $result_code =  $query['code'];
    $coun = ++$result_count;

    if ($result_id) {
        $insert_used = "INSERT INTO 
        client_used 
        (date, client_id) 
        VALUE 
        ('$date' , '$result_id')
        ";
        $query_insert = $conn -> query($insert_used);

        if ($query_insert) {
            $update_count_client = "UPDATE client
            SET
                count = $coun
            WHERE   
                id = $result_id
            ";
            $query_update_client = $conn -> query($update_count_client);

            if ($query_update_client) {
                $update_count_cart = "UPDATE cart
            SET
                count = $counter
            WHERE   
                id = $id
            ";
            $query_update_cart = $conn -> query($update_count_cart);

            if ($query_update_cart) {
                header ("location: ../data.php?count=" . $counter . "&qr_gn=" . $qr . "&id=" . $id . "&id_client=" . $result_id);
            }
            } else {
                echo $conn -> $query_update_cart;
            }
        } else {
            echo $conn -> $query_update_client;
        }
    } else {
        header ("location: ../data.php?qr_gn=" . $qr . "&id=" . $id . "&erorr=" . 1);
    }

    // foreach ($query as $result) {
    //     echo "<br>";
    //     $result_id = print_r($result['id']);
    //     echo "<br>";
    //     $result_count = print_r($result['count']);
    //     echo "<br>";
    //     $result_code =  print_r($result['code']);
    // }
    
    // $select_client = "SELECT * FROM client WHERE id = $result_id";
    // $query_clint = $conn -> query($select_client) -> fetch_assoc();
    // $name = $query_clint['code'];
    // echo $name;
    // exit();

        // if ($code === $result_code) {
            
        // echo $result_code;
        // exit();

        // } elseif ($code != $result_code) {
        //     header ("location: ../data.php?qr_gn=" . $qr . "&id=" . $id . "&erorr=" . 1);
        // }

        // if (isset ($date)) {
        //     $insert = "INSERT INTO 
        //     client_used
        //     (date)
        //     VALUE
        //     $date
        //     ";
        //     $query = $conn -> query($insert);
            
        //     if ($query) {
        //         header ("location: ../data.php?count=" . $counter . "&qr_gn=" . $qr . "&id=" . $id);
        //     } else {
        //         echo $conn -> erorr;
        //     }
        // }
    
    // $selectCart = "SELECT * FROM cart WHERE id = $id";
        // $query  = $conn -> query($selectCart);

        // $update = "UPDATE cart
        // SET
        //     count = $counter
        // WHERE
        //     id = $id
        // ";
        // $query = $conn -> query($update);

        // if ($query) {
        //     header ("location: ../data.php?count=" . $counter . "&qr_gn=" . $qr . "&id=" . $id);
        // } else {
        //     echo $conn -> erorr;
        // }