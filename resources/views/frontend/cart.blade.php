@extends('layouts.index')
@section('index')
    <main class="w-100" role="main">

        <section class="cart_body_section p-1">
            <div class="center">
                <div class="cart_body">
                    <table class="my_table">
                        <thead>
                        <tr>
                            <th>@lang('cart.item')</th>
                            <th>@lang('cart.bookLanguage')</th>
                            <th>@lang('cart.price')</th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($data as $key)
                        <tr class="js-delete-cart-{{$key->id}}">
                            <td class="d-flex align-items-center ">
                                <div class="cart_book_img">
                                    <img src="{{isset($key->img_front) ? $key->img_front : $key->img_audio}}" alt="{{$key->title}}">
                                </div>
                                <div class="cart_book_about">
                                    <a class="cart_book_name" href="{{route('book',(new \App\Models\Books())->slug($key->id))}}">
                                        <h3>{{$key->title}}</h3>
                                    </a>
                                    <span class="cart_book_author">
                                               {{$key->author}}
                                    </span>
                                </div>
                            </td>
                            <td>
                                <h4 class="cart_book_lang"> {{$key->lang}} </h4>
                            </td>
                            <td>
                              <span class="cart_book_price">
                                  @if($key->free==1)
                                      <span>@lang('index.free')</span>
                                  @else
                                            $ <span>{{$key->price}}</span>
                                      @endif
                              </span>
                                <button class="remove_cart_item js-delete-cart" data-id="{{$key->id}}" type="button">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                       @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <div  class="price_tr w-100  d-flex justify-content-between ">
                                    <span class="total_price_title">  @lang('cart.total') </span>
                                    <span class="total_price_count">
                                                $ <span id="js-append-total">{{$total}}</span>
                                            </span>
                                </div>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <a href="{{route('payment')}}">
                                <button class="place_order w-100 " type="button">
                                    @lang('cart.placeOrder')
                                </button>
                                </a>
                            </td>
                            <td></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>

        <x-subscribe/>

    </main>
@endsection
