function exhibitionAnimation() {
    //Exhebitions blocks
    $(window).on("click", function (e) {
        let content = $(e.target).parent().find('#content p');
        let target = $(e.target).find('.icon');
        let parentBlock = $(e.target).closest('.exhibitions__year-block');
        let blockInfo = $(e.target).closest('.block-info');
        let exContainer = $(e.target).closest('.exhibitions-container');
        let year = e.target.closest('.year-info');
        let td = e.target.closest('.exhibitions-container');
        // Cheking exhibition block
        var div = content.length;
        if (div) {

            target.toggleClass("rotate");

            if (e.target.classList.contains('year-info')) {
                // console.log('YEAR')
                parentBlock.find('.block-info').fadeToggle("slow");
            } else if (exContainer) {
                // console.log('CONTAINER')
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