<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/signup.css">
    <link rel="stylesheet" href="./assets/css/base.css">
</head>
<body>
    <form action="process_create.php" method="post">
        <div class="total">
            <header class="header">
                <div class="header__content">
                    <div class="header__list header__list-left">
                        <img src="assets/img/shopee.png" alt="" width="33px" height="39px">
                        <p style="color: red; margin-right: 8px">Shopee</p>
                        <p>Đăng Kí</p>    
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
                                    Đăng Ký
                                </h3>
                            </div>
                            <div class="modal__body-inner">
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__group-input" name="email" placeholder="Email">
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__group-input" name="username" placeholder="Tên Đăng Nhập">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__group-input" name="password_admin" placeholder="Mật Khẩu">
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__group-input" name="sdt" placeholder="Sô Điện Thoại">
                                </div>
                                <button class="auth-form__group-btn">Đăng Ký</button>
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
                                <a href="login.php" class="swicth-btn">Đăng Nhập</a>
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