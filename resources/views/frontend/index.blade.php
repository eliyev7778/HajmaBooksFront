@extends('layouts.index')
@section('index')
<main role="main" class="w-100">
    <section class="pagetop_slider_section w-100 p-1 ">
        <div class="center">
            <div class="pagetop_slider  w-100 d-flex justify-content-between align-items-center">
                <div class="pagetop_slider_left">
                    <img class="pagetop_backgroud" src="./assets/images/pagetop_bg_image.png" alt="pagetop_bg">

                    <div class="slider_container">
                        <div id="carouselExampleIndicators" class="carousel slide h-100 " data-bs-ride="carousel">
                            <div class="carousel-indicators  ">
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner h-100">
                                <div class="carousel-item active  h-100 ">
                                    <div class="content_container">
                                        <h2 class="pagetop_title">back to school</h2>
                                        <h3 class="pagetop_subtitle d-flex flex-column ">Special 50% Off
                                            <span>for our stduent community</span>
                                        </h3>
                                        <div class="pagetop_buttons d-flex justify-content-between ">
                                            <a class="get_deal_btn" href="javascript:void(0)">
                                                Get the deal <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                            <a class="see_others" href="javascript:void(0)">
                                                See other promos
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item h-100 ">
                                    <div class="content_container">
                                        <h2 class="pagetop_title">back to school</h2>
                                        <h3 class="pagetop_subtitle d-flex flex-column ">Special 50% Off
                                            <span>for our stduent community</span>
                                        </h3>
                                        <div class="pagetop_buttons d-flex justify-content-between  ">
                                            <a class="get_deal_btn" href="javascript:void(0)">
                                                Get the deal <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                            <a class="see_others" href="javascript:void(0)">
                                                See other promos
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item h-100 ">
                                    <div class="content_container">
                                        <h2 class="pagetop_title">back to school</h2>
                                        <h3 class="pagetop_subtitle d-flex flex-column ">Special 50% Off
                                            <span>for our stduent community</span>
                                        </h3>
                                        <div class="pagetop_buttons d-flex justify-content-between ">
                                            <a class="get_deal_btn" href="javascript:void(0)">
                                                Get the deal <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                            <a class="see_others" href="javascript:void(0)">
                                                See other promos
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item h-100 ">
                                    <div class="content_container">
                                        <h2 class="pagetop_title">back to school</h2>
                                        <h3 class="pagetop_subtitle d-flex flex-column ">Special 50% Off
                                            <span>for our stduent community</span>
                                        </h3>
                                        <div class="pagetop_buttons d-flex justify-content-between ">
                                            <a class="get_deal_btn" href="javascript:void(0)">
                                                Get the deal <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                            <a class="see_others" href="javascript:void(0)">
                                                See other promos
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pagetop_slider_right">
                    <div class="slider_right_continer w-100 ">
                        <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner w-100 h-100 ">
                                <div class="carousel-item  w-100 h-100  active">
                                    <div
                                        class="pagetop_rightslider_item d-flex flex-column align-items-center justify-content-center ">
                                        <h2 class="right_item_title">best seller</h2>
                                        <span class="rigth_item_excerpt">Based sales this week</span>
                                        <div class="pagetop_book_img">
                                            <img src="./assets/images/bookd2.jpg" alt="pagetop_book"
                                                 class="w-100 h-100 ">
                                        </div>
                                        <h2 class="pushing_clouds">
                                            pushing clouds
                                        </h2>
                                        <span class="pushing_clouds_subtitle">
                                                adventure,science,comedy
                                            </span>
                                        <div class="pagotop_right_price_continer">
                                            <span class="old_price"><del>60.00</del></span>
                                            <span class="new_price"> USD <span class="price_count">45.25</span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item   w-100 h-100 ">
                                    <div
                                        class="pagetop_rightslider_item d-flex flex-column align-items-center justify-content-center">
                                        <h2 class="right_item_title">best seller</h2>
                                        <span class="rigth_item_excerpt">Based sales this week</span>
                                        <div class="pagetop_book_img">
                                            <img src="./assets/images/boooks.jpg" alt="pagetop_book"
                                                 class="w-100 h-100 ">
                                        </div>
                                        <h2 class="pushing_clouds">
                                            pushing clouds
                                        </h2>
                                        <span class="pushing_clouds_subtitle">
                                                adventure,science,comedy
                                            </span>
                                        <div class="pagotop_right_price_continer">
                                            <span class="old_price"><del>60.00</del></span>
                                            <span class="new_price"> USD <span class="price_count">45.25</span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item   w-100 h-100  ">
                                    <div
                                        class="pagetop_rightslider_item d-flex flex-column align-items-center justify-content-center ">
                                        <h2 class="right_item_title">best seller</h2>
                                        <span class="rigth_item_excerpt">Based sales this week</span>
                                        <div class="pagetop_book_img">
                                            <img src="./assets/images/books3.jpg" alt="pagetop_book"
                                                 class="w-100 h-100 ">
                                        </div>
                                        <h2 class="pushing_clouds">
                                            pushing clouds
                                        </h2>
                                        <span class="pushing_clouds_subtitle">
                                                adventure,science,comedy
                                            </span>
                                        <div class="pagotop_right_price_continer">
                                            <span class="old_price"><del>60.00</del></span>
                                            <span class="new_price"> USD <span class="price_count">45.25</span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                            class="fas fa-angle-left"></i></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"><i
                                            class="fas fa-angle-right"></i></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="four_item_section w-100 p-1">
        <div class="center">
            <div class="four_item_container w-100 d-flex justify-content-between ">
                <div class="four_item d-flex">
                    <div class="item_img">
                        <img src="./assets/css/logo/four_item1.png" alt="four_item_image">
                    </div>
                    <h3 class="item_title">
                        quick delivery
                    </h3>
                </div>

                <div class="four_item d-flex">
                    <div class="item_img">
                        <img src="./assets/css/logo/secure.png" alt="four_item_image">
                    </div>
                    <h3 class="item_title">
                        quick delivery
                    </h3>
                </div>

                <div class="four_item d-flex">
                    <div class="item_img">
                        <img src="./assets/css/logo/like.png" alt="four_item_image">
                    </div>
                    <h3 class="item_title">
                        Return guarante
                    </h3>
                </div>

                <div class="four_item d-flex">
                    <div class="item_img">
                        <img src="./assets/css/logo/star.png" alt="four_item_image">
                    </div>
                    <h3 class="item_title">
                        quick delivery
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="recomended_section  w-100 p-1">
        <div class="center">
            <div class="d-flex justify-content-between w-100">
                <div class="recomended_container">
                    <img src="./assets/images/recomended_bg.png" alt="recomended_bg" class='recomended_bg'>
                    <div class="recomended_container_in position-relative ">
                        <div class="recomended_section_title">
                            <h2>
                                recomended for you
                            </h2>
                        </div>

                        <div class="recomended_section_bottom">

                                <span class="swipe_right_btn">
                                    <span class="swipe_right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </span>

                            <span class="swipe_left_btn">
                                    <i class="fas fa-angle-left"></i>
                                </span>

                            <div class="recomended_swipe_container  w-100 ">

                                <div class="recomended_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="recomended_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="recomended_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="recomended_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="recomended_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="recomended_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="recomended_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>

                <div class="popular_container">
                    <img src="./assets/images/popular_bg.png" alt="recomended_bg" class='recomended_bg'>
                    <div class="popular_container_in position-relative ">
                        <div class="popular_section_title">
                            <h2>
                                popular in 2020
                            </h2>
                        </div>

                        <div class="popular_section_bottom">

                                <span class="popular_swipe_right_btn">
                                    <span class="popular_swipe_right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </span>

                            <span class="popular_swipe_left_btn">
                                    <i class="fas fa-angle-left"></i>
                                </span>

                            <div class="popular_swipe_container  w-100 ">

                                <div class="popular_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="popular_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="popular_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="popular_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="popular_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>

                                <div class="popular_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="./assets/images/books3.jpg" alt="book_image">
                                    </a>
                                </div>



                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="categories_section w-100 p-1">
        <div class="center">
            <div class="categoriy_section_title w-100 d-flex justify-content-between ">
                <h2>categories</h2>
                <div class="swipe_buttons_container ">
                    <button class="category_btn swipe_active  swipe_1" type="button"></button>
                    <button class="category_btn   swipe_2" type="button"></button>
                    <button class="category_btn swipe_3" type="button"></button>
                </div>
            </div>
            <div class="category_inner w-100 d-flex ">
                <a href="#" target="_self">
                    <div class="category_item">
                        <h4 class="category_item_title">Arts & Photography</h4>
                        <p class="category_info">
                            <span class="item_count">214</span> + Item
                        </p>
                    </div>
                </a>

                <a href="#" target="_self">
                    <div class="category_item">
                        <h4 class="category_item_title">Arts & Photography</h4>
                        <p class="category_info">
                            <span class="item_count">214</span> + Item
                        </p>
                    </div>
                </a>

                <a href="#" target="_self">
                    <div class="category_item">
                        <h4 class="category_item_title">Arts & Photography</h4>
                        <p class="category_info">
                            <span class="item_count">214</span> + Item
                        </p>
                    </div>
                </a>

                <a href="#" target="_self">
                    <div class="category_item">
                        <h4 class="category_item_title">Arts & Photography</h4>
                        <p class="category_info">
                            <span class="item_count">214</span> + Item
                        </p>
                    </div>
                </a>

                <a href="#" target="_self">
                    <div class="category_item">
                        <h4 class="category_item_title">Arts & Photography</h4>
                        <p class="category_info">
                            <span class="item_count">214</span> + Item
                        </p>
                    </div>
                </a>

                <a href="#" target="_self">
                    <div class="category_item">
                        <h4 class="category_item_title">Arts & Photography</h4>
                        <p class="category_info">
                            <span class="item_count">214</span> + Item
                        </p>
                    </div>
                </a>
            </div>
        </div>

    </section>

    <section class="new_books_section w-100 p-1">
        <div class="center">
            <div class="categoriy_section_title w-100 d-flex justify-content-between ">
                <h2>new books</h2>
                <a class="see_all" href="#" target="_self">
                    See all
                </a>
            </div>

            <div class="new_books_inner">

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="three_boks_section  w-100 p-1">
        <div class="center">
            <div class="d-flex justify-content-between w-100">
                <div class="boks3_lelft h-100  d-flex justify-content-between  ">
                    <div class="boks_left_text   d-flex  justify-content-between ">

                        <div class="boks_left_text_author">
                            <a href="javascript:void(0)">
                                <h2 class="boks3_left_title">Battle Drive</h2>
                            </a>
                            <span class="boks3_left_excerpt">by Napoleon Sigh</span>
                        </div>

                        <div class="boks_left_text_price  d-flex ">
                            <div class="boks_left_text_single_price">
                                    <span class="new_price"
                                          style="color: white; font-size: 20px; margin-right: 5px; ">$9.5</span>
                                <del>
                                        <span class="old_price"
                                              style="color: white; line-height:32px; margin-right: 5px; ">
                                            $12.0
                                        </span>
                                </del>
                            </div>
                            <button class="buy_now_btn"> buy </button>
                        </div>

                    </div>
                    <a href="javascript:void(0)" class="boks3_left_img">
                        <img src="./assets/images/bookd2.jpg" alt="3boks_image">
                    </a>
                </div>

                <div class="boks3_right d-flex flex-column justify-content-between ">

                    <div class="boks3_right_item d-flex w-100 justify-content-between ">
                        <a class="right_item_img" href="#">
                            <img src="./assets/images/boooks.jpg" alt="right_item_book">
                        </a>
                        <div class="boks3_right_text  d-flex justify-content-between ">
                            <div>
                                <h2 class="boks3_right_item_title">
                                    <a href="javascript:void(0)">Battle Drive</a>
                                </h2>
                                <p class="boks3_right_item_excerpt">
                                    by Napoleon Sigh
                                </p>
                            </div>
                            <div class="d-flex flex-column ">
                                <div class="d-flex justify-content-between">
                                        <span class="new_price"
                                              style="color: white; font-size: 20px; margin-right: 5px; ">$9.5</span>
                                    <del> <span class="old_price"
                                                style="color: white; line-height:32px; margin-right: 5px; "> $12.0
                                            </span>
                                    </del>

                                </div>
                                <button class="buy_now_btn" style="margin-left: 0px;"> buy </button>
                            </div>
                        </div>
                    </div>

                    <div class="boks3_right_item d-flex w-100 justify-content-between ">
                        <a class="right_item_img" href="#">
                            <img src="./assets/images/boooks.jpg" alt="right_item_book">
                        </a>
                        <div class="boks3_right_text  d-flex justify-content-between ">
                            <div>
                                <h2 class="boks3_right_item_title">
                                    <a href="javascript:void(0)">Battle Drive</a>
                                </h2>
                                <p class="boks3_right_item_excerpt">
                                    by Napoleon Sigh
                                </p>
                            </div>
                            <div class="d-flex flex-column ">
                                <div class="d-flex justify-content-between">
                                        <span class="new_price"
                                              style="color: white; font-size: 20px; margin-right: 5px; ">$9.5</span>
                                    <del> <span class="old_price"
                                                style="color: white; line-height:32px; margin-right: 5px; "> $12.0
                                            </span>
                                    </del>

                                </div>
                                <button class="buy_now_btn" style="margin-left: 0px;"> buy </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="new_books_section w-100 p-1">
        <div class="center">
            <div class="new_books_inner">

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flash_sale_section w-100 p-1">

        <div class="center">
            <img class="flash_sale_bg" src="./assets/images/flash_bg.png" alt="">
            <div class="flash_sale_in">

                <div class="flash_main d-flex justify-content-between">

                    <div class="flash_sale_left d-flex flex-column  ">
                        <h3 class="flash_sale_title">
                            flash sale
                        </h3>
                        <div class="timer_container">
                            <div id="timer" class="d-flex">
                                <div id="days"></div>
                                <span class="dots">:</span>
                                <div id="hours"></div>
                                <span class="dots">:</span>
                                <div id="minutes"></div>
                                <span class="dots">:</span>
                                <div id="seconds"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flash_sale_swipe">
                        <button type="button" class="flash_swipe_left">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <button type="button" class="flash_swipe_right">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        <div class="flash_swipe_container d-flex ">

                            <div class="swipe_item d-flex ">
                                <div class="swipe_item_img">
                                    <a href="javascript:void(0)" class="w-100 h-100">
                                        <img src="./assets/images/books3.jpg" alt="flash_sale_img">
                                    </a>
                                </div>
                                <div class="swipe_item_text d-flex flex-column position-relative ">

                                    <div class=" swipe_item_text_top d-flex justify-content-between ">
                                        <span class="book_type">adventure</span>
                                        <div class="Stars" style="--rating: 4"
                                             aria-label="Rating of this product is 2.3 out of 5.">
                                        </div>
                                        <span class="rate_count">
                                                (459)
                                            </span>
                                    </div>

                                    <a href="javascript:void(0)" class="book_name">
                                        Story of Everest
                                    </a>

                                    <p class="book_autor">Henry Martopo</p>

                                    <div class="book_price d-flex">
                                            <span class="book_new_price">
                                                $21.99
                                            </span>
                                        <span class="book_old_price">
                                                <del>$25</del>
                                            </span>
                                    </div>
                                    <button class="add_to_cart_btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </button>

                                    <progress value="65" max="100"></progress>

                                    <p class="left_books">
                                        <span>45</span> books left
                                    </p>
                                </div>
                            </div>

                            <div class="swipe_item d-flex ">
                                <div class="swipe_item_img">
                                    <a href="javascript:void(0)" class="w-100 h-100">
                                        <img src="./assets/images/books3.jpg" alt="flash_sale_img">
                                    </a>
                                </div>
                                <div class="swipe_item_text d-flex flex-column position-relative ">

                                    <div class=" swipe_item_text_top d-flex justify-content-between ">
                                        <span class="book_type">adventure</span>
                                        <div class="Stars" style="--rating: 4"
                                             aria-label="Rating of this product is 2.3 out of 5.">
                                        </div>
                                        <span class="rate_count">
                                                (459)
                                            </span>
                                    </div>

                                    <a href="javascript:void(0)" class="book_name">
                                        Story of Everest
                                    </a>

                                    <p class="book_autor">Henry Martopo</p>

                                    <div class="book_price d-flex">
                                            <span class="book_new_price">
                                                $21.99
                                            </span>
                                        <span class="book_old_price">
                                                <del>$25</del>
                                            </span>
                                    </div>
                                    <button class="add_to_cart_btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </button>

                                    <progress value="65" max="100"></progress>

                                    <p class="left_books">
                                        <span>45</span> books left
                                    </p>
                                </div>
                            </div>

                            <div class="swipe_item d-flex ">
                                <div class="swipe_item_img">
                                    <a href="javascript:void(0)" class="w-100 h-100">
                                        <img src="./assets/images/books3.jpg" alt="flash_sale_img">
                                    </a>
                                </div>
                                <div class="swipe_item_text d-flex flex-column position-relative ">

                                    <div class=" swipe_item_text_top d-flex justify-content-between ">
                                        <span class="book_type">adventure</span>
                                        <div class="Stars" style="--rating: 4"
                                             aria-label="Rating of this product is 2.3 out of 5.">
                                        </div>
                                        <span class="rate_count">
                                                (459)
                                            </span>
                                    </div>

                                    <a href="javascript:void(0)" class="book_name">
                                        Story of Everest
                                    </a>

                                    <p class="book_autor">Henry Martopo</p>

                                    <div class="book_price d-flex">
                                            <span class="book_new_price">
                                                $21.99
                                            </span>
                                        <span class="book_old_price">
                                                <del>$25</del>
                                            </span>
                                    </div>
                                    <button class="add_to_cart_btn">
                                        <i class="fas fa-shopping-basket"></i>
                                    </button>

                                    <progress value="65" max="100"></progress>

                                    <p class="left_books">
                                        <span>45</span> books left
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new_books_section w-100 p-1">
        <div class="center">
            <div class="new_books_inner">
                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new_books_item ">

                    <div class="new_books_image_container w-100">
                            <span class="discount_percentage">
                                50%
                            </span>
                        <a class="item_img" href="#" target="_self">
                            <img src="./assets/images/boooks.jpg" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>The Missadventure of Lorem ipsum dolor sit amet. </h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                            <span class="book_type">adventure</span>
                            <span class="book_type">survival</span>
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                <span class="new_price"> $45.4 </span>
                                <span class="old_price"> <del>$98.4</del> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statistica_section w-100 p-1">
        <div class="center">
            <div class="statistica_in d-flex ">
                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="statistica_count">
                        <h5>125,663</h5>
                    </div>
                    <p class="statistica_item_subtitle">
                        Happy Customers
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="statistica_count">
                        <h5>45,663+</h5>
                    </div>
                    <p class="statistica_item_subtitle">
                        Book Collections
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="statistica_count">
                        <h5>1.562</h5>
                    </div>
                    <p class="statistica_item_subtitle">
                        Our Stores
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img">
                        <img src="./assets/css/logo/feather.png" alt="">
                    </div>
                    <div class="statistica_count">
                        <h5>457</h5>
                    </div>
                    <p class="statistica_item_subtitle">
                        Famous Writers
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="subscribe_section  ">
        <div class="center">
            <div class="subscribe_in w-100 d-flex align-items-center justify-content-center ">
                <div class="subscribe_in_main  d-flex  justify-content-between align-items-center  ">
                    <div class="subscirbe_text">
                        <p>
                            Subscribe our newsletter for newest books updates
                        </p>
                    </div>
                    <div class="subscribe_inputs d-flex justify-content-between ">
                        <input type="text" required placeholder="Type your email here ">
                        <button type="button" class="subscribe_btn">
                            subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
