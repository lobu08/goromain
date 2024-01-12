<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title id="tab-title"> GORO | Đăng Nhập</title>
<link rel="stylesheet" href="css/loginscreen.css">
<link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
<link rel="icon" type="small icon" href="Title logo final.png">
</head>
<body>
	<div class="upper-container">
		<div class="logo-and-pic">
			<a href="homescreen.html" id="corner-img-link"><img src="Logopng.png" alt="cornerlogo" id="corner-logo" width="120"></a>
			<p class="logo-text" id="logo-text">Bấm vào logo để xem thêm về chúng tôi</p>
			<img src="bag3.png" alt="demo-pic" id="left-img" width="120">
		</div>

		<div class="signin-container">
			<form>
				<h1 class="signin-heading" id="signin-heading">Đăng nhập</h1>
				<label for="account" class="signin-label" id="signin-label">Tài Khoản</label>
				<input type="text" id="user-account" name="user-account" class="signin-input account-input" placeholder="goro@gmail.com">
				<label for="account" class="signin-label" id="password-label">Mật Khẩu</label>
				<div class="input-password-icon">
					<a href="#" id="show-passowrd-icon"><i class="fa-solid fa-eye-slash" onclick="ShowPassword()" id="hidden-icon"></i></a>
					<a href="#" id="hidden-passowrd-icon"><i class="fa-solid fa-eye" onclick="HidePassword()"></i></a>
					<input type="password" id="user-password" name="user-password" class="signin-input password-input" placeholder="goro123ABC">
				</div>
				<button class="signin-btn" id="signin-btn">Xác Nhận</button>
				<div class="signin-link-or"><span id="signin-link-or">Hoặc</span></div>
				<div class="social-icon">
					<a href="#" class="signin-social-icon-link"><i class="fa-brands fa-facebook signin-social-icon"><span> Facebook </span></i></a>
					<a href="#" class="signin-social-icon-link"><i class="fa-brands fa-apple signin-social-icon"><span> Apple </span></i></a>
				</div>
				<div class="signup" ><span id="sign-up">Bạn chưa có tài khoản ?</span><a href="{{ url('/register')}}" target="blank" class="signup-link" id="signup-link"> Đăng kí</a></div>
				<div class="forgot-password"><a href="forgotpassword.html" id="forgot-password" target="_blank">Quên mật khẩu ?</a></div>
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
	<script src="js/signin.js"></script>
</body>
</html>
