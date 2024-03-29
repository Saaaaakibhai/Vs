let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(
    ".home-slider", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    }
);

let loadMoreBtn = document.querySelector('.course .load-more .btn');
let currentItem = 5;
loadMoreBtn.oneclick = () => {
    let boxes = [...document.querySelectorAll('.course .box-container .box')];
    for (var i = currentItem; i < currentItem + 5; i++) {
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 5;
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
}