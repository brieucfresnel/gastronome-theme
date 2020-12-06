$(function () {
    // Navbar
    $(document).ready(function () {
      /*  $('.slider-inner').slick({
            dots: true,
            infinite: true,
            cssEase: 'linear',
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
        });*/
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $('.main-navbar-btn').click(() => {
            let nav = $('.main-navbar-nav')

            if (nav.width() === 0) {

                nav.animate({
                    'width': '100%'
                }, 300, 'swing', () => {
                    $('.main-navbar-btn').toggleClass('is-open')
                })

            } else if (nav.width() === $('body').width()) {

                nav.animate({
                    'width': '0'
                }, 300, 'swing', () => {
                    $('.main-navbar-btn').toggleClass('is-open')
                })

            }
        })


        // Recettes
        recettes = $('.recette')

        recettes.addClass('default');
        recettes.eq(1).removeClass('default');
        recettes.eq(1).addClass('expand');

        recettes.on('click', function (e) {

            var e = $('.recette');
            if (recettes.hasClass('expand')) {
                recettes.removeClass('expand');

                $(this).addClass('expand');
                //$($(e.target).children().get(1)).css({'width': '50%'})
            } else {
                $(this).addClass('expand');
            }
        })

    });

}(jQuery))
