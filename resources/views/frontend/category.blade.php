@extends('layouts.index')
@section('index')
<main role="main" class="w-100">

    <section class="new_books_section w-100 p-1">
        <div class="center">
            <div class="categoriy_section_title w-100 d-flex justify-content-between ">
                <h2 style="font-size: 38px;" >{{$data[0]->category_name}}</h2>
            </div>

            <div class="new_books_inner">
                @foreach($data as $key)
                    <div class="new_books_item ">
                        <div class="new_books_image_container w-100">
                            @if($key->discount!=null)
                                <span class="discount_percentage">
                               {{(new \App\Helper\index())->interest($key->price,$key->discount)}}
                            </span>
                            @endif
                            <a class="item_img" href="{{route('book',(new \App\Models\Books())->slug($key->id))}}" target="_self">
                                <img src="{{$key->img_front==null ? $key->img_audio : $key->img_front}}" alt="new_books">
                            </a>
                        </div>
                        <div class="book_item_bottom w-100 ">
                            <a href="{{route('book',(new \App\Models\Books())->slug($key->id))}}">
                                <h5>{{$key->book_name}}</h5>
                            </a>
                            <div class="book_type_contianer d-flex  flex-wrap  w-100">
                                    <span class="book_type">{{$data[0]->category_name}}</span>
                            </div>
                            <div class="imdb_container w-100 d-flex justify-content-between">
                                <span class="imdb_count"><i class="fas fa-star"></i> <span>{{(new \App\Models\Books())->star($key->id)}}</span></span>
                                <div>
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
            {{ $data->links() }}
        </div>
    </section>

    <x-subscribe/>

</main>
@endsection
