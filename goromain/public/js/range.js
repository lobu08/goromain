// Tạo một ứng dụng PixiJS
const app = new PIXI.Application({ width: 300, height: 240, backgroundColor: 0xffffff });

// Thêm canvas của ứng dụng PixiJS vào trang HTML
document.body.appendChild(app.view);

// Tạo một container để chứa tất cả các phần của mặt cười
const emojiContainer = new PIXI.Container();
emojiContainer.x = app.screen.width / 2;
emojiContainer.y = app.screen.height / 2;
app.stage.addChild(emojiContainer);

// Vẽ mặt cười
drawEmoji();

// Hàm vẽ mặt cười
function drawEmoji() {
    // Vẽ mặt tròn (đồng xu)
    const face = new PIXI.Graphics();
    face.beginFill(0xffff00); // Màu vàng
    face.drawCircle(0, 0, 80); // Bán kính 100
    face.endFill();
    emojiContainer.addChild(face);

    // Vẽ mắt trái
    const leftEye = new PIXI.Graphics();
    leftEye.beginFill(0x000000); // Màu đen
    leftEye.drawCircle(-35, -25, 8); // Vị trí và kích thước của mắt trái
    leftEye.endFill();
    emojiContainer.addChild(leftEye);

    // Vẽ mắt phải
    const rightEye = new PIXI.Graphics();
    rightEye.beginFill(0x000000); // Màu đen
    rightEye.drawCircle(35, -25, 8); // Vị trí và kích thước của mắt phải
    rightEye.endFill();
    emojiContainer.addChild(rightEye);

    // Vẽ miệng
    const mouth = new PIXI.Graphics();
    mouth.lineStyle(4, 0x000000); // Đường viền màu đen, độ dày 4 pixel
    mouth.moveTo(-30, 30); // Điểm bắt đầu vẽ miệng
    mouth.quadraticCurveTo(0, 50, 30, 26); // Vẽ đường cong của miệng
    mouth.endFill();
    emojiContainer.addChild(mouth);
}

// Handle range input change event
const range = document.getElementById('range');
range.addEventListener('input', (e) => {
    const value = +e.target.value;
    const label = e.target.nextElementSibling;
    const range_width = getComputedStyle(e.target).getPropertyValue('width');
    const label_width = getComputedStyle(label).getPropertyValue('width');
    const num_width = +range_width.substring(0, range_width.length - 2);
    const num_label_width = +label_width.substring(0, label_width.length - 2);
    const max = +e.target.max;
    const min = +e.target.min;
    const left = value * (num_width / max) - num_label_width / 2 + scale(value, min, max, 10, -10);
    label.style.left = `${left}px`;
    label.innerHTML = value;

});

// Utility function to scale values
const scale = (num, in_min, in_max, out_min, out_max) => {
    return (num - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
};
