import preventDownImg from './preventDownImg';

function fancyBox() {
    //Fancybox
    $('[data-fancybox]').fancybox({
        // Options will go here
        buttons: [
            'close'
        ],
        wheel: false,
        transitionEffect: "slide",
        // thumbs          : false,
        // hash            : false,
        loop: true,
        // keyboard        : true,
        toolbar: true,
        // animationEffect : false,
        // arrows          : true,

        clickContent: false,
        afterShow: function () {
            preventDownImg();
        }
    });

}

export default fancyBox;