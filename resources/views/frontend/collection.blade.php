@extends('layouts.index')
@section('index')
    <main role="main" class="w-100">

        <section class="new_books_section w-100 p-1">
            <div class="center">
                <div class="categoriy_section_title w-100 d-flex justify-content-between ">
                    <h2 style="font-size: 38px;" >{{$id->category}}</h2>
                </div>

                <div class="new_books_inner">
                    @foreach($data as $key)
                        <div class=" new_books_item ">
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
                {{ $books->links() }}
            </div>
        </section>

        <x-subscribe/>

    </main>
@endsection
