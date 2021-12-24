@extends('layouts.index')
@section('index')
<main role="main"  class="w-100" >
    <section class="single_page_heading w-100">
        <div class="center" >
            <div class="singlehead_page_in d-flex flex-column align-items-center justify-content-center  w-100 " >
                <div class="heading_text d-flex  flex-column  h-100">
                    <h1>collection</h1>
                    <ul class="pass_list">
                        <li class="pass_list_item" >
                            <a href="./index.html">Home</a>
                        </li>

                        <li class="pass_list_item" >
                            <a href="javascript:void(0)">collection</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section   class="overlay_section  w-100 p-1">
        <div class="center" >
            <div class="collection_section_in d-flex  flex-wrap w-100">
               @foreach($data as $key)
                <div class="collection_item" >
                    <a href="javascript:void(0)">
                        <div class="my_container">
                            <img src="{{$key->img_vertical}}" alt="{{$key->name}}" class="image">
                            <div class="overlay">
                                <div class="text"> {{$key->name}} </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
