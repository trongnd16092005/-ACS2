document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        const scrollY = window.scrollY;

        if (scrollY >= 32) { // Tương đương 2em nếu 1em = 16px
            header.classList.add('fixed');
        } else {
            header.classList.remove('fixed');
        }
    });

    // Thêm sự kiện click cho các dropdown-toggle
    document.querySelectorAll('.dropdown-toggle').forEach(item => {
        item.addEventListener('click', event => {
            if (event.target.classList.contains('dropdown-toggle')) {
                event.target.classList.toggle('toggle-change');
            } else if (event.target.parentElement.classList.contains('dropdown-toggle')) {
                event.target.parentElement.classList.toggle('toggle-change');
            }
        });
    });
});
// Hàm loadPage dùng AJAX
function loadPage(page) {
    const xhr = new XMLHttpRequest();
    // Gửi yêu cầu đến load_page.php để lấy nội dung
    xhr.open("GET", "../Models/load_page.php?page=" + page, true);  // Đảm bảo đường dẫn đúng
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Thay thế nội dung trong phần main-content
            document.getElementById("main-content").innerHTML = xhr.responseText;
            // Cập nhật URL mà không tải lại trang
            history.pushState(null, null, "?page=" + page);
        } else {
            document.getElementById("main-content").innerHTML = "Không thể tải nội dung!";
        }
    };
    xhr.send();  // Gửi yêu cầu AJAX
}

