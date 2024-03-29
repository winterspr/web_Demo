<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./admin/assets/css/signin.css">
    <link rel="stylesheet" href="./admin/assets/css/base.css">
</head>
<body>
    <form action="process_signin.php" method="post">
        <div class="total">
            <header class="header">
                <div class="header__content">
                    <div class="header__list header__list-left">
                        <img src="admin/assets/img/shopee.png" alt="" width="33px" height="39px">
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
                                    Đăng Nhập
                                </h3>
                                <div class="modal__body-header--qr">
                                    <div class="modal__body-header--qr__border">
                                        Đăng nhập với mã QR
                                    </div>
                                    <div class="modal__body-header--qr__swicht">
                                        <a href="signin__btn.php">
                                            <img width="40px" height="40px" src="admin/assets/img/qr_btn.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal__body-inner">
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__group-input" name="email" placeholder="Tên Đăng Nhập/Email/SDT">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__group-input" name="password" placeholder="Mật Khẩu">
                                </div>
                                <button class="auth-form__group-btn">Đăng Nhập</button>
                            </div>

                            <div class="auth-form__forgotpassword">
                                <a href="" class="forgot-password-link">Quên mật khẩu</a>
                                <a href="" class="forgot-password-link">Đăng nhập với SMS</a>
                            </div>
                            <div class="auth-form__or">
                                <div class="auth-form__border"></div>
                                <p class="auth-form__or-color">Hoặc</p>
                                <div class="auth-form__border"></div>
                            </div>

                            <div class="auth-form__btn">
                                <a href="https://vi-vn.facebook.com/" class="auth-form__btn-connect">
                                    <i class="fa-brands fa-facebook" style="color: #0038e0;"></i>
                                    Facebook
                                </a>
                                <a href="https://www.google.com.vn/?hl=vi" class="auth-form__btn-connect">
                                    Google
                                </a>
                            </div>

                            <div class="auth-form__aside">
                                <p class="auth-form__policy">Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                                    <a href="" class="auth-form__policy-link">Điều khoản dịch vụ</a> &
                                    <a href="" class="auth-form__policy-link">Chính sách bảo mật</a>
                                </p>
                            </div>
                            <div class="move-to-signin">
                                <p class="no-point">Bạn đã có tài khoản? </p>
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