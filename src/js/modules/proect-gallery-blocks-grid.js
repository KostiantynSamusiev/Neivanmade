function projectsGrid() {
    // Projects gallery block 
    $(document).ready(function () {

        //Project gallery
        if ($(window).width() > 1280 && $('.image-gallery .image-item').length > 9 && $('.image-gallery .image-item').length < 18) {
            $('.projects .image-gallery').addClass('image-gallery-grid-4')

        } else
        if ($(window).width() > 1280 && $('.image-gallery .image-item').length > 9) {
            $('.projects .image-gallery').addClass('image-gallery-grid-3')

        } else
        if ($(window).width() > 1280 && $('.image-gallery .image-item').length > 4) {
            $('.projects .image-gallery').addClass('image-gallery-grid')

        } else if ($(window).width() > 1280 && $('.image-item').length <= 4) {
            $('.projects .image-gallery').addClass('image-gallery-grid-2')

        }

        //Exhibitions gallery
        if ($(window).width() > 1280 && $('.exhibitions .image-item').length >= 4) {
            $('.inner-block .gallery').addClass('gallery-tablet-grid')

        } else if ($(window).width() > 1280 && $('.exhibitions .image-item').length <= 3) {
            $('.exhibitions .image-item').css("width", "33%");

        }

        //Artworks gallery
        if ($(window).width() > 1280 && $('.artworks .image-item').length <= 4) {
            $('.artworks .image-item').css("width", "24%");
        } else if ($(window).width() > 1280 && $('.artworks .image-item').length >= 5 && $('.artworks .image-item').length < 14) {
            $('.artworks .image-gallery').addClass('image-gallery-grid-2')
        } else if ($('.artworks .image-item').length == 14) {
            $('.artworks .image-gallery').addClass('image-gallery-grid-3')

        } else if ($('.artworks .image-item').length >= 32) {
            $('.artworks .image-gallery').addClass('image-gallery-grid-7')
        } else if ($('.artworks .image-item').length > 23) {
            $('.artworks .image-gallery').addClass('image-gallery-grid-6')
        } else if ($('.artworks .image-item').length <= 23) {
            $('.artworks .image-gallery').addClass('image-gallery-grid-5')

        } else if ($('.artworks .image-item').length >= 14) {
            $('.artworks .image-gallery').addClass('image-gallery-grid-4')

        }

    });
}

export default projectsGrid;