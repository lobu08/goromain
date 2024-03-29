<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title id="tab-title"> GORO | Đăng kí</title>
<link rel="stylesheet" href="{{ asset('css/loginscreen.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
<link rel="icon" type="small icon" href="{{ asset('Title logo final.png') }}">
</head>
</head>
<body>
	<div class="upper-container">
		<div class="logo-and-pic">
			<a href="#" id="corner-img-link"><img src="{{asset('img/Logo_main.png')}}" alt="cornerlogo" id="corner-logo" width="120"></a>
			<p class="logo-text" id="logo-text">Bấm vào logo để xem thêm về chúng tôi</p>
			<img src="{{asset('img/email.png')}}" alt="demo-pic" id="left-img" width="120">
		</div>

		<div class="signup-mail-container">
			<form>
                <h1 class="signup-mail-heading" id="signup-mail-heading">Nhập mật khẩu mới</h1>
				<style>
					.signup-mail-container form .succeed-noti{
						padding: 14px 20px;
						background-color: #35ea5673;
						margin: 15px 0;
						border-radius: 7px;
						display: none;
						width: 100%;
						text-align: center;
					}

					.signup-mail-container form .succeed-noti p{
						font-size: 14px;
						color: rgba(3, 64, 21, 0.385);
						font-weight: 600;
						font-family: Helvetica, sans-serif;
					}
				</style>
				<div class="succeed-noti" id="succeed-noti">
					<p>Đăng kí thành công</p>
				</div>
				<label for="password" class="signup-mail-label" id="password-mail-label">Mật Khẩu</label>
				<div class="input-password-icon">
					<input type="password" id="user-password" name="user-password" class="signup-mail-input password-input" placeholder="goro123ABC">
				</div>
                <label for="password" class="signup-mail-label" id="re-password-mail-label">Nhập lại mật khẩu</label>
				<div class="input-password-icon">
					<input type="password" id="user-password" name="user-password" class="signup-mail-input password-input" placeholder="goro123ABC">
				</div>
                <div class="check-box">
                    <p class="term-accept-error" id="term-accept-error">Bạn hãy xác nhận điều khoản sử dụng</p>
                    <input type="checkbox">
                    <p class="term-signup-mail-accept" id="term-signup-mail-accept"><span id="term-signup-mail-accept1">Tôi đồng ý với</span> <a href="#"><span id="term-signup-mail-accept2">các điều khoản sử dụng</span></a></p>
                </div>
				<button class="signup-mail-btn" id="signup-mail-btn">Xác Nhận</button>
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
	<script src="js/signupmail.js"></script>
</body>
</html>
