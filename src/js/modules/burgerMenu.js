function burgerMenu() {
    // Burger menu
    $('.menu').click(function () {
        if ($(window).width() < 768) {
            $(this).toggleClass('open');
            $('.header__nav.links').toggle("slow");
            $('.translate').toggle('.open');

        } else {
            $(this).toggleClass('open');
            $('.header__nav.links').toggle("slow");

        }

    });

}

export default burgerMenu;