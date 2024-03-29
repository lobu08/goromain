
<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title id="tab-title"> GORO | Đăng Kí</title>
<link rel="stylesheet" href="css/loginscreen.css">
<link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
<link rel="icon" type="small icon" href="Title logo final.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>
<body>
	<div class="upper-container">
		<div class="logo-and-pic">
			<a href="#" id="corner-img-link"><img src="{{asset('img/Logo_main.png')}}" alt="cornerlogo" id="corner-logo" width="120"></a>
			<p class="logo-text" id="logo-text">Bấm vào logo để xem thêm về chúng tôi</p>
			<img src="{{asset('img/welcome-back.png')}}" alt="demo-pic" id="left-img" width="120">
		</div>

		<div class="signup-container">
            <h1 class="signup-heading" id="signup-heading">Đăng kí</h1>
            <form>
                <a href="https://www.google.com/account/about/" class="google-signup"><div class="google-signup-container link-container"><i class="fab fa-google fa-1x"></i><span id="signup-google">Đăng kí bằng Google</span></div></a>
                <a href="https://support.apple.com/ja-jp/apple-id" class="apple-signup"><div class="link-container"><i class="fa-brands fa-apple"></i><span id="signup-apple">Đăng kí bằng Apple</span></div></a>
                <a href="https://www.facebook.com" class="facebook-signup"><div class="link-container"><i class="fa-brands fa-facebook"></i><span id="signup-facebook">Đăng kí bằng Facebook</span></div></a>
                <a href="{{url('/registeremail')}}" class="email-signup"><div class="link-container"><i class="fa-solid fa-envelope"></i><span id="signup-email">Đăng kí bằng Email</span></div></a>


                <div class="thin-line"><span id="thin-line"></span></div>

                <p class="have-account" id="have-account">Bạn đã có tài khoản ?</p>
                <button class="signup-login-btn" id="signup-login-btn"><a style="color: white" href="{{route('login')}}">Đăng Nhập</a></button>
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
	<script src="signup.js"></script>
</body>
</html>
