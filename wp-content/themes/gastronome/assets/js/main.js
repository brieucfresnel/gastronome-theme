$(function () {
    // Navbar

    $('.main-navbar-btn').click(() => {


            let nav = $('.main-navbar-nav')

            if (nav.width() === 0) {
                nav.animate({
                    'width': '100%'
                }, 300, 'swing')
            } else if( nav.width() === $('body').width()) {
                nav.animate({
                    'width': '0'
                }, 300, 'swing')
            }
            nav.toggleClass('is-open')


    })

    // Recettes
    $recettes = $('.recette')

    $recettes.addClass('default');
    $recettes.eq(1).removeClass('default');
    $recettes.eq(1).addClass('expand');

    $recettes.on('click', function () {

        var e = $('.recette');
        if (e.hasClass('expand')) {
            e.removeClass('expand');

            e.addClass('default');
            e.css({
                'width': '30vw'
            });

            $(this).addClass('expand');
            $(this).animate({
                'width': '90vw'
            });
            $(this).children().get(1).css({'width': '50%'})
        } else {
            $(this).addClass('expand');
        }
    })
}(jQuery))
