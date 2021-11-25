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
            var search=$(this).val();
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
});

