/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.AOS = require('aos');
window.Vue = require('vue');
Vue.config.ignoredElements = ['ion-icon']
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('cat-card', require('./components/CatCard.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/**
 *
 * Mobile menu button handler
 *
 */

const menuBtn = document.querySelector('.menu-mob');
const menuContents = document.querySelector('#nav_container ul');

let menuOpen = false;
let complete = true;

menuBtn.addEventListener('click', () => {
    if (!menuOpen && complete) {
        complete = false;
        menuBtn.classList.add('open');
        menuContents.classList.remove('hidden');
        menuContents.style.marginLeft = '105vw';
        menuContents.classList.add('mobile');
        setTimeout(function () {
            menuContents.style.marginLeft = '0';
            menuOpen = true;
            complete = true;
        }, 10);
    } else if (complete) {
        complete = false;
        menuBtn.classList.remove('open');
        menuContents.style.marginLeft = '105vw';
        setTimeout(function () {
            menuContents.classList.remove('mobile');
            menuContents.classList.add('hidden');
            menuOpen = false;
            complete = true;
        }, 500);
    }
});
/**
 * 
 * Scroll Menu animation
 * 
 */

window.addEventListener('scroll', function (e) {
    if (window.scrollY > 50) {
        document.getElementById('nav_container').classList.add('scrolled');
        document.getElementById('logo').classList.add('scrolled');
        document.getElementById('blackboard').classList.remove('-mt-32');
        document.getElementById('menu-mob').classList.add('h-24');
    } else {
        document.getElementById('nav_container').classList.remove('scrolled');
        document.getElementById('logo').classList.remove('scrolled');
        document.getElementById('blackboard').classList.add('-mt-32');
    }
});


/**
 *
 * Main Page slides handlers
 *
 */
const slides = document.querySelectorAll('.main_slide');
if (slides.length > 0) { // We are at the mainpage
    document.querySelector('body').onload = function () {
        slides.item(0).firstChild.style.transform += 'scale(1.1)';
    }
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
                    slides.item(0).firstChild.style.transform += 'scale(1.1)';
                    pager.item(0).classList.add('bg-white');
                    slides.item(i).classList.remove('active');
                    setTimeout(function () {
                        slides.item(i).firstChild.style.removeProperty('transform');
                    }, 2000);
                    pager.item(i).classList.remove('bg-white');
                } else {
                    slides.item(i).classList.remove('active');
                    setTimeout(function () {
                        slides.item(i).firstChild.style.removeProperty('transform');
                    }, 2000);
                    slides.item(i + 1).classList.add('active');
                    slides.item(i + 1).firstChild.style.transform += 'scale(1.1)';
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
    /**
     *
     * Mobile Support for main slider
     *
     */
    document.querySelector('#main_slider_container').addEventListener('touchstart', handleTouchStart, false);
    document.querySelector('#main_slider_container').addEventListener('touchmove', handleTouchMove, false);

    var xDown = null;
    var yDown = null;

    function getTouches(evt) {
        return evt.touches || // browser API
            evt.originalEvent.touches; // jQuery
    }

    function handleTouchStart(evt) {
        const firstTouch = getTouches(evt)[0];
        xDown = firstTouch.clientX;
        yDown = firstTouch.clientY;
    };

    function handleTouchMove(evt) {
        if (!xDown || !yDown) {
            return;
        }

        var xUp = evt.touches[0].clientX;
        var yUp = evt.touches[0].clientY;

        var xDiff = xDown - xUp;
        var yDiff = yDown - yUp;

        if (Math.abs(xDiff) > Math.abs(yDiff)) {
            if (xDiff > 0) {
                /* left swipe */
                for (let i = 0; i < slides.length; i++) {
                    if (slides[i].classList.contains('active')) {
                        slides[i].classList.remove('active');
                        pager[i].classList.remove('bg-white');
                        if (i === slides.length - 1) {
                            slides[0].classList.add('active');
                            pager[0].classList.add('bg-white');
                            break;
                        } else {
                            slides[i + 1].classList.add('active');
                            pager[i + 1].classList.add('bg-white');
                            break;
                        }
                    }
                }
                resetSlider();
            } else {
                /* right swipe */
                for (let i = 0; i < slides.length; i++) {
                    if (slides[i].classList.contains('active')) {
                        slides[i].classList.remove('active');
                        pager[i].classList.remove('bg-white');
                        if (i === 0) {
                            slides[slides.length - 1].classList.add('active');
                            pager[slides.length - 1].classList.add('bg-white');
                            break;
                        } else {
                            slides[i - 1].classList.add('active');
                            pager[i - 1].classList.add('bg-white');
                            break;
                        }
                    }
                }
                resetSlider();
            }
        }
        xDown = null;
        yDown = null;

    }
    /**
     *
     * Feedback Handler
     *
     */
    let feedBackInterval = 0;
    let feedBackResetTimeout = 0;
    let fbContainer = '';
    let fbChilds = [];
    let clone = '';
    const stopFeed = document.getElementById('stop_feed');

    function feedRight() {
        if (feedBackResetTimeout === 0) {
            fbContainer = document.getElementById('fb-container');
            fbChilds = document.getElementsByClassName('fb-item');
            fbContainer.style.transitionDuration = '0.5s';
            fbContainer.style.transform = 'translate(-' + (document.querySelector('#feed_width_definer').offsetWidth) + 'px)';
            feedBackResetTimeout = setTimeout(function () {
                fbContainer.style.transitionDuration = '';
                fbChilds[0].classList.add('hidden');
                clone = fbChilds[0].cloneNode(true);
                fbChilds[0].remove();
                fbContainer.firstChild.appendChild(clone);
                fbChilds[1].classList.remove('hidden');
                fbContainer.style.transform = '';
                feedBackResetTimeout = 0;
            }, 1000);
        }
    }

    function feedLeft() {
        if (feedBackResetTimeout === 0) {
            fbContainer = document.getElementById('fb-container');
            fbChilds = document.getElementsByClassName('fb-item');
            clone = fbChilds[fbChilds.length - 1].cloneNode(true);
            fbChilds[fbChilds.length - 1].remove();
            clone.style.marginLeft = '-' + (document.querySelector('#feed_width_definer').offsetWidth) + 'px';
            clone.classList.remove('hidden');
            fbContainer.firstChild.prepend(clone);
            fbChilds[2].classList.add('hidden');
            fbContainer.style.transitionDuration = '0.5s';
            fbContainer.style.transform = 'translate(' + (document.querySelector('#feed_width_definer').offsetWidth) + 'px)';
            feedBackResetTimeout = setTimeout(function () {
                fbContainer.style.transitionDuration = '';
                fbContainer.style.transform = '';
                clone.style.marginLeft = '';
                feedBackResetTimeout = 0;
            }, 1000);
        }
    }

    function setFeedbackInterval(orientation = null) {
        if (feedBackInterval > 0) {
            clearInterval(feedBackInterval);
        } else {
            stopFeed.classList.remove('hidden');
        }
        if (orientation === 1) {
            feedRight();
            feedBackInterval = setInterval(function () {
                feedRight();
            }, 5000);
        } else {
            feedLeft();
            feedBackInterval = setInterval(function () {
                feedLeft();
            }, 5000);
        }
    }

    const feeders = document.getElementsByClassName('feed-start');
    feeders[0].onclick = function (e) {
        e.preventDefault();
        setFeedbackInterval(-1);
    };
    feeders[1].onclick = function (e) {
        e.preventDefault();
        setFeedbackInterval(1);
    };
    stopFeed.onclick = function (e) {
        e.preventDefault();
        clearInterval(feedBackInterval);
        feedBackInterval = 0;
        stopFeed.classList.add('hidden');
    }
    document.querySelectorAll('.fb-item').forEach(element => {
        element.style.width = document.querySelector('#feed_width_definer').offsetWidth + 'px';
    });
    window.onresize = function () {
        document.querySelectorAll('.fb-item').forEach(element => {
            element.style.width = document.querySelector('#feed_width_definer').offsetWidth + 'px';
        });
    }
}


/**
 * 
 * Go up
 * 
 */

const goUpBtn = document.querySelector('#go_up');
goUpBtn.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo(0, 0);
});

/**
 * 
 * Alert handling
 * 
 */

const alerts = document.querySelectorAll('.alert');
if (alerts.length > 0) {
    alerts.forEach(el => {
        el.addEventListener('transitionend', () => el.remove());
        el.childNodes[2].addEventListener('click', () => el.style.opacity = '0');
    });
}
