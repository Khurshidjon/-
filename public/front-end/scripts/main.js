
$(document).ready(function(){
    
// ----------------------------------------------------------------------home_page_sub_slider
    $('.sub_slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        navText: ['', ''],
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2
            },
            800:{
              items:2
            },
            900:{
              items:3
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            }
        }
    })
// ----------------------------------------------------------------------home_page_sub_slider End
    
// ----------------------------------------------------------------------home second slider
    $('.home_second_slider').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        navText: ['', ''],
        dots: true,
        responsive:{
            0:{
                items:1
            },
            671:{
                items:2
            },
            800:{
                items:3
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            },
        }
    })
// ----------------------------------------------------------------------home slider end

// ----------------------------------------------------------------------home third_slider
  $('.home_third_slider').owlCarousel({
          loop:true,
          margin:50,
          nav:true,
          navText: ['', ''],
          dots: true,
          responsive:{
              0:{
                  items:2
              },
              900:{
                  items:3
              },
              1200:{
                  items:4
              }
          }
      })
  });
// ----------------------------------------------------------------------home third_slider end





// --------------------- slider Banner-------------------------------

  $(document).ready(function() {

     $('.slidBanner').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      draggable: true,
      fade: false,
      speed: 1000,
    });

  });

// --------------------- slider_metrology-------------------------------

  $(document).ready(function() {

     var slider = $('.slider_metrology .items').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: true,
      arrows: true,
      draggable: true,
      fade: false,
      speed: 1000,
      prevArrow: $(document).find('.slider_metrology .left'),
      nextArrow: $(document).find('.slider_metrology .right'),
      responsive: [
         {
           breakpoint: 700,
           settings: {
             slidesToShow:2,
             slidesToScroll:1,
           }
         },
         {
           breakpoint: 550,
           settings: {
             slidesToShow:1,
             slidesToScroll:1,
           }
         },
       ],
      });

     $('.slider_metrology .items .slick-dots')
      .append('<div class="right"><img src="../media/img/svg/next.svg" alt="" /></div>')
      .prepend('<div class="left"><img src="../media/img/svg/back.svg" alt="" /></div>')

      $(document).on('click', '.slider_metrology .left', function(){
        slider.slick('slickPrev');
      })

      $(document).on('click', '.slider_metrology .right', function(){
        slider.slick('slickNext');
      });
  });

// --------------------- home Page slider4-------------------------------
  $(document).ready(function() {

     $('.homePageSlid4 .slidItems').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      dots: true,
      arrows: true,
      draggable: true,
      fade: false,
      speed: 1000,
      prevArrow: $('.homePageSlid4 .leftArr'),
      nextArrow: $('.homePageSlid4 .rightArr'),
      responsive: [
         {
           breakpoint: 1400,
           settings: {
             slidesToShow:4,
             slidesToScroll:1,
           }
         },
         {
           breakpoint: 1100,
           settings: {
             slidesToShow: 3,
             slidesToScroll:1,
            
           }
         },
         {
           breakpoint: 800,
           settings: {
             slidesToShow: 2,
             slidesToScroll:1,
            
           }
         },
         {
           breakpoint: 550,
           settings: {
             slidesToShow: 1,
             slidesToScroll:1,
            
           }
         }
       ],
    });

  });

  $('body').on("click", ".homePageSlid4 .leftArrow", function(){
     $('.homePageSlid4 .leftArr').click();
  });
  $('body').on("click", ".homePageSlid4 .rightArrow", function(){
     $('.homePageSlid4 .rightArr').click();
  });


  $(window).on("load", function(){
    $('.homePageSlid4 .slick-dots').append("<div class='leftArrow'><img src='https://login.standart.uz/front-end/media/img/svg/back.svg' alt='' /></div>")
    $('.homePageSlid4 .slick-dots').append("<div class='rightArrow'><img src='https://login.standart.uz/front-end/media/img/svg/next.svg' alt='' /></div>")
  });


//-------------------------chart1------------------------------------
  if($('.chart_1').length > 0) {

    var data1 = {
      labels: ["USA", "China", "Japan", "Germany", "UK", "France", "India", "Spain", "Netherlands", "Russia", "South Korea", "Canada", "Brazil"],
      datasets: [{
        label: "",
        backgroundColor: "rgba(27,163,224,0.6)",
        borderColor: "rgba(255,99,132,1)",
        borderWidth: 0,
        hoverBackgroundColor: "rgba(27,163,224,0.8)",
        hoverBorderColor: "rgba(255,99,132,1)",
        data: [2020, 1850, 1810, 1300, 1150, 1150, 1000, 760, 730, 590, 450, 450, 380],
      }]
    };

    var option1 = {
      scales: {
        yAxes: [{
          stacked: false,
          gridLines: {
            display: true,
            color: "rgba(27,163,224,0.2)"
          }
        }],
        xAxes: [{
          gridLines: {
            display: false,
          }
        }]
      }
    };

    Chart.Bar('chart_1', {
      options: option1,
      data: data1
    });

  }

//-------------------------chart2------------------------------------
  if($('.chart_2').length > 0) {

  var data2 = {
    labels: ["USA", "China", "Japan", "Germany", "UK", "France", "India", "Spain", "Netherlands", "Russia", "South Korea", "Canada", "Brazil"],
    datasets: [{
      label: "",
      backgroundColor: "rgba(239,214,67,0.6)",
      borderColor: "rgba(255,99,132,1)",
      borderWidth: 0,
      hoverBackgroundColor: "rgba(239,214,67,0.8)",
      hoverBorderColor: "rgba(255,99,132,1)",
      data: [2020, 1850, 1810, 1300, 1150, 1150, 1000, 760, 730, 590, 450, 450, 380],
    }]
  };

  var option2 = {
    scales: {
      yAxes: [{
        stacked: false,
        gridLines: {
          display: true,
          color: "rgba(187,160,5,0.2)"
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
        }
      }]
    }
  };

  Chart.Bar('chart_2', {
    options: option2,
    data: data2
  });

  }
//-------------------------chart3------------------------------------
  if($('.chart_3').length > 0) {

  var data3 = {
    labels: ["USA", "China", "Japan", "Germany", "UK", "France", "India", "Spain", "Netherlands", "Russia", "South Korea", "Canada", "Brazil"],
    datasets: [{
      label: "",
      backgroundColor: "rgba(59,228,103,0.6)",
      borderColor: "rgba(255,99,132,1)",
      borderWidth: 0,
      hoverBackgroundColor: "rgba(59,228,103,0.8)",
      hoverBorderColor: "rgba(255,99,132,1)",
      data: [2020, 1850, 1810, 1300, 1150, 1150, 1000, 760, 730, 590, 450, 450, 380],
    }]
  };

  var option3 = {
    scales: {
      yAxes: [{
        stacked: false,
        gridLines: {
          display: true,
          color: "rgba(91,187,5,0.2)"
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
        }
      }]
    }
  };

  Chart.Bar('chart_3', {
    options: option3,
    data: data3
  });

  }
//-------------------------chart4------------------------------------
  if($('.chart_4').length > 0) {

  new Chart(document.getElementById("chart_4"), {
    type: 'line',
    data: {
      labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
      datasets: [{ 
          data: [86,1000,106,106,107,111,133,221,783,2478],
          label: "",
          backgroundColor: "#3e95cd",
          borderColor: "#3e95cd",
          lineTension: 0,
          fill: false
        }, 
      ]
    },
    options: {
      title: {
        display: true,
      }
    }
  });

  }

  if($('.chart_5').length > 0) {

  new Chart(document.getElementById("chart_5"), {
    type: 'line',
    data: {
      labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
      datasets: [{ 
          data: [86,1000,106,106,107,111,133,221,783,2478],
          label: "",
          backgroundColor: "#999999",
          borderColor: "#999999",
          lineTension: 0,
          fill: false
        }, 
      ]
    },
    options: {
      title: {
        display: true,
      }
    }
  });

  }

// --------------------- slider chart-------------------------------

  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    draggable: false,
    fade: true,
    asNavFor: '.slider-nav',
  });
  $('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
       responsive: [
         {
           breakpoint: 1200,
           settings: {
             slidesToShow:3,
             slidesToScroll:1,
           }
         },
         {
           breakpoint: 770,
           settings: {
             slidesToShow: 2,
            
           }
         },
         {
           breakpoint: 500,
           settings: {
             slidesToShow: 1,
            
           }
         }
       ],
  });

// --------------------- slider history-------------------------------

  $('.slider-bottom').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-top',
    
  });
  $('.slider-top').slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    asNavFor: '.slider-bottom',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
      responsive: [
         {
           breakpoint: 800,
           settings: {
             slidesToShow:6,
             slidesToScroll:2,
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 4,
            
           }
         },
         {
           breakpoint: 400,
           settings: {
             slidesToShow: 3,
            
           }
         }
       ],
       
  });


//--------------------------menuBar---------------------------------------------
 $(document).ready(function(){
  $('.menubar').click(function(){
    $('header .main_menu .mainMenu').fadeToggle();
  });


  $('.left_G a').click(function(e){
    e.preventDefault();
  });

});

if(window.matchMedia('(max-width: 1060px)').matches)
{
  $('.nav-item').on("click", function(e){
    e.preventDefault();
    $(this).next().slideToggle();
  });
}
    
if(window.matchMedia('(max-width: 900px)').matches)
{
  $('.left_G .arrow').click(function(e){
    e.preventDefault();
    $(this).parent().parent().parent().toggleClass('active');
    $('.overlayWidgets').fadeToggle();
  });

  $('.overlayWidgets').click(function(){
    $('.left_G').removeClass('active');
    $(this).fadeOut();
  });
}

 $(function() {  
  $('.btn-6')
    .on('mouseenter', function(e) {
      var parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
      $(this).find('span').css({top:relY, left:relX})
    })
    .on('mouseout', function(e) {
      var parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
      $(this).find('span').css({top:relY, left:relX})
    });
});



$('.category_down_btn').click(function(e){
  e.preventDefault();
  $(this).toggleClass('rotate');
  $('#FAQ .left_block .search .dropdown').toggleClass('category_down_btn_open');
});


// -------------------------------------------------------AIR DATEPICKER
if($('.dtpAir').length != 0) {

  $('.dtpAir').datepicker({
    autoClose: true,
  });

  $('.dtpAir').datepicker().data('datepicker').selectDate(new Date());

  $('.dtpAirr').datepicker({
    autoClose: true,
  });

  $('.dtpAirr').datepicker().data('datepicker').selectDate(new Date());
}


 // -------------------------------------------------------TAB_leadership_page
$('.tab_passport_1 .tab-nav a').click(function(e) {
    e.preventDefault();

    $(this).parent().find('a').removeClass('active');
    $(this).addClass('active');

    var tab_id = $(this).attr('data-tab');

    $(this).parent().next().find('.tab-pane').fadeOut(300).removeClass('active');
    setTimeout(function(){
      $("#"+tab_id).fadeIn(300).addClass('active');
    }, 300);
});

$('.tab_passport_1 .load_more').click(function(e) {
  e.preventDefault();

  $(this).parent().find('.active').toggleClass('load_more_content');
  $(this).find('.overlay').fadeToggle();
  $(this).find('.overlay1').fadeToggle();
});



 // -------------------------------------------------------TAB_apparat_page
$('#apparat .tab-nav a').click(function(e) {
      e.preventDefault();
  
      _this = $(this);

      if(_this.hasClass('active')) {

        $(this).removeClass('active');

        $('#apparat .tab-content .tab-pane').fadeOut(300);
      } else {
        $('#apparat .tab-nav a').removeClass('active');

            $(this).addClass('active');

            var tab_id = $(this).attr('data-tab');

            $('#apparat .tab-content .tab-pane').fadeOut(300);

            setTimeout(function(){
              $("#"+tab_id).fadeIn(300);
            }, 300);
      }
      
});


// -------------------------------------------------------laws_page - download -dropdown

 $(document).ready(function(){
  $('.download .down').click(function(){
    $(this).next().fadeToggle();
  });
});


// -------------------------------------------------------video_blog - social

$(document).ready(function(){
  $('#video_blog .wrap .share').click(function(){
    $(this).parent().find('.social').slideToggle();
  });
});



$(document).ready(function(){
  $('.left_G').hover(function(){
    if($(this).hasClass('actHeight')) {
      $(this).toggleClass('actHeight');
      setTimeout(actWidth, 500);
    } else {
      $(this).toggleClass('actWidth');
      setTimeout(actHeight, 500);
    }
  });
});




function actHeight() {
  $('.left_G').toggleClass('actHeight');
}

function actWidth() {
  $('.left_G').toggleClass('actWidth');
}


$(document).ready(function(){
  $('.left_G .scroll .wrap_0').click(function(){
    var parentLeftG = $(this).parent().parent();
      parentLeftG.removeClass('actHeight');
      parentLeftG.removeClass('actWidth');

    if(parentLeftG.hasClass('openHeight')) {
      parentLeftG.toggleClass('openHeight');
      setTimeout(openWidth, 500);
    } else {
      parentLeftG.toggleClass('openWidth');
      setTimeout(openHeight, 500);
    }

    // parentLeftG.removeClass('actHeight');
    // parentLeftG.removeClass('actWidth');
    
  });

});
 
function openHeight() {
  $('.left_G').toggleClass('openHeight');
}

function openWidth() {
  $('.left_G').toggleClass('openWidth');
}




// -------------------------------------------------------COUNTER

if($('.counter').length > 0) {

$(document).ready(function(){
    $('.benefits__number').spincrement({
        thousandSeparator: "",
        duration: 1200
    });
});

$(document).ready(function () {
 
    var show = true;
    var countbox = ".static";
    $(window).on("scroll load resize", function () {
        if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
        var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
        var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
        var w_height = $(window).height(); // Высота окна браузера
        var d_height = $(document).height(); // Высота всего документа
        var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
        if (w_top + 700 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
            $('.counter').css('opacity', '1');
            $('.counter').spincrement({
                thousandSeparator: "",
                duration: 3200
            });
             
            show = false;
        }
    });
 
});
}




/* validate form */
$('.validate-form input').blur(function(){
  _this = $(this);
  type = $(this).attr('type');
  valLength = $(this).val().length;

  if(type == 'text'){
    if(_this.val() == '' || valLength < 3){
      _this.addClass('invalid empty');
    } else {_this.removeClass('invalid empty');}
  }
  if(type == 'number') {
    if(_this.val() == '' || valLength < 3){
      _this.addClass('invalid empty');
    } else {_this.removeClass('invalid empty');}
  }
  if(type == 'email') {
    if(isValidEmailAddress(_this.val())) {
      _this.removeClass('invalid empty');
    } else {_this.addClass('invalid empty');}
  }
  
  function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
  }
});

$('.validate-form').submit(function(e){
  var _this = $(this);
  var emptyCount = $(this).find('.empty');
  if(emptyCount != 0) {
    emptyCount.addClass('invalid');
    e.preventDefault();
  } else {
    emptyCount.removeClass('invalid');
    return;
  }
});



$(".chosenSelect").chosen();




$(".js-video-button").modalVideo({
  youtube:{
    controls:1,
    nocookie: true,
    autoplay: 1
  }
});

$(document).ready(function () {
   $('.sub_slider_btn').click(function (e) {
       e.preventDefault();
     $(this).parent().find('.sub_slider').toggleClass('show-more');
   });
});
