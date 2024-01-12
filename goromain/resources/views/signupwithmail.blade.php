<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title id="tab-title"> GORO | Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('css/loginscreen.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <link rel="icon" type="small icon" href="{{ asset('Title logo final.png') }}">
</head>

<body>
    <div class="upper-container">
        <div class="logo-and-pic">
            <a href="#" id="corner-img-link"><img src="{{ asset('Logopng.png') }}" alt="cornerlogo" id="corner-logo" width="120"></a>
            <p class="logo-text" id="logo-text">Bấm vào logo để xem thêm về chúng tôi</p>
            <img src="{{ asset('email 2.png') }}" alt="demo-pic" id="left-img" width="120">
        </div>

        <div class="signup-mail-container">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <h1 class="signup-mail-heading" id="signup-mail-heading">Đăng ký bằng Email</h1>
                <label for="email" class="signup-mail-label" id="email-label">Địa chỉ mail</label>
                <input type="text" id="email" name="email" class="signup-mail-input account-mail-input" placeholder="goro123@gmail.com">
                <label for="password" class="signup-mail-label" id="password-label">Mật Khẩu</label>
                <div class="input-password-icon">
                    <input type="password" id="password" name="password" class="signup-mail-input password-input" placeholder="goro123ABC">
                </div>
                <label for="re-password" class="signup-mail-label" id="re-password-label">Nhập lại mật khẩu</label>
                <div class="input-password-icon">
                    <input type="password" id="re-password" name="re-password" class="signup-mail-input password-input" placeholder="goro123ABC">
                </div>
                <div class="check-box">
                    <p class="term-accept-error" id="term-accept-error">Bạn hãy xác nhận điều khoản sử dụng</p>
                    <input type="checkbox" name="terms" id="terms">
                    <label for="terms" class="term-signup-mail-accept" id="term-signup-mail-accept">
                        <span id="term-signup-mail-accept1">Tôi đồng ý với</span> <a href="#"><span id="term-signup-mail-accept2">các điều khoản sử dụng</span></a>
                    </label>
                </div>
                <button type="submit" class="signup-mail-btn" id="signup-mail-btn">Xác Nhận</button>
            </form>
            <p class="signup-link">Đã có tài khoản? <a href="{{ url('/login') }}">Đăng nhập ngay</a></p>
        </div>
    </div>

    <div class="footer">
        <div class="footer-option-container">
            <a href="#" class="footer-option" onclick="VietnameseChange()">Vietnamese</a>
            <a href="#" class="footer-option" onclick="EnglishChange()">English (US)</a>
            <a href="#" class="footer-option" onclick="JapaneseChange()">Japanese</a>
        </div>
        <div class="footer-long-line"></div>
        <p>&copy; GORO Cooporate. | Designed by GORO Team | All rights reserved</p>
    </div>
    <script src="{{ asset('signupmail.js') }}"></script>
</body>

</html>
