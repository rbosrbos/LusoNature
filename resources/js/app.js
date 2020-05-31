require('./bootstrap');
const slides = document.querySelectorAll('.main_slide');
const pager = document.querySelectorAll('.page');
let slideInterval = 0;

function resetSlider() {
    if (slideInterval != 0) {
        clearInterval(slideInterval);
    }
    slideInterval = setInterval(function () {
        if (slides.length > 1) {
            for (i = 0; i < slides.length; i++) {
                if (slides.item(i).classList.contains('active')) {
                    slides.item(i).classList.remove('active');
                    break;
                }
            }
            if (i == (slides.length - 1)) {
                slides.item(0).classList.add('active');
                pager.item(0).classList.add('bg-white');
                slides.item(i).classList.remove('active');
                pager.item(i).classList.remove('bg-white');
            } else {
                slides.item(i).classList.remove('active');
                slides.item(i + 1).classList.add('active');
                pager.item(i).classList.remove('bg-white');
                pager.item(i + 1).classList.add('bg-white');
            }
        }
    }, 5000);
}
resetSlider();
pager.forEach(e => {
    e.addEventListener('click', function () {
        resetSlider();
        let count = 0;
        const a = e;
        while ((e = e.previousElementSibling) != null) {
            count++;
        }
        e = a;
        slides.forEach(e => {
            e.classList.remove('active');
        });
        pager.forEach(e => {
            e.classList.remove('bg-white');
        });
        slides.item(count).classList.add('active');
        pager.item(count).classList.add('bg-white');
    });
});
window.addEventListener('scroll', function (e) {
    if (window.scrollY > 50) {
        document.getElementById('nav_container').classList.add('scrolled');
        document.getElementById('logo').classList.add('scrolled');
        document.getElementById('blackboard').classList.remove('-mt-24');
    } else {
        document.getElementById('nav_container').classList.remove('scrolled');
        document.getElementById('logo').classList.remove('scrolled');
        document.getElementById('blackboard').classList.add('-mt-24');
    }
});
