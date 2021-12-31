@extends('layouts.index')
@section('index')
    <main role="main" class="w-100">
        <section class="filter_section w-100 p-1 ">
            <div class="center">
                <div class="filter_main d-flex justify-content-between ">
                    <div class="filter_left">
                        <h1> @lang('book.filterOption') </h1>
                        <form action="{{route('audio-books')}}" method="post" enctype="multipart/form-data">
                            @CSRF
                            <ul class="filter_list d-flex flex-column  w-100 ">
                                <li class="filter_item mb-3 ">
                                    <i class="fas fa-angle-down"></i>
                                    <select id="publisher_name" name="author" class="form-select" aria-label="Default select example">
                                        <option value="0">@lang('book.chooseAuthor')</option>
                                        @foreach($author as $key)
                                            <option value="{{$key->id}}">{{$key->author}}</option>
                                        @endforeach
                                    </select>
                                </li>

                                <li class="filter_item  mb-3 ">
                                    <i class="fas fa-angle-down"></i>
                                    <select id="year" name="year" class="form-select" aria-label="Default select example">
                                        <option value="0">@lang('book.selectYear')</option>
                                        @foreach($year as $key)
                                            <option value="{{$key->year}}">{{$key->year}}</option>
                                        @endforeach
                                    </select>
                                </li>

                                <li class="filter_item w-100  mb-3 ">

                                    <a class="filter_category_btn" data-bs-toggle="collapse"
                                       href="#multiCollapseExample1" role="button" aria-expanded="false"
                                       aria-controls="multiCollapseExample1">@lang('book.shopByCategory') <i
                                            class="fas fa-angle-down"></i> </a>
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">


                                        <div class="checkbox_container  w-100 d-flex  flex-wrap justify-content-between ">
                                            @foreach($category as $key)
                                                <div class="form-check">
                                                    <input class="form-check-input" value="{{$key->id}}" type="checkbox" name="category[]"
                                                           id="flexCheckChecked-{{$key->id}}">
                                                    <label class="form-check-label" for="flexCheckChecked-{{$key->id}}">
                                                        {{$key->category}}
                                                    </label>
                                                </div><br>
                                            @endforeach
                                        </div>


                                    </div>
                                </li>
                                <li class="filter_item w-100  mb-3 ">
                                    <button type="submit"
                                            class="refine_btn  d-flex justify-content-center align-items-center">
                                        @lang('book.refineSearch')
                                    </button>
                                </li>
                                <li class="filter_item w-100  mb-3 ">
                                    <a style="text-decoration: none;" href="{{route('audio-books')}}">
                                        <button type="button"
                                                class="reset_btn  d-flex justify-content-center align-items-center">
                                            @lang('book.resetFilter')
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="filter_right">
                        <div class="filter_right_in w-100  d-flex flex-wrap ">
                            @foreach($data as $key)
                                <div class="filter_book_item new_books_item ">
                                    <div class="new_books_image_container w-100">
                                        @if($key['books']->discount!=null)
                                            <span class="discount_percentage">
                               {{(new \App\Helper\index())->interest($key['books']->price,$key['books']->discount)}}
                            </span>
                                        @endif
                                        <a class="item_img" href="{{route('book',(new \App\Models\Books())->slug($key['books']->id))}}" target="_self">
                                            <img src="{{$key['books']->img_front==null ? $key['books']->img_audio : $key['books']->img_front}}" alt="new_books">
                                        </a>
                                    </div>
                                    <div class="book_item_bottom w-100 ">
                                        <a href="{{route('book',(new \App\Models\Books())->slug($key['books']->id))}}">
                                            <h5>{{$key['books']->book_name}}</h5>
                                        </a>
                                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                                            @foreach($key['category'] as $key2)
                                                <span class="book_type">{{$key2->categorys}}</span>
                                            @endforeach
                                        </div>
                                        <div class="imdb_container w-100 d-flex justify-content-between">
                                            <span class="imdb_count"><i class="fas fa-star"></i> <span>{{(new \App\Models\Books())->star($key['books']->id)}}</span></span>
                                            <div>
                                                @if($key['books']->free==1)
                                                    <span class="new_price"> @lang('index.free') </span>
                                                @else
                                                    @if($key['books']->discount!=null)
                                                        <span class="new_price"> $ {{$key['books']->discount}} </span>
                                                        <span class="old_price"> <del>$ {{$key['books']->price}}</del> </span>
                                                    @else
                                                        <span class="new_price"> $ {{$key['books']->price}} </span>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            {{ $list->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
