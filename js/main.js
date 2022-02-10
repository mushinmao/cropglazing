$(document).ready(function () {

    $('.header__mobile-button').change(function () {
        let checked = $(this).find('input').prop('checked')

        if (checked) {
            $('.header__nav').css('display', 'block')
            $('.header__nav .navbar-nav').animate(
                {
                    opacity: 1,
                    transform: 'translateY(0)'
                },
                200
            )
            $('main').css('filter', 'blur(2px)')
        } else {
            $('.header__nav .navbar-nav').attr('style', '')
            $('.header__nav').attr('style', '')
            $('main').css('filter', 'blur(0)')

        }
    })


    $(window).scroll(function () {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            $('.scroll-button').addClass('scroll-button_show')
        } else {
            $('.scroll-button').removeClass('scroll-button_show')
        }
    })

    $('.scroll-button').click(function () {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    })
})