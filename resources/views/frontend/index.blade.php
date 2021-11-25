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
                             @foreach($special as $key)
                                <div class="carousel-item js-first-special-active h-100 ">
                                    <div class="content_container">
                                        <h2 class="pagetop_title">{{$key['books']->book_name}}</h2>
                                        <h3 class="pagetop_subtitle d-flex flex-column ">
                                            @lang('index.special') {{(new \App\Helper\index())->interest($key['books']->price,$key['books']->discount)}} @lang('index.discount')
                                           <p>
                                                        @foreach($key['category'] as $category)
                                                         <span>
                                                        {{$category->categorys}}
                                                         </span>
                                                         @endforeach
                                           </p>
                                        </h3>
                                        <div class="pagetop_buttons d-flex justify-content-between ">
                                            <a class="get_deal_btn" href="javascript:void(0)">
                                                @lang('index.readMore') <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                            <a class="see_others" href="javascript:void(0)">
                                                @lang('index.otherPromos')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
                                 @foreach($best_sold as $key)
                                <div class="carousel-item  w-100 h-100  js-first-best-sold-active">
                                    <div
                                        class="pagetop_rightslider_item d-flex flex-column align-items-center justify-content-center ">
                                        <h2 class="right_item_title">@lang('index.bestSeller')</h2>
                                        <span class="rigth_item_excerpt">@lang('index.salesWeek')</span>
                                        <div class="pagetop_book_img">
                                            <img src="{{$key['books']->img_front==null ? $key['books']->img_audio : $key['books']->img_front}}" alt="pagetop_book"
                                                 class="w-100 h-100 ">
                                        </div>
                                        <h2 class="pushing_clouds">
                                            {{$key['books']->book_name}}
                                        </h2>
                                             <p>
                                                 @foreach($key['category'] as $category)
                                            <span class="pushing_clouds_subtitle">
                                                {{$category->categorys}}
                                                  </span>
                                            @endforeach
                                             </p>
                                        <div class="pagotop_right_price_continer">
                                            <span class="old_price"><del>60.00</del></span>
                                            <span class="new_price"> USD <span class="price_count">45.25</span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
                        <img src="/assets/css/logo/four_item1.png" alt="four_item_image">
                    </div>
                    <h3 class="item_title">
                        quick delivery
                    </h3>
                </div>

                <div class="four_item d-flex">
                    <div class="item_img">
                        <img src="/assets/css/logo/secure.png" alt="four_item_image">
                    </div>
                    <h3 class="item_title">
                        quick delivery
                    </h3>
                </div>

                <div class="four_item d-flex">
                    <div class="item_img">
                        <img src="/assets/css/logo/like.png" alt="four_item_image">
                    </div>
                    <h3 class="item_title">
                        Return guarante
                    </h3>
                </div>

                <div class="four_item d-flex">
                    <div class="item_img">
                        <img src="/assets/css/logo/star.png" alt="four_item_image">
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
                                @lang('index.recomended')
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
                                  @foreach($best_book as $key)
                                <div class="recomended_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="{{$key->img_front==null ? $key->img_audio : $key->img_front}}" alt="book_image">
                                    </a>
                                </div>
                                @endforeach
                            </div>

                        </div>


                    </div>
                </div>

                <div class="popular_container">
                    <img src="/assets/images/popular_bg.png" alt="recomended_bg" class='recomended_bg'>
                    <div class="popular_container_in position-relative ">
                        <div class="popular_section_title">
                            <h2>
                               @lang('index.popularBooks')
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
                                @foreach($advice as $key)
                                <div class="popular_item">
                                    <a href="javascript:void(0)" target="_self" class="w-100 h-100 ">
                                        <img src="{{$key->img_front==null ? $key->img_audio : $key->img_front}}" alt="book_image">
                                    </a>
                                </div>
                                @endforeach
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
                <h2>@lang('index.categories')</h2>
                <div class="swipe_buttons_container ">
                    <button class="category_btn swipe_active  swipe_1" type="button"></button>
                    <button class="category_btn   swipe_2" type="button"></button>
                    <button class="category_btn swipe_3" type="button"></button>
                </div>
            </div>
            <div class="category_inner w-100 d-flex ">
                @foreach($category_list as $key)
                <a href="#" target="_self">
                    <div class="category_item">
                        <h4 class="category_item_title">{{$key->category_name}}</h4>
                        <p class="category_info">
                            <span class="item_count">{{$key->items}}</span> + @lang('index.book')
                        </p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

    </section>

    <section class="new_books_section w-100 p-1">
        <div class="center">
            <div class="categoriy_section_title w-100 d-flex justify-content-between ">
                <h2>@lang('index.newBooks')</h2>
                <a class="see_all" href="#" target="_self">
                   @lang('index.seeAll')
                </a>
            </div>

            <div class="new_books_inner">
                @foreach($new_book as $key)
                <div class="new_books_item ">
                    <div class="new_books_image_container w-100">
                        @if($key['books']->discount!=null)
                            <span class="discount_percentage">
                               {{(new \App\Helper\index())->interest($key['books']->price,$key['books']->discount)}}
                            </span>
                        @endif
                        <a class="item_img" href="#" target="_self">
                            <img src="{{$key['books']->img_front==null ? $key['books']->img_audio : $key['books']->img_front}}" alt="new_books">
                        </a>
                    </div>
                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>{{$key['books']->book_name}}</h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            @foreach($key['category'] as $key2)
                            <span class="book_type">{{$key2->categorys}}</span>
                            @endforeach
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                @if($key['books']->discount!=null)
                                <span class="new_price"> $ {{$key['books']->discount}} </span>
                                <span class="old_price"> <del>$ {{$key['books']->price}}</del> </span>
                                @else
                                    <span class="new_price"> $ {{$key['books']->price}} </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@if(count($costly_books)==3)
    <section class="three_boks_section  w-100 p-1">
        <div class="center">
            <div class="d-flex justify-content-between w-100">
                <div class="boks3_lelft h-100  d-flex justify-content-between  ">
                    <div class="boks_left_text   d-flex  justify-content-between ">
                        <div class="boks_left_text_author pagetop_subtitle">
                            <a href="javascript:void(0)">
                                <h2 class="boks3_left_title">{{$costly_books[0]['books']->book_name}}</h2>
                            </a>
                            <p>
                            @foreach($costly_books[0]['category'] as $key)
                            <span class="boks3_left_excerpt">{{$key->author}}</span>
                            @endforeach
                            </p>
                        </div>

                        <div class="boks_left_text_price  d-flex ">
                            <div class="boks_left_text_single_price">
                                    <span class="new_price"
                                          style="color: white; font-size: 20px; margin-right: 5px; ">$ {{$costly_books[0]['books']->discount}}</span>
                                <del>
                                        <span class="old_price"
                                              style="color: white; line-height:32px; margin-right: 5px; ">
                                            $ {{$costly_books[0]['books']->price}}
                                        </span>
                                </del>
                            </div>
                            <button class="buy_now_btn"> @lang('index.buy') </button>
                        </div>

                    </div>
                    <a href="javascript:void(0)" class="boks3_left_img">
                        <img src="{{$costly_books[0]['books']->img_front}}" alt="3boks_image">
                    </a>
                </div>

                <div class="boks3_right d-flex flex-column justify-content-between ">

                    <div class="boks3_right_item d-flex w-100 justify-content-between ">
                        <a class="right_item_img" href="#">
                            <img src="{{$costly_books[1]['books']->img_front}}" alt="right_item_book">
                        </a>
                        <div class="boks3_right_text  d-flex justify-content-between ">
                            <div>
                                <h2 class="boks3_right_item_title">
                                    <a href="javascript:void(0)">{{$costly_books[1]['books']->book_name}}</a>
                                </h2>
                                <p class="boks3_right_item_excerpt">
                                    @foreach($costly_books[1]['category'] as $key)
                                        <span class="boks3_left_excerpt">{{$key->author}}</span>
                                    @endforeach
                                </p>
                            </div>
                            <div class="d-flex flex-column ">
                                <div class="d-flex justify-content-between">
                                        <span class="new_price"
                                              style="color: white; font-size: 20px; margin-right: 5px; ">$ {{$costly_books[1]['books']->discount}}</span>
                                    <del> <span class="old_price"
                                                style="color: white; line-height:32px; margin-right: 5px; "> $ {{$costly_books[1]['books']->price}}
                                            </span>
                                    </del>

                                </div>
                                <button class="buy_now_btn" style="margin-left: 0px;"> @lang('index.buy') </button>
                            </div>
                        </div>
                    </div>

                    <div class="boks3_right_item d-flex w-100 justify-content-between ">
                        <a class="right_item_img" href="#">
                            <img src="{{$costly_books[2]['books']->img_front}}" alt="right_item_book">
                        </a>
                        <div class="boks3_right_text  d-flex justify-content-between ">
                            <div>
                                <h2 class="boks3_right_item_title">
                                    <a href="javascript:void(0)">{{$costly_books[2]['books']->book_name}}</a>
                                </h2>
                                <p class="boks3_right_item_excerpt">
                                    @foreach($costly_books[2]['category'] as $key)
                                        <span class="boks3_left_excerpt">{{$key->author}}</span>
                                    @endforeach
                                </p>
                            </div>
                            <div class="d-flex flex-column ">
                                <div class="d-flex justify-content-between">
                                        <span class="new_price"
                                              style="color: white; font-size: 20px; margin-right: 5px; ">$ {{$costly_books[2]['books']->discount}}</span>
                                    <del> <span class="old_price"
                                                style="color: white; line-height:32px; margin-right: 5px; "> $ {{$costly_books[2]['books']->price}}
                                            </span>
                                    </del>

                                </div>
                                <button class="buy_now_btn" style="margin-left: 0px;"> @lang('index.buy') </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
    <section class="new_books_section w-100 p-1">
        <div class="center">
            <div class="new_books_inner">
                    @foreach($audio_books as $key)
                        <div class="new_books_item ">
                            <div class="new_books_image_container w-100">
                                @if($key['books']->discount!=null)
                                    <span class="discount_percentage">
                               {{(new \App\Helper\index())->interest($key['books']->price,$key['books']->discount)}}
                            </span>
                                @endif
                                <a class="item_img" href="#" target="_self">
                                    <img src="{{$key['books']->img_front==null ? $key['books']->img_audio : $key['books']->img_front}}" alt="new_books">
                                </a>
                            </div>
                            <div class="book_item_bottom w-100 ">
                                <a href="#">
                                    <h5>{{$key['books']->book_name}}</h5>
                                </a>
                                <div class="book_type_contianer d-flex  flex-wrap  w-100">
                                    @foreach($key['category'] as $key2)
                                        <span class="book_type">{{$key2->categorys}}</span>
                                    @endforeach
                                </div>
                                <div class="imdb_container w-100 d-flex justify-content-between">
                                    <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                                    <div>
                                        @if($key['books']->discount!=null)
                                            <span class="new_price"> $ {{$key['books']->discount}} </span>
                                            <span class="old_price"> <del>$ {{$key['books']->price}}</del> </span>
                                        @else
                                            <span class="new_price"> $ {{$key['books']->price}} </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            @lang('index.limitedDiscount')
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
                @foreach($free_books as $key)
                    <div class="new_books_item ">
                        <div class="new_books_image_container w-100">
                            @if($key['books']->discount!=null)
                                <span class="discount_percentage">
                               {{(new \App\Helper\index())->interest($key['books']->price,$key['books']->discount)}}
                            </span>
                            @endif
                            <a class="item_img" href="#" target="_self">
                                <img src="{{$key['books']->img_front==null ? $key['books']->img_audio : $key['books']->img_front}}" alt="new_books">
                            </a>
                        </div>
                        <div class="book_item_bottom w-100 ">
                            <a href="#">
                                <h5>{{$key['books']->book_name}}</h5>
                            </a>
                            <div class="book_type_contianer d-flex  flex-wrap  w-100">
                                @foreach($key['category'] as $key2)
                                    <span class="book_type">{{$key2->categorys}}</span>
                                @endforeach
                            </div>
                            <div class="imdb_container w-100 d-flex justify-content-between">
                                <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                                <div>
                                    @if($key['books']->discount!=null)
                                        <span class="new_price"> $ {{$key['books']->discount}} </span>
                                        <span class="old_price"> <del>$ {{$key['books']->price}}</del> </span>
                                    @else
                                        <span class="new_price"> $ {{$key['books']->price}} </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        <h5>{{$total_info[0]->total_user}}+</h5>
                    </div>
                    <p class="statistica_item_subtitle">
                        @lang('index.user')
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="statistica_count">
                        <h5>{{$total_info[0]->total_book}}+</h5>
                    </div>
                    <p class="statistica_item_subtitle">
                        @lang('index.book')
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="statistica_count">
                        <h5>{{$total_info[0]->total_category}}+</h5>
                    </div>
                    <p class="statistica_item_subtitle">
                        @lang('index.category')
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img">
                        <img src="./assets/css/logo/feather.png" alt="">
                    </div>
                    <div class="statistica_count">
                        <h5>{{$total_info[0]->total_author}}+</h5>
                    </div>
                    <p class="statistica_item_subtitle">
                        @lang('index.author')
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
                            @lang('index.subscriber')
                        </p>
                    </div>
                    <div class="subscribe_inputs d-flex justify-content-between ">
                        <input type="text" required placeholder="@lang('index.typeEmail') ">
                        <button type="button" class="subscribe_btn">
                            @lang('index.submit')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
