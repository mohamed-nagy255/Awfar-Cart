<?php

    @define ("SERVARNAME","localhost");
    @define ("USERNAME","root");
    @define ("PASSWORD","");
    @define ("DBNAME","qr_sale");
    
    // Creat conntact database
    
    $conn   =  new mysqli (SERVARNAME, USERNAME, PASSWORD, DBNAME);
    
    $conn -> set_charset('utf8');

    // Check database 

    // if ($conn) {

    //     echo "Connected Successfully";

    // } else {

    //     die ("Connection Faild" . mysqli_connect_error());

    // }