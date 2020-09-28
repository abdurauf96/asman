// codes for accordion

$('.jvectormap-region').click(function(e){
    e.preventDefault();
    var key=$(this).data('key');
    $(this).css("fill", '#414395');   
    $(this).siblings(".jvectormap-region").css("fill", '#ababab');
         
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'POST',
        url:'/getDilers',
        data: {key:key},
        success:function(data){
            $('#resDiller').fadeOut(500, function(){
                $('#resDiller').html(data).fadeIn().delay(1000);

            });
        }
    })
})


$('.sortPost').click(function(e){
    e.preventDefault()
    var key=$(this).data('key')
    
    $(this).addClass('filter-active')
    $(this).siblings().removeClass('filter-active')
   
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'POST',
        url:'/sortPost',
        data: {key:key},
        success:function(data){
            $('#resSortPosts').fadeOut(500, function(){
                $('#resSortPosts').html(data).fadeIn().delay(1000);

            });
        }
    })

})


$('.getConsult').click(function(e){
    e.preventDefault()
    $('.konsul').slideDown('600');
    
})

$('.sendConsult').click(function(e){
    e.preventDefault()
    var name=$(this).siblings('.name').val()
    var phone=$(this).siblings('.phone').val()
    if (!name) {
        $(this).siblings('.name').attr('placeholder', 'Заполните это поле...');
    }else if(!phone){
        $(this).siblings('.phone').attr('placeholder', 'Заполните это поле...');
    }else{
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:'/sendConsult',
            data: {name:name, phone:phone},
            success:function(data){
                //alert('message sent')
                $('.otprovlen').css('display', 'block');
                $('.konsul').slideUp('600'); 
            }
        })
    }
})

$('.konsul__exit').click(function(e){
    e.preventDefault()
    $('.konsul').slideUp('600');    
})



$('.getOtziv').click(function(e){
    e.preventDefault()
    $('.formotziv').slideDown('600');    
})
$('.diler__link').click(function(e){
    e.preventDefault()
    $('.newform').slideDown('600');    
})
$('.formotziv__exit').click(function(e){
    e.preventDefault()
    $('.formotziv').slideUp('600');    
})

$('.otprovlen__link').click(function(){
    $('.otprovlen').slideUp('600');
    $('.newform').slideUp('600');
})

$('.send_comment').click(function(e){
    e.preventDefault()
    var name=$('#name').val();
    var comment=$(this).siblings('#comment').val();
    if (!name) {
        $('#name').attr('placeholder', 'Заполните это поле...')
    }else if(!comment){
        $(this).siblings('#comment').attr('placeholder', 'Заполните это поле...')
    }else{
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'POST',
        url:'/sendComment',
        data: {name:name, comment:comment},
        success:function(data){
                $('.otprovlen').css('display', 'block');
                $('.formotziv').slideUp('600'); 
            }
        })
    }
})

$('.send_question').click(function(e){
    e.preventDefault()
    var name=$(this).siblings('.name').val();
    var msg=$(this).siblings('.msg').val();
    var email=$(this).siblings('.email').val();
    var phone=$(this).siblings('.phone').val();
    if (!msg) {
        $(this).siblings('.msg').attr('placeholder', 'Заполните это поле...')
    }else{
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'POST',
        url:'/sendQuestion',
        data: {name:name, msg:msg, phone:phone, email:email},
        success:function(data){
            $('.otprovlen').css('display', 'block');
            }
        })
    }
})





$("#accordion").accordion();

$(".faq__accordion--head span").removeClass("fa-plus");
    $(".ui-state-active span").addClass("fa-plus");
$(".faq__accordion--head").click(function(){
    $(".faq__accordion--head span").removeClass("fa-plus");
    $(".ui-state-active span").addClass("fa-plus");

});

// codes for slider 
$(".slider__ser").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: "<span class='chap'><i class='fa fa-angle-left'></i></span>",
    prevArrow: "<span class='ong'><i class='fa fa-angle-right'></i></span>",
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
});


$(".slider__otziv").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    nextArrow: "<span class='chap'><i class='fa fa-angle-left'></i></span>",
    prevArrow: "<span class='ong'><i class='fa fa-angle-right'></i></span>",
    responsive: [
      
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
  ]
});


// codes for karta
var teng = true; 
$(".fa-bars").click(function(){
    if(teng == true) {
        $(".burger_menu").css({
            'transform' : 'translateX(0%)',
        });
        $(this).addClass("fa-times");
        teng = false;
    }else{
        $(".burger_menu").css({
            'transform' : 'translateX(100%)',
        });
        $(this).removeClass("fa-times");
        teng = true;
    }
});

$(".sub_menu").click(function(e){
  
  if($(".burgeri__ul").is(":visible") == true ){
    $(".burgeri__ul").slideUp();
  }else{
    $(".burgeri__ul").slideUp();
    $(".burgeri__ul").slideDown();
  }
});

// codes for card 
$(".cards__link").click(function(e){

  if($(this).siblings("ul").is(":visible") == true ){
    $(this).siblings("ul").slideUp();
  }else{
    $(".cards__link").siblings("ul").slideUp();
    $(this).siblings("ul").slideDown();
  }
});

