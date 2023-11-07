function artworksSlider() {
    // slick-slider art-works
    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        dots: false,
        responsive: {
            768: {
                items: 2
            },
            1280: {
                items: 3,
                center: true,
            }
        }
    });

    $('.artworks-gallery').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 4,
        responsive: [{
                breakpoint: 1080,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    infinite: true,
                    slidesToShow: 1,
                }
            }
        ]
    });
}

export default artworksSlider;