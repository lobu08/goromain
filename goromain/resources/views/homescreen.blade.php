<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title id="tab-title"> GORO</title>
<link rel="stylesheet" href="css/homescreen.css">
<link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
<link rel="icon" type="small icon" href="Title logo final.png">
</head>
<body id="mainbody">
    <!-- HEADER _ NAVIGATION BAR start -->
    <div class="header">
        <div class="nav-bar">
            <a href="#"><img src="{{asset('/img/Logo_main.png')}}" class="corner-logo"></a>
            <div class="search-bar">
                <input type="text" placeholder="Nhập sản phẩm bạn muốn tìm kiếm"><a href="#"><i class="fa-solid fa-magnifying-glass search-bar-icon"></i></a>
            </div>
            <div class="header-icon-btn">
                <a href="#"><i class="fa-solid fa-house"></i></a>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                <li id="user-btn"><a href="#" onclick="DisplayUserOption()"><i class="fa-solid fa-user" id="fa-user"></i></a>
                    <ul class="user-menu-container" id="user-menu-container">
                        <li class="user-heading-container">
                            <h2 class="user-menu-heading"><i class="fa-regular fa-user"></i>Tài khoản</h2>
                            <a href="#"  onclick="HideUserOption()"><i class="fa-solid fa-xmark"></i></a>
                        </li>
                        <li class="user-option"><a href="#">Thông tin tài khoản</a></li>
                        <li class="user-option"><a href="#">Địa chỉ</a></li>
                        <li class="user-option"><a href="#">Tracking</a></li>
                        <li class="user-option"><a href="#">Lịch sử mua hàng</a></li>
                        <li class="user-option"><a href="#">Phương pháp thanh toán</a></li>
                        <li class="user-option language-option-container"  onclick="DisplayLanguageOption ()">
                            <a href="#">Ngôn ngữ</a>
                            <span id="arrow-icon">&#9660</span>
                            <ul class="language" id="language">
                                <li class="language-option"><a href="#">Tiếng Việt</a></li>
                                <li class="language-option"><a href="#">English</a></li>
                                <li class="language-option"><a href="#">日本語</a></li>
                            </ul>
                        </li>
                        <li class="user-option"><a href="#">Hỗ trợ</a></li>
                        <li class="user-option log-out-btn">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none">
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                <i class="fa-solid fa-right-from-bracket user-option-icon"></i>
                                Đăng xuất
                            </a>
                        </li>
                    </ul>

                </li>
            </div>
        </div>
        <div class="head-address-bar">
            <i class="fa-solid fa-location-dot"></i>
            <p>Địa chỉ giao hàng hiện tại của bạn:<span>Saitama, koshigaya, Akanecho, 2-2-2 708</span></p>
            <a href="#"><i class="fa-solid fa-sliders change-address-btn"></i></a>
        </div>
    </div>
    <!-- HEADER _ NAVIGATION BAR end -->


    <div class="content">
        <!-- ADVERTISEMENT PART -->
        <div class="slider">
            <!-- image list -->
            <div class="list">
                <div class="item">
                    <img src="{{asset('img/goro-bread.JPG')}}">
                </div>
                <div class="item">
                    <img src="{{asset('img/Ads-in-E-Commerce.jpeg')}}">
                </div>
                <div class="item">
                    <img src="{{asset('img/e-commerce-.jpg')}}">
                </div>
                <div class="item">
                    <img src="{{asset('img/What-is-eCommerce-advertising.jpeg')}}">
                </div>
            </div>

            <!-- btn next and prev -->
            <div class="buttons">
                <button id="prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button id="next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <!-- dots page number ( 5 item -> tuong ung voi 5 dots) -->
            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>


    </div>


    <div class="footer"></div>
    @if (session('login_success'))
    <script>
    alert("{{ session('login_success')}}");
    </script>
    @endif

    <script src="{{asset('js/homescreen.js')}}"></script>
</body>
</html>
