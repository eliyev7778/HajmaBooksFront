$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$( document ).ready(function() {
    $('.js-first-special-active').first().addClass('active');
    $('.js-first-best-sold-active').first().addClass('active');
    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }
    $('.confirm_login').on('click',function () {
       var email=$('#login_email').val();
       var pass=$('#login_pass').val();

        var errEmail=$('#errEmail').val();
        var errPass=$('#errPass').val();
        var errLogin=$('#errLogin').val();

        if(IsEmail(email)===false){
            alertify.error(errEmail);
        }else if(pass.trim()==""){
            alertify.error(errPass);
        }else{
            $.ajax({
                type:'post',
                url:"/post-login",
                data:{email:email,pass:pass},
                success:function(e){
                    if (e==true){
                        window.location.href = "";
                    }else{
                        alertify.error(e);
                    }
                }
            });
        }
    });
    $('.confirm_register').on('click',function () {
        var email=$('#login_email').val();
        var pass=$('#login_pass').val();
        var name=$('#login_name').val();
        var surname=$('#login_surname').val();
        var confpass=$('#login_conf_pass').val();

        var errEmail=$('#errEmail').val();
        var errPass=$('#errPass').val();
        var errName=$('#errName').val();
        var errSurname=$('#errSurname').val();
        var errPassConf=$('#errPassConf').val();
        var readyEmail=$('#readyEmail').val();

        if(IsEmail(email)===false){
            alertify.error(errEmail);
        }else if(pass.trim()==""){
            alertify.error(errPass);
        }else if(name.trim()==""){
            alertify.error(errName);
        }else if(surname.trim()==""){
            alertify.error(errSurname);
        }else if(pass!=confpass){
            alertify.error(errPassConf);
        }else{
            $.ajax({
                type:'post',
                url:"/post-register",
                data:{email:email,pass:pass,name:name,surname:surname},
                success:function(e){
                    if (e==true){
                        location.reload();
                    }else{
                        alertify.error(readyEmail);
                    }
                }
            });
        }

    })

    $('#desktopSearch').on('keyup',function(){
        if($(this).val().length>0){
            const search = $(this).val();
            $('#desktop_result').css({'display':'flex'});
            $.ajax({
                type:'post',
                url:"/post-search",
                data:{search:search},
                success:function(e){
                    $("#desktop_result").html("");
                    $.each(e, function( index, value ) {
                        let img;
                        let price;
                        if(value.img_front==null){img = value.img_audio;}else{
                            img = value.img_front;}
                        if(value.discount==null){price = value.price;}else{
                            price = value.discount;}
                        $("#desktop_result").append(' <li>\n' +
                            '<img src="'+img+'">' +
                            '<b>' + value.book_name + '</b>' +
                            '<span>' + price +' $</span>\n' +
                            ' </li>')
                    });
                }
            });
        }

        else{
            $('#desktop_result').css({'display':'none'});
        }
    });

    $(".send_comment_btn").on('click',function () {
      const user=$(this).data('user');
      const book=$(this).data('book');
      const comment=$("#userComment").val();
        $.ajax({
            type:'post',
            url:"/post-comment",
            data:{user:user,book:book,comment:comment},
            success:function(e){
               if (e[0]==false){
                   alertify.error(e[1]);
               }else{
                   alertify.success(e[1]);
                   $("#appendComment").load(location.href + " #appendComment");
                   $("#userComment").val("");
               }
            }
        });
    })
    $(".js-delete-comment").on("click",function () {
       const id=$(this).data('id');
        $.ajax({
            type:'post',
            url:"/delete-comment",
            data:{id:id},
            success:function(e){
                alertify.success(e);
                $(".js-delete-comment-"+id).remove();
            }
        });
    });
    $(".js-like-book").on('click',function () {
        const id=$(this).data('id');
        $.ajax({
            type:'post',
            url:"/like-book",
            data:{id:id},
            success:function(e){
                if (e[0]==false){
                    alertify.error(e[1]);
                }else{
                    alertify.success(e[1]);
                    $("#js-append-data").load(location.href + " #js-append-data");
                }
            }
        });
    })
    $(".js-star").on("click",function () {
        const book_id = $("#js-book-id").data("id");
        const score=$(this).val();
        $.ajax({
            type:'post',
            url:"/star-book",
            data:{book_id:book_id,score:score},
            success:function(e){
                if (e[0]==false){
                    alertify.error(e[1]);
                }else{
                    alertify.success(e[1]);
                    $("#js-append-data").load(location.href + " #js-append-data");
                }
            }
        });

    })
    const userStar=$("#user-star").val();
    if ($.isNumeric(userStar)){
        $(".star-rating").find('input[value="'+userStar+'"]').prop('checked',true);
    }

    $("#js-add-cart").on('click',function () {
      const id=$(this).data("id");
        $.ajax({
            type:'post',
            url:"/add-cart",
            data:{id:id},
            success:function(e){
                if (e[0]==false){
                    alertify.error(e[1]);
                }else{
                    alertify.success(e[1]);
                }
            }
        });
    })
    $(".js-delete-cart").on('click',function () {
        const id=$(this).data("id");
        $.ajax({
            type:'post',
            url:"/delete-cart",
            data:{id:id},
            success:function(e){
                    alertify.success(e[1]);
                   $(".js-delete-cart-"+id).remove()
                  $("#js-append-total").load(location.href + " #js-append-total");
            }
        });
    })

    $('#userImage').on('change',function(e){
        const [file] = $(this).prop('files');
        var imageUrl =URL.createObjectURL(file);
        if (file) {
            $(this).siblings('label').find('img').attr('src',imageUrl);

        }
    })

    $('.js_showPassword').on('click',function(){
        $(this).siblings('input').attr('type','text');
        $(this).css({"display":"none"});
        $('.js_hidePassword').css({'display':'inline-block'});

    })

    $('.js_hidePassword').on('click',function(){
        $(this).siblings('input').attr('type','password');
        $(this).css({'display':'none'});
        $('.js_showPassword').css({'display':'inline-block'});
    })

});






