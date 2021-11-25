$(document).ready(function(){

    /*headere active classi elave etmek */

    $('.nav_list_item  a').on('click',function(){
        var l =  $('.navbar_list li ').length;

        for(var i = 0 ; i <=l ;i++){
            if( $(`.navbar_list li:nth-child(${i}) a `).hasClass('my_active')){

                $(`.navbar_list li:nth-child(${i}) a `).removeClass('my_active');
            }
        }
        $(this).addClass('my_active');

    })

    /* mobil menunu acmaq cun js */


    $('.open_mobile_menu').on('click',function(){

        $('.mobile_header').css({'display':'block'});
        $('body').css( {'overflowY':'hidden'} );

        setTimeout( function (){
            $('.mobile_header').css({
                'transform':'translateX(0%)'
            })
        } , 100 )


    });


    $('.mobile_header').on('click',function(e){

        if( !$(e.target).is('.mobile_header_in') && !$(e.target).is('.mobile_header_in *')  && !$(e.target).is('.open_mobile_menu') ){

            $('.mobile_header').css({
                'transform':'translateX(-100%)'
            })

            setTimeout( function (){
                $('.mobile_header').css({'display':'none'});
                $('body').css( {'overflowY':'auto'} );
            } , 400 )


        }
    });
    /* window resize zamani mobil menu itmesi */

    $(window).resize(()=>{
        $('.mobile_header').css({
            'transform':'translateX(-100%)'
        })
        $('.mobile_header').css({'display':'none'});
        $('body').css( {'overflowY':'auto'} );

    })

    /* Desktop category  */

    $('.desktop_category_btn').on('click',function(){
        $(this).siblings('.desktop_category_list').toggleClass('my_show');
        $(this).find('i').toggleClass('my_rotate');
    });

    $('.mobile_category_btn').on('click',function(){
        $(this).find('span').toggleClass('my_rotate');

    })

    /* desktop lang menu */

    $('#lang_menu_btn').on('click',function(){
        $(this).find('span').toggleClass('my_rotate');
        $(this).siblings('.lang_list').toggleClass('my_show');
    });


    $('#lang_list  li ').on('click',function(e){

        const selectedLang =  $(this).find('a').html();
        $('#lang_menu_btn  p').html(selectedLang);
        $(e.target).parents('#lang_list').toggleClass('my_show');
        $(e.target).parents('.lang_menu').find('span').toggleClass('my_rotate');

    });


    /* mobil lang menu */

    $('#mobile_lang_menu_btn').on('click',function(){
        $(this).find('span').toggleClass('my_rotate');
        $(this).siblings('.lang_list').toggleClass('my_show');
    });


    $('#mobile_lang_list  li').on('click',function(e){
        var selectedLang =  $(this).find('a').html();
        $('#mobile_lang_menu_btn  p').html(selectedLang);
        $(e.target).parents('.lang_list').toggleClass('my_show');
        $(e.target).parents('.lang_menu').find('span').toggleClass('my_rotate');

    });

    /* Desktop search block */



    $('*').on('click',function(e){
        if( !$(e.target).is('#desktop_result') && !$(e.target).is('#desktop_result *')){
            $('#desktop_result').css({'display':'none'});
        }
    });

    /*mobile search block */

    $('#mobileSearch').on('keyup',function(){

        if($(this).val().length>0){

            $('#mobileResult').css({'display':'flex'});
        }

        else{
            $('#mobileResult').css({'display':'none'});
        }
    });

    $('*').on('click',function(e){
        if( !$(e.target).is('#mobileResult') && !$(e.target).is('#mobileResult *')){
            $('#mobileResult').css({'display':'none'});
        }
    });





});
