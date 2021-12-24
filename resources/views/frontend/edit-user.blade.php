@extends('layouts.index')
@section('index')
    <main role="main" class="w-100">
        <section class="acount_details w-100 ">
            <div class="center">
                <div class="acount_details_in w-100 ">
                    <div class="acount_details_heading">
                        <h1>
                            @lang('dashboard.accountDetails')
                        </h1>
                    </div>
                    <div class="acount_details_main d-flex justify-content-between">

                        <x-dashboard/>

                        <div class="contact_information">
                            <h3> @lang('dashboard.contactInformation')</h3>
                            <form class="d-flex flex-wrap " action="{{route('editProfile')}}" method="post" enctype="multipart/form-data">
                                @CSRF
                                <div class="w-100 d-flex justify-content-center align-items-center ">
                                    <input type="file" name="image" id="userImage" accept="image/png,image/jpeg">
                                    <label for="userImage">
                                        <img src="{{\Auth::user()->img}}" alt="user_image">
                                    </label>
                                </div>
                                @php($name= explode(" ", \Auth::user()->name))
                                <div class="w-100 d-flex justify-content-between ">
                                    <input type="text" name="name" value="{{$name[0]}}">

                                    <input type="text" name="surname" value="{{$name[1] ?? ""}}">
                                </div>
                                <div class="w-100 d-flex justify-content-between">
                                    <input type="email" name="email" value="{{\Auth::user()->email}}">
                                </div>
                                <div class="w-100 d-flex justify-content-between ">
                                    <label for="userPassword">@lang('dashboard.changePassword'):</label>
                                    <div class="edit_passsword_container">
                                        <input class="w-100" id="userPassword" name="password" type="password" placeholder="Password">
                                        <span class="js_showPassword">
                                                <i class="fas fa-eye"></i>
                                            </span>
                                        <span class="js_hidePassword">
                                                <i class="fas fa-eye-slash"></i>
                                            </span>
                                    </div>
                                </div>
                                <button class="saveChangesButton w-100 " type="submit">
                                    @lang('dashboard.save')
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
