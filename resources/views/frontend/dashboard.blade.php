@extends('layouts.index')
@section('index')
<main class="w-100"  role="main" >
    <section class="dashboard_section p-1" >
        <div class="center">
            <div class="dashboard_body w-100" >

                <div class="profile_container d-flex align-items-center justify-content-between w-100">
                    <div class="profile_img" >
                        <img src="{{\Illuminate\Support\Facades\Auth::user()->img}}" alt="profil_image">
                    </div>

                    <div class="dashboard_book_count  d-flex justify-content-between align-items-center ">
                        <p>@lang('dashboard.hi'), {{\Illuminate\Support\Facades\Auth::user()->name}} </p>
                        <p> @lang('dashboard.youHave') <span class="dsashboard_count" >{{ count($myBook) ?? 0}}</span> @lang('dashboard.books') </p>
                    </div>
                </div>

                <div class="booksAndMenu d-flex">
                    <x-dashboard/>
                    <div class="dashboard_book_container d-flex  flex-wrap ">
                          @foreach($myBook as $key)
                        <div class="dashboard_book_item d-flex flex-column justify-content-center align-items-center ">
                            <div class="dashboard_book_item_img">
                                <a href="javascript:void(0)">
                                    <img src="{{isset($key->img_front) ? $key->img_front : $key->img_audio}}" alt="book_img">
                                </a>
                            </div>
                            <a  class="dashboard_book_title"  href="javascript:void(0)">
                                <h2>
                                    {{$key->title}}
                                </h2>
                            </a>
                            <div class="item_category mb-2 d-flex flex-wrap w-100">
                                @foreach((new \App\Models\Books())->single_book_categorys($key->id) as $key2)
                                    <span>{{$key2->category_name}}</span>&nbsp;
                                @endforeach
                            </div>
                            <a class="dashboar_item_btn d-flex justify-content-center align-items-center "  href="{{route('book',(new \App\Models\Books())->slug($key->id))}}">
                                <span> @lang('dashboard.readNow')</span>
                            </a>
                        </div>
                            @endforeach
                    </div>

                </div>

            </div>
        </div>
    </section>
</main>
@endsection
