const slider = document.querySelector('#comments');

let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    slider.style.cursor = 'grabbing';
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseup', (e) => {
    slider.style.cursor = 'grab';
});
slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2;
    slider.scrollLeft = scrollLeft - walk;
});
document.getElementById('main_slider_pager').onclick = function () {
    const slides = this.parentElement.children;
    for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains('active')) {
            let bg = slides[i].children[0].style.backgroundImage;
            bg = bg.replace('url("', '').replace('")', '');
            window.open(bg, '_blank');
        }
    }
}

$('.custom-cb').hover(function () {
    $(this).addClass("checke");
    $(this).prevAll().addClass("checke");
    $(this).nextAll().removeClass("checke");
}, function () {
    if ($(this).prop("checked") == true) {
        $(this).addClass("checke");
    } else {
        $(this).removeClass("checke");
    }
    $(this).siblings().each(function () {
        if ($(this).prop("checked") == true) {
            $(this).addClass("checke");
        } else {
            $(this).removeClass("checke");
        }
    });
});
