$(function () {
    // Navbar
    $(document).ready(function () {

        $('.recettes-slider-1').slick({
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1000,
            draggable: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: false,
                        focusOnSelect: false,
                        draggable: true
                    }
                },
            ]
        });

        $('.recettes-slider-2').slick({
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1000,
            draggable: false,
            focusOnSelect: true,
        });

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
        let recettes = $('.recette')

        recettes.eq(1).addClass('expand');

        recettes.on('click', function (e) {

            if (recettes.hasClass('expand')) {
                recettes.removeClass('expand');

                $(this).addClass('expand');
            } else {
                $(this).addClass('expand');
            }
        })

    });

}(jQuery))
