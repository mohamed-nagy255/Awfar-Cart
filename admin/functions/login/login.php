<?php

    session_start();

    $name  =  $_POST['username'];
    $pass  =  md5($_POST['password']);

    require_once "../conntact.php";

    // echo "<pre>";
    // print_r($_POST);
    // exit();

    $tables  =   ['owner' , 'employee'];
    $i = 0;

    foreach ($tables as $key) {


        $select    =    "SELECT * FROM $tables[$i] WHERE username = '$name' AND password = '$pass'";

        $query     =    $conn -> query($select);

        $user      =    $query -> fetch_assoc();

        $id        =    $user['id'];
        

        // var_dump( $query -> num_rows );
        // print_r($id);
        // exit();

        $count  =   $query -> num_rows ;

        // print_r($count);
        // exit();


        if ( $count > 0 ) {

           
            if ($user['priv'] == 100) {

                $_SESSION['login'] = $id;
                $_SESSION['priv']  = $user['priv'];
                // $_SESSION['name']  = 'owner';
                header ("location: ../../index.php");
            // echo "true";
                exit();
            
    

            } elseif ($user['priv'] == 200) {

                $_SESSION['login'] = $id;
                $_SESSION['priv']  = $user['priv'];
                $_SESSION['name']  = 'employee';
    
                header ("location: ../../index.php");
    
                exit();

            }
        } else {

            header ("location: ../../login.php");

        }

        $i++;
    }
    