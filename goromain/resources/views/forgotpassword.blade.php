<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title id="tab-title"> GORO | Đăng kí lại</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="{{ asset('css/loginscreen.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
<link rel="icon" type="small icon" href="{{ asset('Title logo final.png') }}">
</head>
<body>
	<div class="upper-container">
		<div class="logo-and-pic">
			<a href="#" id="corner-img-link"><img src="images/Logo_main.png" alt="cornerlogo" id="corner-logo" width="120"></a>
			<p class="logo-text" id="logo-text">Bấm vào logo để xem thêm về chúng tôi</p>
			<img src="images/request.png" alt="demo-pic" id="left-img" width="120">
		</div>

		<div class="forgot-password-container">
			<form>
                <h1 class="forgot-password-heading" id="forgot-password-heading">Đặt lại mật khẩu</h1>
				<label for="account" class="forgot-password-label" id="forgot-password-mail-label">Địa chỉ mail</label>
				<input type="text" id="user-mail" name="user-mail" class="forgot-password-input forgot-password-user-input" placeholder="goro123@gmail.com">
                <div class="check-box">
                    <p class="term-accept-error" id="term-accept-error">Bạn hãy xác nhận điều khoản sử dụng</p>
                    <input type="checkbox">
                    <p class="term-forgot-password-accept" id="term-forgot-password-accept"><span id="term-forgot-password-accept-span1">Tôi đồng ý với</span><a href="#"><span id="term-forgot-password-accept-span2"> các điều khoản sử dụng</span></a></p>
                </div>
				<button class="forgot-password-btn" id="forgot-password-btn">Xác Nhận</button>
    		</form>
		</div>
	</div>
	<div class="reset-number-input">
		<p id="confirm-number-text">Nhập mã số được gửi đến mail của bạn vào ô trống dưới đây</p>
		<input type="text" id="confirm-number" name="confirm-number">
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
