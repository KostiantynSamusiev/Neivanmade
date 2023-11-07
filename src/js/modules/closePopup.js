function closePopup() {
    // Close popup on X
    $('.close-popup').click(function () {
        $('.overlay').fadeOut();
    });

    // Close popup out of continer
    $(document).mouseup(function (e) {
        var popup = $('.popup');
        if (e.target != popup[0] && popup.has(e.target).length === 0) {
            $('.overlay').fadeOut();
        }
    });
}

export default closePopup;