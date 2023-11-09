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
});

// var animateFlag = true
// var element = document.querySelector("#presentation")
// var el = document.querySelector('#presentation video');
// var element = el.getAttribute("src")
// console.log(element)
// window.addEventListener("scroll", function () {
//     if (this.pageYOffset > 0) {
//         if (animateFlag) {
//             var attrVal = '/assets/video/present.mp4';
//             el.setAttribute('src', element + attrVal)
//             animateFlag = false;
//         }
//     }
// })


// ProtectImageJS.protect(document.querySelectorAll("img"))