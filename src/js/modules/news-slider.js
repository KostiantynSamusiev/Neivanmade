function newsSlider() {
    // slick-slider news
    $('.news').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: [{
                breakpoint: 1080,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: '140px',
                }
            },
            {
                breakpoint: 768,
                settings: {
                    infinite: true,
                    slidesToShow: 3,
                }
            }
        ]
    });
}

export default newsSlider