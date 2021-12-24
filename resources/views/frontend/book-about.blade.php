@extends('layouts.index')
@section('index')
<main role="main">
    <section class="singleBook_section p-1 w-100">
        <div class="center">
            <div class="book_inner d-flex justify-content-between ">
                <div class="book_image">
                    <img src="{{isset($book->img_front) ? $book->img_front : $book->img_audio}}" alt="single_book_image">
                </div>
                <div class="book_description d-flex flex-column justify-content-between ">

                    <div class="w-100" id="js-append-data">
                        <h2 class="book_name">{{$book->title}} </h2>
                        <div class="book_subtitle w-100 d-flex justify-content-between ">
                            <div class="rating_container d-flex justify-content-between align-items-center">
                                <div class="Stars" style="--rating:  {{$star->su>0 ? round($star->su/$star->dd,2) : 0}}"
                                     aria-label="Rating of this product is 2.3 out of 5.">
                                </div>
                                <span class="rating_count">
                                        {{$star->su>0 ? round($star->su/$star->dd,2) : 0}}
                                    </span>
                                <span class="book_review">
                                        {{$book->see}} @lang('book-about.review')
                                    </span>

                                <span class="book_like">
                                        {{$book->like}} @lang('book-about.like')
                                    </span>
                            </div>
                            <div class="sosial_networks_container d-flex  ">
                                <a href="javascript:void(0)" class="sosial_item facebook_item ">
                                    <i class="fab fa-facebook-f"></i> <span> facebook</span>
                                </a>
                                <a href="javascript:void(0)" class="sosial_item  twitter_item">
                                    <i class="fab fa-twitter"></i> <span> twitter</span>
                                </a>
                                <a href="javascript:void(0)" class="sosial_item whatsapp_item">
                                    <i class="fab fa-whatsapp"></i> <span> whatsapp</span>
                                </a>
                                <a href="javascript:void(0)"
                                   class="sosial_item mail_item d-flex justify-content-around ">
                                    <i class="far fa-envelope"></i> <span> email</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="rateus_container mt-2  mb-2  w-100">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            @lang('book-about.rate')
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-capitalize " id="staticBackdropLabel">@lang('book-about.rate')</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-evenly">
                                        <div class="star-rating" id="js-book-id" data-id="{{$book->id}}">
                                            <input class="js-star" type="radio" id="1-stars" name="rating" value="5" />
                                            <label for="1-stars" class="star">&#9733;</label>
                                            <input class="js-star" type="radio" id="2-stars" name="rating" value="4" />
                                            <label for="2-stars" class="star">&#9733;</label>
                                            <input class="js-star" type="radio" id="3-stars" name="rating" value="3" />
                                            <label for="3-stars" class="star">&#9733;</label>
                                            <input class="js-star" type="radio" id="4-stars" name="rating" value="2" />
                                            <label for="4-stars" class="star">&#9733;</label>
                                            <input class="js-star" type="radio" id="5-star" name="rating" value="1" />
                                            <label for="5-star" class="star">&#9733;</label>

                                            <input type="hidden" id="user-star" value="{{$userStar->score ?? false}}">
                                        </div>
                                        <button data-id="{{$book->id}}" class="btn-primary js-like-book" type="button" >
                                            <span><i class="far fa-thumbs-up"></i></span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="book_description  card w-100 mt-2 p-3 " >
                        <p style="white-space: pre-wrap;">
                       {!! $book->content !!}
                        </p>
                    </div>


                    <div class="w-100">
                        <div class="about_author d-flex justify-content-between ">

                            <div class="author d-flex  ">

                                <div class="author_image">
                                    <img src="{{$book->author_img}}" alt="author_image">
                                </div>

                                <div class="d-flex flex-column mx-1  ">
                                    <span class="author_excerpt">@lang('book-about.writtenBy') </span>
                                    <h4 class="book_author_name">{{$book->author_name}}</h4>
                                </div>

                            </div>

                            <div class="publisher_name">
                                <span class="author_excerpt">@lang('book-about.publisher')</span>
                                <h4 class="book_author_name">{{$book->seller_name}}</h4>
                            </div>

                            <div class="book_year">
                                <span class="author_excerpt">@lang('book-about.year')</span>
                                <h4 class="book_author_name">{{$book->year}}</h4>
                            </div>

                        </div>
                        <div class="book_price_container d-flex justify-content-between">
                        @if($audio==false && ($html==false || $epub==false))
                            <!-- display : none -->
                            <div class="book_price  ">
                                @if($book->free==1)
                                <h2 class="sigle_book_new_price"> @lang('index.free') </h2>
                                @else
                                    @if($discount==null)
                                    @if(is_null($book->discount))
                                        <h2 class="single_book_new_price"> $ {{$book->price}} </h2>
                                    @else
                                        <h2 class="single_book_new_price"> $ {{$book->discount}} </h2>
                                        <span class="single_book_old_price">
                                        <del>$ {{$book->price}}</del>
                                    </span>
                                        <span class="discount_percent">
                                        {{(new \App\Helper\index())->interest($book->price,$book->discount)}}
                                    </span>
                                    @endif
                                    @endif
                                    @endif
                            </div>
                            <div class="book_price_btns">
                                <a class="add_to_cart" href="javascript:void(0)" data-id="{{$book->id}}" id="js-add-cart">
                                    <img src="/./assets/css/logo/basket.svg" alt="basket_image"> @lang('book-about.addToCart')
                                </a>
                                @if($discount==null)
                                <a class="buy_btn " href="javascript:void(0)">
                                    <img src="/./assets/css/logo/book_icon.svg" alt="book_image" class="mx-1"> @lang('book-about.buy')
                                </a>
                                @else
                                <a class="now_buy_btn " href="javascript:void(0)">
                                    @lang('book-about.buy')  {{$book->price}} $
                                </a>
                                    @endif
                            </div>
                            @endif
                            @if(!is_null($html) || !is_null($epub))
                            <div class="book_price_btns">
                            @if(!is_null($html))
                                    <a class="buy_btn" target="_blank" href="{{$html->file}}">
                                        <i class="fa fa-eye"></i>&nbsp;&nbsp; HTML
                                    </a>
                                @endif
                            @if(!is_null($epub))
                                    <a class="buy_btn" download href="{{$epub->file}}">
                                        <i class="fa fa-download"></i>&nbsp;&nbsp; Epub
                                    </a>
                                @endif
                            </div>
                            @endif
                            <!-- display :flex -->
                            @if(!is_null($audio) && count($audio)>0)
                            <div class="audioDropDownBtn_container" >
                                <a  class="audioDropDownBtn"  data-bs-toggle="collapse" href="#audioDropD_collapse" role="button"
                                    aria-expanded="false" aria-controls="audioDropD_collapse"> Audios
                                    <span><i class="fas fa-angle-down"></i></span>
                                </a>
                                <div class="collapse multi-collapse" id="audioDropD_collapse">
                                    <div class="mobile_category_list_container p-0 ">
                                        <ul class="book_audio_list d-flex  flex-column ">
                                              @foreach($audio as $key)
                                            <li class="book_audio_item" >
                                                <div class="mb-2" >
                                                        <span class="audio_number" >
                                                            {{$key->file_row}}.
                                                        </span>

                                                    <span class="audio_title" >
                                                            <b>{{$key->title}}</b>
                                                        </span>
                                                </div>
                                                <audio controls class="w-100"  >
                                                    <source src="{{$key->file}}" type="audio/mp3">
                                                </audio>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="details_section p-1">
        <div class="center">
            <div class="details_in d-flex  justify-content-between ">
                <div class="details_left">
                    <h2>@lang('book-about.detailsOfBook')</h2>
                    <table class="bordered">
                        <tbody>
                        <tr>
                            <th><label>@lang('book-about.bookTitle')</label></th>
                            <td><label>{{$book->title}}</label></td>

                        </tr>
                        <tr>
                            <th><label>@lang('book-about.author')</label></th>
                            <td><label>{{$book->author_name}}</label></td>

                        </tr>
                        <tr>
                            <th><label>@lang('book-about.ISBN')</label></th>
                            <td><label>{{$book->id}}</label></td>

                        </tr>
                        <tr>
                            <th><label>@lang('book-about.editionLanguage')</label></th>
                            <td><label>{{$book->lang}}</label></td>

                        </tr>
                        <tr>
                            <th><label>@lang('book-about.bookFormat')</label></th>
                            <td><label>{{$book->pages}} pages</label></td>

                        </tr>
                        <tr>
                            <th><label>@lang('book-about.datePublished')</label></th>
                            <td><label>{{$book->year}}</label></td>

                        </tr>
                        <tr>
                            <th><label>@lang('book-about.publisher')</label></th>
                            <td><label>{{$book->seller_name}}</label></td>

                        </tr>
                        <tr>
                            <th><label>@lang('book-about.tags')</label></th>
                            <td class="tags"><label>
                                    @foreach(explode(',',$book->tags) as $key => $value)
                                    <span class="table_tags">{{$value}}</span>
                                    @endforeach
                                </label></td>

                        </tr>
                        </tbody>
                    </table>

                    <div class="book_comment w-100 ">
                        <form class="add_comment  d-flex align-items-center w-100 " >
                            <div class="input_container">
                                <textarea id="userComment" placeholder="@lang('book-about.comment')" ></textarea>
                            </div>
                            <button data-user="{{\Auth::user()->id ?? 0}}" data-book="{{$book->id}}" class="send_comment_btn" type="button">
                                <i class="fab fa-telegram-plane"></i>
                            </button>
                        </form>
                        <div id="appendComment">
                        <ul class="user_comments_list">
                            @foreach($comments as $key)
                            <li class="user_commrnt_list_item d-flex mt-5 js-delete-comment-{{$key->id}}" style="float: none;">
                                <div class="user_img" >
                                    <img src="{{$key->user_img}}" alt="{{$key->user_name}}">
                                </div>
                                <div class="user_comment_container" >
                                    <h4 class="user_name">{{$key->user_name}}
                                        <i data-id="{{$key->id}}" class="fa fa-trash text-danger p-2 js-delete-comment" style="cursor: pointer;"></i>
                                    </h4>
                                    <p class="user_comment_text" style="white-space: pre-line;">
                                        {{$key->comment}}
                                    </p>
                                </div>

                            </li>
                            @endforeach
                        </ul>
                        </div>
                    </div>


                </div>
                <div class="details_right  ">
                    <h2> @lang('book-about.relatedBooks') </h2>
                    <div class="related_in">
                         @foreach($thisSimilar as $key)
                        <div class="related_item d-flex justify-content-between ">
                            <div class="related_item_img">
                                <a href="{{route('book',(new \App\Models\Books())->slug($key->id))}}">
                                <img src="{{$key->img_front==null ? $key->img_audio : $key->img_front}}"  alt="{{$key->title}}">
                                </a>
                            </div>

                            <div class="related_item_text">
                                <a class="related_item_title" href="{{route('book',(new \App\Models\Books())->slug($key->id))}}">{{$key->title}}</a>
                                <div class="item_category mb-2 d-flex flex-wrap ">
                                    @foreach((new \App\Models\Books())->single_book_categorys($key->id) as $key2)
                                    <span>{{$key2->category_name}}</span>&nbsp;
                                    @endforeach
                                </div>
                                <div class="item_imdb d-flex flex-column justify-content-between ">
                                    <div class="mb-2">
                                    <span class="imdb_count"><i class="fas fa-star"></i> <span>{{(new \App\Models\Books())->star($key->id)}}</span></span>
                                    <span class="item_rewiev"> {{$key->see}} @lang('book-about.review') </span>
                                    </div>
                                    <div class="item_price">
                                        @if($key->free==1)
                                            <span class="new_price"> @lang('index.free') </span>
                                        @else
                                            @if($key->discount!=null)
                                                <span class="new_price"> $ {{$key->discount}} </span>
                                                <span class="old_price"> <del>$ {{$key->price}}</del> </span>
                                            @else
                                                <span class="new_price"> $ {{$key->price}} </span>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new_books_section p-1 w-100 ">
        <div class="center">
            <x-random-books/>
        </div>
    </section>
    <x-subscribe/>
</main>
@endsection
