let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;

// Hàm thiết lập lại khoảng thời gian tự động chuyển slide
function resetInterval() {
    clearInterval(refreshInterval); // Xóa khoảng thời gian hiện tại
    refreshInterval = setInterval(() => {
        next.click(); // Tự động bấm nút "Next"
    }, 5000);
}

// Sự kiện khi bấm nút Next
next.onclick = function () {
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
    resetInterval(); // Đặt lại khoảng thời gian tự động
};

// Sự kiện khi bấm nút Prev
prev.onclick = function () {
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
    resetInterval(); // Đặt lại khoảng thời gian tự động
};

function reloadSlider() {
    slider.style.left = -items[active].offsetLeft + 'px';

    // Thay đổi trạng thái "active" của các dot
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');
}

// Xử lý sự kiện khi click vào các dot
dots.forEach((li, key) => {
    li.addEventListener('click', () => {
        active = key;
        reloadSlider();
        resetInterval(); // Đặt lại khoảng thời gian tự động khi click vào dot
    });
});

// Đặt lại vị trí slider khi thay đổi kích thước cửa sổ
window.onresize = function () {
    reloadSlider();
};

// Khởi tạo khoảng thời gian tự động chuyển slide
let refreshInterval = setInterval(() => {
    next.click();
}, 3000);
