{
    $('.main-navbar-btn').click(() => {
        //$('.main-navbar-nav').toggleClass('is-open');
    })

    $(function() {

        $('.recette').addClass('default');

        $('.recette').on('click', function() {

            var e = $('.recette');
            if(e.hasClass('expand')){
                e.removeClass('expand');
                $(this).addClass('expand');
            } else { $(this).addClass('expand'); }
        })
    })
}(jQuery)
