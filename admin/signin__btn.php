<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/signin__btn.css">
    <link rel="stylesheet" href="./assets/css/base.css">
</head>
<body>
    <form action="process_signin__btn.php" method="post">
        <div class="total">
            <header class="header">
                <div class="header__content">
                    <div class="header__list header__list-left">
                        <img src="assets/img/shopee.png" alt="" width="33px" height="39px">
                        <p style="color: red; margin-right: 8px">Shopee</p>
                        <p>Đăng Nhập</p>    
                    </div>
                    <div class="header__list header__list-right">
                        <a href="support.php" class="support">Bạn cần giúp đỡ?</a>
                    </div> 
                </div>    
            </header>
            <div class="body">
                <div class="body__content">
                    <div class="body body__img">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134004-7qvcu-ljmk3k30gzfvf7" alt="">
                    </div>  
                    <div class="body body__form">
                        <div class="modal__body-signup">
                            <div class="modal__body-header">
                                <h3 class="modal__body-header--heading">
                                    Đăng Nhập với mã QR
                                </h3>
                                <div class="modal__body-header--qr">
                                    <div class="modal__body-header--qr__border">
                                        Đăng nhập với mật khẩu
                                    </div>
                                    <div class="modal__body-header--qr__swicht">
                                        <a href="login.php">
                                            <img width="40px" height="40px" src="assets/img/qr_btn2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal__body-qr__signin">
                                <img width="179px" height="172px" src="data:image/png;base64,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" alt="">
                            </div>
                            <div class="modal__body-qr__signin-warning">
                                <h3>Quét mã QR bằng ứng dụng SHOPEE</h3>
                            </div>
                            <div class="howtoscan">
                                <a href="" class="howtoscan__link">Làm thế nào để quét mã?</a>
                            </div>
                            <div class="move-to-signin">
                                <p class="no-point">Bạn mới biết đến shopee ? </p>
                                <a href="signup.php" class="swicth-btn">Đăng Ký</a>
                            </div>
                        </div>
                        <!-- <div class="modal__overlay">

                        </div> -->  
                    </div>
                </div>
            </div>
            <footer class="footer">
        
            </footer>
        </div>
    </form>
</body>
</html>