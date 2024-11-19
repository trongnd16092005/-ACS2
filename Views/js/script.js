// script.js
document.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    const scrollThreshold = 32; // Tương đương 2em khi cuộn

    if (window.scrollY > scrollThreshold) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});


