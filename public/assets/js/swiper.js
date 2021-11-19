function scrollFunction(leftScroll, rightScroll, scrollBlock) {
    var maxScroll = $(scrollBlock).get(0).scrollWidth - $(scrollBlock).get(0).clientWidth;
    var artim = 140;
    var counter = artim;
    /*overflow olub olmadigini yoxlayan sertler*/
    if (maxScroll > 0) {
        $(rightScroll).css({ 'display': 'flex' })
    }
    else {

        $(rightScroll).css({ 'display': 'none' })
    }

    /*right a click eliyende scroll eliyen funksiya*/
    $(rightScroll).on('click', function () {
        event.preventDefault();
        $(scrollBlock).animate({
            scrollLeft: $(scrollBlock).offset().left = counter
        }, 400);

        counter += artim;
        if ($(scrollBlock).scrollLeft() >= maxScroll - artim) {
            $(rightScroll).css({ 'display': 'none' });
        }

    });

    /*left button a click eliyende ise dusecek funksiya */
    $(leftScroll).on('click', function () {
        event.preventDefault();
        $(scrollBlock).animate({
            scrollLeft: $(scrollBlock).offset().left = 0
        }, 400);

        counter = artim
    });


    /*right button ucun funksiya*/
    function forRight() {
        if ($(scrollBlock).scrollLeft() >= maxScroll) {
            $(rightScroll).css({ 'display': 'none' });
        }
        else
            $(rightScroll).css({ 'display': 'flex' });

    }

    /*left ucun funksiya*/
    function forLeft() {
        if ($(scrollBlock).scrollLeft() > 0) {
            $(leftScroll).css({ 'display': 'flex' })
        }
        else {
            $(leftScroll).css({ 'display': 'none' })
            counter = artim;
        }

    }

    /*swipe _images scroll olan zaman ise dusur*/

    $(scrollBlock).scroll(() => {
        forRight();
        forLeft();
    })

}

// scrollFunction('.swipe_left_btn', '.swipe_right_btn', '.recomended_swipe_container');
// scrollFunction('.popular_swipe_left_btn', '.popular_swipe_right_btn', '.popular_swipe_container');
// scrollFunction('.flash_swipe_left', '.flash_swipe_right', '.flash_swipe_container');
