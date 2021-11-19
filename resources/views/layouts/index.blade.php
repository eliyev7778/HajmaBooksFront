<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,minimal-ui" />
    <title>Hompage - HajMa Book</title>
    <link rel="icon" href="/assets/css/logo/32x32.png.png">
    <link rel="stylesheet" href="/assets/css/style.css?">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>
<body>
<header class="w-100">
    <div class="center">
        <div class="header_in w-100 d-flex justify-content-between align-items-center ">

            <div class="heaer_logo">
                <a href="#" class="w-100 h-100 ">
                    <img src="./assets/css/logo/header_logo.png" alt="header_logo">
                </a>
            </div>

            <div class="header_middle  justify-content-between align-items-center ">
                <input type="text" placeholder="Search over 30 mmillion book titles">
                <button type="button"><i class="fas fa-search"></i></button>
            </div>
            <div class="header_right  align-items-center ">

                <div class="lang_menu" >
                    <button id="lang_menu_btn" class="lang_btn d-flex " >
                        <p class="d-flex" >Aze <img src="./assets/css/logo/azerbaijan.png" alt="aze_flag"> </p>
                        <span><i class="fas fa-angle-down"></i></span>
                    </button>
                    <ul id="lang_list" class="lang_list  flex-column " >
                        <li class="lang_list_item" >
                            <a href="javascript:void(0)" class="d-flex" >
                                Aze <img src="./assets/css/logo/azerbaijan.png" alt="aze_flag">
                            </a>
                        </li>

                        <li class="lang_list_item" >
                            <a href="javascript:void(0)" class="d-flex" >
                                Eng <img src="./assets/css/logo/united-states.png" alt="english_flag">
                            </a>
                        </li>

                        <li class="lang_list_item" >
                            <a href="javascript:void(0)" class="d-flex"  >
                                Ru <img src="./assets/css/logo/russia.png" alt="rus_flag">
                            </a>
                        </li>
                    </ul>

                </div>

                <a href="javascript:void(0)" target="_self" class="login_btn">
                    Log In
                </a>

                <a href="javascript:void(0)" target="_self" class="signup_btn">
                    <img src="./assets/css/logo/user_icon.svg" alt="user_icon" width="20px" height="20px"> Sign Up
                </a>
            </div>
            <button class="open_mobile_menu btn ">
                <span><i class="fas fa-bars"></i></span>
            </button>
        </div>
        <div class=" w-100  mb-3  mobile_search  header_middle  justify-content-between align-items-center ">
            <input type="text" placeholder="Search over 30 mmillion book titles">
            <button type="button"><i class="fas fa-search"></i></button>
        </div>
        <div class="mobile_category  p-1 w-100" >
            <a class="mobile_category_btn" data-bs-toggle="collapse" href="#cateqory_collapse" role="button"
               aria-expanded="false" aria-controls="cateqory_collapse"> Categories
                <span><i class="fas fa-angle-down"></i></span> </a>
            <div class="collapse multi-collapse" id="cateqory_collapse">
                <div class="mobile_category_list_container" >
                    <ul class="mobile_category_list  d-flex  flex-column ">

                        <li class="mobile_category_item">
                            <a href="javascript:void(0)">
                                blog
                            </a>
                        </li>

                        <li class="mobile_category_item">
                            <a href="javascript:void(0)">
                                watch
                            </a>
                        </li>

                        <li class="mobile_category_item">
                            <a href="javascript:void(0)">
                                watch
                            </a>
                        </li>

                        <li class="mobile_category_item">
                            <a href="javascript:void(0)">
                                watch
                            </a>
                        </li>

                        <li class="mobile_category_item">
                            <a href="javascript:void(0)">
                                watch
                            </a>
                        </li>

                        <li class="mobile_category_item">
                            <a href="javascript:void(0)">
                                watch
                            </a>
                        </li>

                        <li class="mobile_category_item">
                            <a href="javascript:void(0)">
                                watch
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header_bottom   align-items-center  ">
            <nav class="navbar">
                <ul class="navbar_list">
                    <li class="nav_list_item">
                        <a href="./index.html" target="_self" class="my_active">
                            home
                        </a>
                    </li>
                    <li class="nav_list_item">
                        <a href="javascript:void(0)" target="_self">
                            books
                        </a>
                    </li>
                    <li class="nav_list_item">
                        <a href="javascript:void(0)" target="_self">
                            audiobooks
                        </a>
                    </li>
                    <li class="nav_list_item">
                        <a href="javascript:void(0)" target="_self">
                            collections
                        </a>
                    </li>
                    <li class="nav_list_item">
                        <a href="javascript:void(0)" target="_self">
                            on sale
                        </a>
                    </li>
                    <li class="nav_list_item">
                        <a href="./contact.html" target="_self">
                            Əlaqə
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header_category">
                <button class="desktop_category_btn">
                    Categories <i class=" fas fa-angle-down"></i>
                </button>
                <ul class="desktop_category_list   flex-column ">

                    <li class="desktop_category_item">
                        <a href="javascript:void(0)">
                            blog
                        </a>
                    </li>

                    <li class="desktop_category_item">
                        <a href="javascript:void(0)">
                            watch
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</header>

@yield('index')

<footer class="w-100">
    <div class="center">
        <div class="footer_continer d-flex justify-content-between">
            <div class="footer_logo_container d-flex flex-column justify-content-between">
                <a href="javascript:void(0)" class="footer_logo_img">
                    <img src="./assets/css/logo/footer_logo.png" alt="footer_logo">
                </a>
                <div class="sosial_networks">
                    <h5>Follow Us</h5>

                    <ul class="sosial_networks_list d-flex ">
                        <li class="sosial_network_item">
                            <a href="javascript:void">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

                        <li class="sosial_network_item">
                            <a href="javascript:void">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>

                        <li class="sosial_network_item">
                            <a href="javascript:void">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>

                        <li class="sosial_network_item">
                            <a href="javascript:void">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>

                        <li class="sosial_network_item">
                            <a href="javascript:void">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="quick_links">
                <h5>Quick Links</h5>
                <ul class="quick_links_list d-flex flex-column">
                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            about us
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            contact us
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            products
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            login
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            sign up
                        </a>
                    </li>
                </ul>
            </div>

            <div class="customer_area quick_links">
                <h5>Customer Area</h5>
                <ul class="quick_links_list d-flex flex-column">
                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            my account
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            orders
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            tracking list
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            terms
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            privacy policy
                        </a>
                    </li>

                    <li class="quick_links_item">
                        <a href="javascript:void(0)">
                            FAQ
                        </a>
                    </li>

                </ul>
            </div>

            <div class="footer_subscribe">
                <h5>Don't miss the newest books</h5>
                <form class="footer_email" action="#" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Type your email here">
                </form>
            </div>

        </div>
    </div>
</footer>


<div class="mobile_header">
    <div class="mobile_header_in  d-flex flex-column">
        <ul class="mobile_h_list d-flex flex-column ">
            <li class="mobile_h_listitem">
                <a href="javascript:void(0)">
                    home
                </a>
            </li>

            <li class="mobile_h_listitem">
                <a href="javascript:void(0)">
                    books
                </a>
            </li>

            <li class="mobile_h_listitem">
                <a href="javascript:void(0)">
                    audiobooks
                </a>
            </li>

            <li class="mobile_h_listitem">
                <a href="javascript:void(0)">
                    collections
                </a>
            </li>

            <li class="mobile_h_listitem">
                <a href="javascript:void(0)">
                    on sale
                </a>
            </li>
        </ul>

        <div class="mobile_register d-flex flex-column ">
            <a href="javascript:void(0)">
                <i class="fas fa-sign-in-alt"></i> login
            </a>

            <a href="javascript:void(0)">
                <i class="far fa-user"></i> sign up
            </a>

            <div class="lang_menu" >
                <button id="mobile_lang_menu_btn" class="lang_btn d-flex " >
                    <p class="d-flex" >Aze <img src="./assets/css/logo/azerbaijan.png" alt="aze_flag"> </p>
                    <span><i class="fas fa-angle-down"></i></span>
                </button>
                <ul id="mobile_lang_list" class="lang_list  flex-column " >
                    <li class="lang_list_item" >
                        <a href="javascript:void(0)" class="d-flex" >
                            Aze <img src="./assets/css/logo/azerbaijan.png" alt="aze_flag">
                        </a>
                    </li>

                    <li class="lang_list_item" >
                        <a href="javascript:void(0)" class="d-flex" >
                            Eng <img src="./assets/css/logo/united-states.png" alt="english_flag">
                        </a>
                    </li>

                    <li class="lang_list_item" >
                        <a href="javascript:void(0)" class="d-flex"  >
                            Ru <img src="./assets/css/logo/russia.png" alt="rus_flag">
                        </a>
                    </li>
                </ul>

            </div>

        </div>

    </div>
</div>



<!-- Jquery latest Version -->
<script src="/assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap  JavaScript CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>

<!-- Header JS file -->
<script src="/assets/js/header.js"></script>
<script src="/assets/js/swiper.js"></script>

<script>

    scrollFunction('.swipe_left_btn', '.swipe_right_btn', '.recomended_swipe_container');
    scrollFunction('.popular_swipe_left_btn', '.popular_swipe_right_btn', '.popular_swipe_container');
    scrollFunction('.flash_swipe_left', '.flash_swipe_right', '.flash_swipe_container');

    /* category swipe ucun scrollbar */

    var maxCategoryScroll = $('.category_inner').get(0).scrollWidth - $('.category_inner').get(0).clientWidth;
    var count1 = 0, count2 = (maxCategoryScroll / 2), count3 = maxCategoryScroll;

    var l = $('.swipe_buttons_container button').length;
    var swipeScrollLeft = $('.category_inner').scrollLeft();

    $('.category_inner').scroll(function () {
        var swipeScrollLeft = $('.category_inner').scrollLeft();

        if (swipeScrollLeft <= count2) {
            for (var i = 1; i <= l; i++) {
                if ($(`.swipe_buttons_container button:nth-child(${i})`).hasClass('swipe_active')) {
                    $(`.swipe_buttons_container button:nth-child(${i})`).removeClass('swipe_active')
                }
            }
            $('.swipe_1').addClass('swipe_active');
        }

        else if (swipeScrollLeft > count2 && swipeScrollLeft < (count3 - 30)) {
            for (var i = 1; i <= l; i++) {
                if ($(`.swipe_buttons_container button:nth-child(${i})`).hasClass('swipe_active')) {
                    $(`.swipe_buttons_container button:nth-child(${i})`).removeClass('swipe_active')
                }
            }

            $('.swipe_2').addClass('swipe_active');
        }

        else {
            for (var i = 1; i <= l; i++) {
                if ($(`.swipe_buttons_container button:nth-child(${i})`).hasClass('swipe_active')) {
                    $(`.swipe_buttons_container button:nth-child(${i})`).removeClass('swipe_active')
                }
            }

            $('.swipe_3').addClass('swipe_active');
        }

    })

    /* swipe ucun js -ler */

    $('.category_btn').on('click', function () {

        var swipeScrollLeft = $('.category_inner').scrollLeft();

        for (var i = 1; i <= l; i++) {
            if ($(`.swipe_buttons_container button:nth-child(${i})`).hasClass('swipe_active')) {
                $(`.swipe_buttons_container button:nth-child(${i})`).removeClass('swipe_active')
            }
        }
        $(this).addClass('swipe_active');
        if ($(this).hasClass('swipe_1')) {
            event.preventDefault();
            $('.category_inner').animate({
                scrollLeft: $('.category_inner').offset().left = count1
            }, 400);
        }

        else if ($(this).hasClass('swipe_2')) {
            event.preventDefault();
            $('.category_inner').animate({
                scrollLeft: $('.category_inner').offset().left = count2 + 10
            }, 400);
        }

        else if ($(this).hasClass('swipe_3')) {
            event.preventDefault();
            $('.category_inner').animate({
                scrollLeft: $('.category_inner').offset().left = count3
            }, 400);
        }

    })

    /****************Timeri isletemek  ucun JS***************/

    function makeTimer() {
        var endTime = new Date("22 october 2021 14:15:00 GMT+04:00");
        endTime = (Date.parse(endTime) / 1000);
        var now = new Date();
        now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (days < "10") {
            if (days < '0') {
                days = '0';
                hours = '0';
                minutes = '0';
                seconds = '0';
            }
            days = "0" + days;
        }
        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }

        $("#days").html(days + "<span></span>");
        $("#hours").html(hours + "<span></span>");
        $("#minutes").html(minutes + "<span></span>");
        $("#seconds").html(seconds + "<span></span>");
        if (days <= 0 && hours == 0 && minutes == 0 && seconds == 0) {
            clearInterval(timerCountdown);
        }
    }
    var timerCountdown = setInterval(function () { makeTimer(); }, 1000);
</script>

</body>

</html>
