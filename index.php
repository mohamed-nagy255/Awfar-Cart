<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scan QR</title>
        <!-- css -->
        <link rel="stylesheet" href="./css/master.css">
        <link rel="stylesheet" href="./css/normalize.css">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;600&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- lib qr -->
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <script src="./JS/html5-qr.min.js"></script>
    </head>
    <body>
        <div class="back-ground">
            <div class="right">
                <img src="./images/log-com.jpg" alt="">
            </div>
            <div class="left">
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div style="" id="reader"></div>
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="button" data-bs-toggle="modal" href="#exampleModalToggle" role="button">امسح الكود من هنا</a>
                </div>
                <div class="footer">
                    &copy; 2021 جميع الحقوق محفوظة لدي 
                    X-Marketers Agency   
                    <a href="https://www.facebook.com/xmarketersagency"><img src="./images/log-com.jpg"></a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./JS/scanner.js"></script>
    </body>
</html>