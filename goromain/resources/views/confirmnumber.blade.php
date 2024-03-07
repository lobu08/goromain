<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title id="tab-title"> GORO | Xác nhận</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="{{ asset('css/loginscreen.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
<link rel="icon" type="small icon" href="{{ asset('Title logo final.png') }}">
</head>
<body>
	<div class="confirm-number-upper-container">
		<div class="logo-and-pic">
			<a href="#" id="corner-img-link"><img src="{{asset('img/Logo_main.png')}}" alt="cornerlogo" id="corner-logo" width="120"></a>
		</div>

		<div class="confirm-number-container">
			<form action="{{ route('verifyToken') }}" method="POST">
                @csrf
                @if (session('token'))
                    <div>
                        <p>{{session('token')}}</p>
				    </div>
                @endif
                @if (session('reset-error'))
                    <div>
                        <p>{{session('reset-error')}}</p>
				    </div>
                @endif
                <p class="confirm-number-text">Hãy nhập mã mà chúng tôi đã gửi đến địa chỉ mail của bạn vào ô dưới đây</p>
                <input type="text" id="confirm-number" name="token" class="confirm-number-input" required>
                <button type="submit" class="confirm-number-btn">Xác Nhận</button>
                <p id="re-send-text">Không nhận được mã ?<span id="re-send-option"><a href="#">Gửi lại</a></span></p>
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
