<?php

    require_once "..//conntact.php";
    $select_cart = "SELECT code and id_qr FROM cart";
    $query  =  $conn -> query($select_cart);
    // $qr_gn    = var_dump($last_id -> num_rows);
    // exit();


    // ====================================
    // ============= QR CODE ==============
    // ====================================
    include_once "../../../phpqrcode/qrlib.php";
    $file    = "";
    $new     = $_POST['id_qr'];
    $file    = "qr/".uniqid().'.png';
    QRcode::png($new, $file);
    // ====================================
    // ============= QR CODE ==============
    // ====================================


    $name      =   $_POST['username'];
    $qr_gn     =   $_POST['qr_gn'];
    $code      =   $_POST['code'];
    $sale      =   $_POST['sale'];

    require_once "../conntact.php";

    // print_r ($_POST);
    // exit();

    $insert_cart    =   "INSERT INTO
    cart
    (username, qr_gn, qr, code, sale, id_qr)     
    VALUE
    (
    '$name' , 
    '$qr_gn' ,
    '$file' ,
    '$code' ,
    '$sale' ,
    '$new' 
    )
    ";

    $query  =   $conn -> query($insert_cart);

    if ($query) {

        header ("location: ../../cart_table.php");

    } else {

        $conn -> query_error;

    }


    