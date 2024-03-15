<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/range.css')}}"/>
    <title>Custom Range Slider</title>
</head>
<body>
    <h2>Custom Range Slider</h2>
    <form action="" method="">
        <div class="range-container">
            <input type="range" id="range" name="" min="0" max="100">
            <label for="range">50</label>
        </div>
        <button type="submit" class="signin-btn" id="signin-btn">Xác Nhận</button>
    </form>
    <div id="pixiContainer" style="width: 300px; height: 240px;"></div>

    <!-- Liên kết tệp JavaScript của PixiJS -->
    <script src="https://cdn.jsdelivr.net/npm/pixi.js@7.x/dist/pixi.min.js"></script>
    <!-- Liên kết tệp JavaScript của bạn -->
    <script src="{{asset('js/range.js')}}"></script>
</body>
</html>
