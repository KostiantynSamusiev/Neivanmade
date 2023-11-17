function exhibitionAnimation() {
    //Exhebitions blocks
    $(window).on("click", function (e) {
        let target = $(e.target).find('.icon');
        let parentBlock = $(e.target).closest('.exhibitions__year-block');
        let blockInfo = $(e.target).closest('.block-info');
        let exContainer = $(e.target).closest('.exhibitions-container');
        let year = e.target.closest('.year-info');
        let td = e.target.closest('.block');

        if (e.target.classList.contains('year-info')) {
            target.toggleClass("rotate");
            parentBlock.find('.block-info').fadeToggle("slow");
        }

        let content = exContainer.find('#content p');
        // Cheking exhibition block
        var div = content.length;
        if (exContainer || td) {


            if (div) {
                target.find('.icon').toggleClass("rotate");
                exContainer.find('.icon').toggleClass("rotate");
                $(exContainer).find('.inner-block').fadeToggle("slow");
            }

        }
    });

    // First block rotate
    let fristBlock = document.querySelector('.exhibitions__year-block .icon');
    if (fristBlock) {
        fristBlock.classList.add("rotate");
    };



}

export default exhibitionAnimation;