<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="">
        <meta name="author" content="ENG : Mohamed Nagy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scan QR</title>
        <!-- css -->
        <link rel="stylesheet" href="./css/data.css">
        <link rel="stylesheet" href="./css/normalize.css">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;600&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="back-ground">
            <div class="right">
                <img src="./images/log-com.jpg" alt="">
            </div>
            <div class="left">
<?php

@$id = $_GET['id'];
@$qr_gn = $_GET['id'];
@$counter = $_GET['count'];
@$id_client = $_GET['id_client'];
@$erorr = $_GET['erorr'];

// print_r($_GET);  
// exit();

require_once "admin/functions/conntact.php";

$select = "SELECT * FROM cart WHERE qr_gn = $qr_gn && id = $id";
@$query =  $conn -> query($select);
$key = $query -> fetch_assoc();

// print_r($key['username']);  
// exit();
                   
?>
                    <div class="qr-img">
                        <img src="admin/functions/cart/<?php echo $key['qr']?>" alt="">
                    </div> 
                    <form >
                        <div class="data">
                         <div class="name-property">اسم الكرت : *</div>
                          <div class="value"><?php echo $key['username']?></div>
                        </div>
                        <div class="data">
                            <div class="name-property">العرض : *</div>
                            <div class="value"><?php echo $key['sale']?></div>
                        </div>
                    </form>
<?php
if ($counter == false) {
?>
                    <a type="submit" class="btn"  data-bs-toggle="modal" href="#exampleModalToggle" role="button"
                    style="
                    color: #fff;
                    text-align: center;
                    text-decoration: none;
                    background-color: #91173e;
                    border: none;
                    border-radius: 10px 0 0 10px;
                    ">
                    تاكيد الخصم</a>
<?php } ?>
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <form method="post" action="functions/counter.php?count=<?php echo $key['count']?>&id=<?php echo $key['id']?>&qr_gn=<?php echo $key['qr_gn']?>">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <br / >
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: black">ادخل الكود للتاكيد</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="code" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <input type="hidden" value="<?php echo date("Y/m/d");?>" name="date">
                            <br / >
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn-info" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" style="
                            background-color: #91173e;
                            color: #fff;
                            border: none;
                            padding: 10px;
                            border-radius: 10px 10px 10px 10px;
                            ">تاكيد الكود</button>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>
<?php
if (isset ($_GET['erorr'])) {
?>
                    <a type="submit" class="btn"  data-bs-toggle="modal" href="#exampleModalToggle" role="button"
                    style="                     
                    color: #fff;
                    text-align: center;
                    text-decoration: none;
                    background-color: #91173e;
                    border: none;
                    border-radius: 10px 0 0 10px;
                    ">
                    خطا في الكود ... اضغط لكتابة الكود الصحيح</a>
<?php
}

if ($key['count'] == $counter) {
?>
                    <a type="submit" class="btn"   href="index.php" role="button"
                    style="
                    color: #fff;
                    text-align: center;
                    text-decoration: none;
                    background-color: #4caf50;
                    border: none;
                    border-radius: 10px 0 0 10px;
                    ">
                    تم الخصم بنجاح ....اضغط للرجوع الي الصفحة الرئيسية</a>
<?php
}

$select_client = "SELECT * FROM client WHERE id = $id_client";
@$query_client =  $conn -> query($select_client) -> fetch_assoc();
@$statue = $query_client['statue'];

if ($statue == 0) {
?>
                    <div class="error">
                    <img src="./images/error.png" alt="">
                    <div class="tex">انتهي العرض .... الرجاء الاتصال بالمندوب .</div>
                    </div>
<?php } ?>
                <div class="footer">
                    &copy; 2021 جميع الحقوق محفوظة لدي 
                    X-Marketers Agency   
                    <a href="https://www.facebook.com/xmarketersagency"><img src="./images/log-com.jpg"></a>
                </div>
            </div>
        </div>
    </body>
</html>