@extends('layouts.index')
@section('index')
    <script>
        function initMap() {
            var location = { lat: 40.39205, lng: 49.84106 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: location
            });

            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
<main role="main"  class="w-100"  >
    <section class="single_page_heading w-100">
        <div class="center" >
            <div class="singlehead_page_in d-flex flex-column align-items-center justify-content-center  w-100 " >
                <div class="heading_text d-flex  flex-column  h-100">
                    <h1>@lang('index.contact')</h1>
                    <ul class="pass_list">
                        <li class="pass_list_item" >
                            <a href="{{route('index')}}">@lang('index.home')</a>
                        </li>

                        <li class="pass_list_item" >
                            <a href="{{route('contact')}}">@lang('index.contact')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts_section mt-5 w-100 ">
        <div class="center">
            <div class="contacts_section_in w-100 p-1 d-flex  justify-content-between">
                <div class="contacts_section_item d-flex flex-column align-items-center justify-content-center ">
                            <span class="contact_item_logo map_logo">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                    <h3 class="contacts_title">
                        @lang('contact.address')
                    </h3>
                    <p class="contacts_text" >
                        {{$data->address}}
                    </p>
                </div>
                <div class="contacts_section_item d-flex flex-column align-items-center justify-content-center ">
                            <span class="contact_item_logo  phone_logo">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                    <h3 class="contacts_title">
                        @lang('contact.telephone')
                    </h3>
                    <a   href="#"   class="contacts_text" >
                        {{$data->tel}}
                    </a>
                </div>
                <div class="contacts_section_item d-flex flex-column align-items-center justify-content-center ">
                            <span class="contact_item_logo  mail_logo">
                                <i class="far fa-envelope"></i>
                            </span>
                    <h3 class="contacts_title">
                        @lang('contact.email')
                    </h3>
                    <a  href="#" class="contacts_text" >
                       {{$data->email}}
                    </a>
                </div>
            </div>

            <div class="map_container  w-100 mb-5 p-1  d-flex justify-content-between ">
                <div class="map" id="map">
                </div>

                <div class="form_container">
                    <h4> @lang('contact.sendFeedback')</h4>
                    <form action="{{route('send-offer')}}" method="post" enctype="multipart/form-data">
                        @CSRF
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label"> @lang('contact.yourName')</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> @lang('contact.emailAddress')</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputContent" class="form-label"> @lang('contact.content')</label>
                            <input type="text" name="contents" class="form-control" id="exampleInputContent">
                        </div>
                        <div class="mb-3">
                            <label for="floatingTextarea"> @lang('contact.Message')</label>
                            <textarea class="form-control"  name="message" id="floatingTextarea"></textarea>
                        </div>

                        <button  class="send_feedback" type="submit">
                            @lang('contact.send')
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</main>
@endsection
