<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="tab-title">GORO | Đăng Ký</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/loginscreen.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <link rel="icon" type="small icon" href="{{ asset('Title logo final.png') }}">
</head>
<body>
    <div class="upper-container">
        <div class="logo-and-pic">
            <a href="#" id="corner-img-link"><img src="{{asset('/img/Logo_main.png')}}" alt="cornerlogo" id="corner-logo" width="120"></a>
            <p class="logo-text" id="logo-text">Bấm vào logo để xem thêm về chúng tôi</p>
            <img src="{{asset('/img/request.png')}}" alt="demo-pic" id="left-img" width="120">
        </div>

        <div class="forgot-password-container">
            <form action="{{route('register_sendMail')}}" method="post">
                @csrf
                @if (session('register-error'))
                <style>
					.signin-container form .error-caution{
						padding: 14px 20px;
						background-color: #ea443530;
						margin: 15px 0;
						border-radius: 7px;
						display: block;
						width: 100%;
						text-align: center;
					}
					.signin-container form .error-caution p{
						font-size: 12px;
						color: rgba(255, 0, 0, 0.421);
						font-weight: 600;
						font-family: Arial, Helvetica, sans-serif;
					}
                </style>
                    <div class="error-caution" id="error-caution">
                        <p>{{session('register-error')}}</p>
				    </div>
                @endif
                <h1 class="forgot-password-heading" id="forgot-password-heading">Đăng ký</h1>
                <label for="email" class="forgot-password-label" id="forgot-password-mail-label">Địa chỉ mail</label>
                <input type="text" id="email" name="email" class="forgot-password-input forgot-password-user-input" placeholder="goro123@gmail.com">
                <div class="check-box">
                    <p class="term-accept-error" id="term-accept-error">Bạn hãy xác nhận điều khoản sử dụng</p>
                    <input type="checkbox">
                    <p class="term-forgot-password-accept" id="term-forgot-password-accept"><span id="term-forgot-password-accept-span1">Tôi đồng ý với</span><a href="#"><span id="term-forgot-password-accept-span2"> các điều khoản sử dụng</span></a></p>
                </div>
                <button type="submit" class="forgot-password-btn" id="forgot-password-btn">Xác Nhận</button> <!-- Đổi type thành submit -->
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="footer-option-container">
            <a href="#" class="footer-option" onclick="VietnameseChange()">Vietnamese</a>
            <a href="#" class="footer-option" onclick="EnglishChange()">English (US)</a>
            <a href="#" class="footer-option" onclick="JapaneseChange()">Japanese</a>
        </div>
        <div class="footer-long-line"></div>
        <p>&copy GORO Cooporate. | Designed by GORO Team | All rights reserved</p>
    </div>
    <script src="js/forgotpassword.js"></script>
</body>
</html>
