$(document).ready(function(){

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


   $(window).resize(()=>{
         $('.mobile_header').css({
                'transform':'translateX(-100%)'
         })
         $('.mobile_header').css({'display':'none'});
         $('body').css( {'overflowY':'auto'} );

   })


  $('.desktop_category_btn').on('click',function(){
        $(this).siblings('.desktop_category_list').toggleClass('my_show');
        $(this).find('i').toggleClass('my_rotate');
  });

  $('.mobile_category_btn').on('click',function(){
      $(this).find('span').toggleClass('my_rotate');
      
  })

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


//   *****************************


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








});