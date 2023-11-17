import burgerMenu from './modules/burgerMenu';
import lazyLoad from './modules/lazyLoad';
import fancyBox from './modules/fancyBox';
import socilMeiaPopup from './modules/socilMeiaPopup';
import closePopup from './modules/closePopup';
import artworksSlider from './modules/artwork-slider';
import newsSlider from './modules/news-slider';
import exhibitionAnimation from './modules/exhibitions-block-animations';
import projectsGrid from './modules/proect-gallery-blocks-grid';
import languageBtns from './modules/languageBtns';
import preventDownImg from './modules/preventDownImg';


window.addEventListener('DOMContentLoaded', () => {

    // preventDownImg = require('./modules/preventDownImg');

    burgerMenu();
    lazyLoad();
    fancyBox();
    socilMeiaPopup();
    closePopup();
    artworksSlider();
    newsSlider();
    exhibitionAnimation();
    projectsGrid();
    languageBtns();
    preventDownImg();

    ScrollReveal().reveal('.headline', {
        delay: 500
    });

    ScrollReveal().reveal('.widget', {
        interval: 200
    });

    var s = skrollr.init();
    if (s.isMobile()) {
        s.destroy();
    }

});

// var animateFlag = true
// window.addEventListener("scroll", function () {
//     if (this.pageYOffset > 0) {
//         if (animateFlag) {
//             console.log('works')
//             animateFlag = false;
//         }
//     }
// })


// ProtectImageJS.protect(document.querySelectorAll("img"))