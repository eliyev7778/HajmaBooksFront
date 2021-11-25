<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,minimal-ui" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@lang('login.title') - HajMa Book</title>
    <link rel="icon" href="./assets/css/logo/32x32.png.png">
    <link rel="stylesheet" href="./assets/css/style.css?">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    {{-- alertify --}}
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body>
<main role="main" class="w-100" >
    <section class="register_section w-100">
        <div class="register_container" >
            <div class="reister_in" >
                <h1 class="register_title" >HajMa Books</h1>
                <a  class="without_login"  href="{{route('index')}}">@lang('login.next')  <span><i class="fas fa-arrow-right"></i></span>  </a>
                <div class="buttons_container" >
                    <button id="register_login_btn"  class="register_login_btn active "  type="button">
                        @lang('login.login')
                    </button>

                    <button id="register_btn" class="register_btn">
                        @lang('login.signup')
                    </button>
                </div>

                <form class="form_contianer"  action="#" method="post"  enctype="multipart/form-data" >
                    <div class="form_text_container" >
                        <p> @lang('login.getEmail') </p>
                        <span></span>
                    </div>

                    <div class="name_input_contianer" >
                        <input type="text" id="login_name" placeholder="@lang('login.name') " >
                        <input type="text" id="login_surname" placeholder="@lang('login.surname')">
                    </div>

                    <div class="email_input_container"  >
                        <input type="email" id="login_email" placeholder="@lang('login.email')">
                    </div>

                    <div class="pasword_input_continer">
                        <input type="password" id="login_pass" placeholder="@lang('login.pass')">
                        <span class="show_password" ><i class="fas fa-eye"></i></span>
                        <span class="hide_password" ><i class="fas fa-eye-slash"></i></span>
                    </div>

                    <div class="pasword_confirm_input_continer">
                        <input type="password" id="login_conf_pass" placeholder="@lang('login.passConf') ">
                        <span class="show_password" ><i class="fas fa-eye"></i></span>
                        <span class="hide_password" ><i class="fas fa-eye-slash"></i></span>
                    </div>
{{--                    validate          --}}
                    <input type="hidden" id="errEmail" value="@lang('login.errEmail') ">
                    <input type="hidden" id="errPass" value="@lang('login.errPass') ">
                    <input type="hidden" id="errPassConf" value="@lang('login.errPassConf') ">
                    <input type="hidden" id="errName" value="@lang('login.errName') ">
                    <input type="hidden" id="errSurname" value="@lang('login.errSurname') ">
                    <input type="hidden" id="errLogin" value="@lang('login.errLogin') ">
                    <input type="hidden" id="readyEmail" value="@lang('login.readyEmail') ">

                    <div class="checkbox_input_container" >
                        <div class="form-check w-100">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" >
                                @lang('login.getInfo')<span class="rules_button"  >@lang('login.rules')
                                        </span>
                            </label>
                        </div>
                    </div>
                    <button class="confirm_login" type="button" >
                        @lang('login.login')
                    </button>

                    <button disabled  class="confirm_register" type="button" >
                        @lang('login.signup')
                    </button>

                    <a  class="forget_password"  href="./forgetPassword.html">
                        @lang('login.forgotPass')
                    </a>
                </form>
            </div>
        </div>
    </section>
</main>

<div class="rules_popup" >
    <div class="rules_text" >
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis explicabo sequi beatae laboriosam dolore iusto blanditiis quos, enim facilis esse nesciunt nisi laudantium ut tenetur quis assumenda obcaecati, at aperiam.
            Natus fuga tenetur repellendus? Deleniti deserunt odio impedit a eligendi quos nobis eaque tenetur commodi corrupti blanditiis enim laboriosam sit consequatur, ut exercitationem laudantium recusandae et fugit qui ipsum officia?
            Optio nulla, inventore nostrum tenetur repellat magni distinctio, cum voluptatem, dolorum pariatur obcaecati. Quae similique eos sequi libero asperiores eaque quasi, iure porro. Autem, accusamus? Officia libero porro inventore blanditiis.
            Molestiae facilis tenetur soluta vel, maxime commodi et animi dolores qui quisquam, voluptates deleniti, libero omnis eos nemo. Nesciunt dolor excepturi itaque tenetur beatae error hic commodi dignissimos inventore architecto.
            Aliquid, nostrum quasi architecto doloremque corrupti excepturi soluta dolore voluptates, consequuntur obcaecati, recusandae harum? Nostrum voluptatum temporibus odio, laboriosam ex quam repudiandae corporis dolore, aliquid quisquam quasi voluptatibus at commodi.
            Adipisci quis quasi eos quo reprehenderit magnam architecto illum, labore corrupti accusantium culpa harum praesentium delectus fugit necessitatibus ad iste, vitae deserunt corporis suscipit sit! Nemo deserunt vero libero blanditiis.
            Sit nisi, a minus dignissimos inventore reiciendis nesciunt voluptatem in voluptates, earum qui recusandae consequatur tempore molestias eaque accusamus expedita. Ex sapiente dolorum voluptates aut, impedit iste culpa inventore possimus!
            Neque maiores, deserunt dolor beatae reprehenderit, nemo molestiae possimus unde quidem quas nam earum consequatur dignissimos magnam minima error ratione molestias repellat ullam inventore maxime minus, omnis exercitationem libero! Laudantium!
            Laudantium placeat porro odit natus labore quidem excepturi iste alias, distinctio expedita corporis qui nisi adipisci, aut quis quasi fugit eveniet nesciunt! Dignissimos laboriosam quis minima ad amet beatae voluptatem?
            Pariatur tempora perferendis excepturi provident ex cupiditate, officia dignissimos laborum error nostrum, soluta dicta vero veniam ducimus cumque enim magni voluptatum? Accusamus quibusdam aliquid atque delectus dolore ut, error deserunt.
        </p>
    </div>
    <button class="rules_close_btn" >
        <span><i class="fas fa-times"></i></span>
    </button>
</div>

<!-- Jquery latest Version -->
<script src="./assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap  JavaScript CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
{{-- alertify --}}
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="/assets/js/main.js"></script>

<script>

    $('#register_btn').on('click',function(){
        $(this).addClass('active');
        $('#register_login_btn').removeClass('active');
        $('.form_text_container').css({"display":"flex"});
        $('.name_input_contianer').css({"display":"flex"});
        $('.pasword_confirm_input_continer').css({"display":"block"});
        $('.checkbox_input_container').css({"display":"block"});
        $('.confirm_login').css({"display":"none"});
        $('.confirm_register').css({"display":"block"});
        $('.forget_password').css({"display":"none"});

    });




    $('#flexCheckDefault').on('change',function(){

        if($(this).prop('checked')==true){

            $('.confirm_register').prop('disabled',false);
        }

        else{
            $('.confirm_register').prop('disabled',true);
        }
    });

    $('#register_login_btn').on('click',function(){
        $(this).addClass('active');
        $('#register_btn').removeClass('active');
        $('.form_text_container').css({"display":"none"});
        $('.name_input_contianer').css({"display":"none"});
        $('.pasword_confirm_input_continer').css({"display":"none"});
        $('.checkbox_input_container').css({"display":"none"});
        $('.confirm_login').css({"display":"block"});
        $('.confirm_register').css({"display":"none"});
        $('.forget_password').css({"display":"block"});


    });
    $('.show_password').on('click',function(){
        $(this).siblings('input').attr("type","text");
        $(this).css({"display":"none"});
        $(this).siblings('.hide_password').css({"display":"inline-block"});
    })
    $('.hide_password').on('click',function(){
        $(this).siblings('input').attr("type","password");
        $(this).css({"display":"none"});
        $(this).siblings('.show_password').css({"display":"inline-block"});
    })
    $('.rules_button').on('click',function(){
        $('.rules_popup').css({'display':'flex'});
    });
    $('.rules_close_btn').on('click',function(){
        $('.rules_popup').css({'display':'none'});
    });

</script>
@if(session()->has('success'))
    <script type="text/javascript">
        alertify.success('{{session('success')}}');
    </script>
@endif
@if(session()->has('error'))
    <script type="text/javascript">
        alertify.error('{{session('error')}}');
    </script>
@endif

{{-- Validation --}}
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <script type="text/javascript">
                alertify.error('{{ $error }}');
            </script>
        @endforeach
    </ul>
@endif
</body>
</html>
