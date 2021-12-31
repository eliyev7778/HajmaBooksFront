@extends('layouts.index')
@section('index')
<main role="main"  class="w-100" >
    <section class="authors_section ">
        <div class="center">
            <div class="author_section_in">

                <div class="search_author w-100  d-flex justify-content-between">

                    <h1 class="authors_page_title"> @lang('index.authors')</h1>

                    <div class="seacrch_author_input_container d-flex">
                        <input type="text"  placeholder="@lang('index.searchKeyword')" >
                        <button class="serch_author_btn" >
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="author_items_container  d-flex flex-wrap ">
                   @foreach($author as $key)
                    <div class="author_item d-flex flex-column align-items-center ">
                        <a href="{{route('author',$key->slug)}}"  class="author_item_img" >
                            <img src="{{$key->img}}" alt="{{$key->name}}">
                        </a>
                        <a href="{{route('author',$key->slug)}}">
                            {{$key->name}}
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</main>
@endsection
