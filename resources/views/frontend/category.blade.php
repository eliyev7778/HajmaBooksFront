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
                        <a class="item_img" href="#" target="_self">
                            <img src="{{$key->img_front==null ? $key->img_audio : $key->img_front}}" alt="new_books">
                        </a>
                    </div>

                    <div class="book_item_bottom w-100 ">
                        <a href="#">
                            <h5>{{$key->book_name}}</h5>
                        </a>
                        <div class="book_type_contianer d-flex  flex-wrap  w-100">
                            @foreach((new \App\Models\Books())->single_book_categorys($key->id) as $key2 )
                            <span class="book_type">{{$key2->category_name}}</span>
                            @endforeach
                        </div>
                        <div class="imdb_container w-100 d-flex justify-content-between">
                            <span class="imdb_count"><i class="fas fa-star"></i> <span>4.7</span></span>
                            <div>
                                @if($key->discount!=null)
                                    <span class="new_price"> $ {{$key->discount}} </span>
                                    <span class="old_price"> <del>$ {{$key->price}}</del> </span>
                                @else
                                    <span class="new_price"> $ {{$key->price}} </span>
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

    <section class="statistica_section p-1 w-100" >
        <div class="center" >
            <div class="statistica_in d-flex ">
                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img" >
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="statistica_count" >
                        <h5>125,663</h5>
                    </div>
                    <p class="statistica_item_subtitle" >
                        Happy Customers
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img" >
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="statistica_count" >
                        <h5>45,663+</h5>
                    </div>
                    <p class="statistica_item_subtitle" >
                        Book Collections
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img" >
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="statistica_count" >
                        <h5>1.562</h5>
                    </div>
                    <p class="statistica_item_subtitle" >
                        Our Stores
                    </p>
                </div>

                <div class="statistica_item d-flex flex-column align-items-center justify-content-center ">
                    <div class="statistica_item_img" >
                        <img src="./assets/css/logo/feather.png" alt="">
                    </div>
                    <div class="statistica_count" >
                        <h5>457</h5>
                    </div>
                    <p class="statistica_item_subtitle" >
                        Famous Writers
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="subscribe_section  ">
        <div class="center" >
            <div class="subscribe_in w-100 d-flex align-items-center justify-content-center ">
                <div class="subscribe_in_main  d-flex  justify-content-between align-items-center  ">
                    <div class="subscirbe_text" >
                        <p>
                            Subscribe our newsletter for newest books updates
                        </p>
                    </div>
                    <div class="subscribe_inputs d-flex justify-content-between ">
                        <input type="text" required  placeholder="Type your email here " >
                        <button type="button"  class="subscribe_btn" >
                            subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
