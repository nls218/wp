$( document ).ready(function() {
  $('.simple-news-el').click( function () {
      id = $(this).attr('id');      
      $('#modal-'+id).show();
  }); 

  $('.search-img-icon1').click(function(){
    $(this).parent().submit();
  });
  var countertimer = "sb-block-date";
  var date_start = "2022-05-19 00:00:00";
  var date_end = "2022-05-22 20:00:00";

  var show_big_banner = true;
  timer_count(date_start, date_end, countertimer, show_big_banner);

function timer_count(date_start, date_end, countertimer, show_big_banner) {

            // перемещение блока акции
            if (show_big_banner) {
                $('.header-sale').prependTo('body');
                $('body').addClass('header-sale-block-active');
            }
            // перемещение блока акции

            var countDownDate = new Date(date_end).getTime();
            var countStartDate = new Date(date_start).getTime();
            var now = new Date().getTime();
            var timer = document.getElementById(countertimer);
            // Update the count down every 1 second
            if (now > countStartDate && now < countDownDate) {
                var x = setInterval(function () {

                    // Get today's date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // формат слов
                    var word_day;
                    var lastFigure = parseInt(days.toString().substr(days.toString().length - 1, 1));
                    if (lastFigure == 1) {
                        word_day = "День";
                    }
                    if (lastFigure > 1 && lastFigure < 5) {
                        word_day = "Дня";
                    }
                    if (lastFigure == 0 || lastFigure >= 5) {
                        word_day = "Дней"
                    }

                    timer.innerHTML = "<span>" + days + " " + word_day + "</span>" + " " + hours + ":"
                        + minutes + ":" + seconds;

                    // блок акций в preheader
                    $('.header-sale-content-time').html("<span>" + days + " " + word_day + "</span>" + " " + hours + ":"
                        + minutes + ":" + seconds);


                    if (distance < 0) {
                        clearInterval(x);
                        timer.innerHTML = "";
                    }
                }, 1000);
            } else {
                timer.remove();
            }
        }
  $('#cookie_stop').click(function () {
    $('.footer-cookies').slideUp();

    var nDays = 30;
    var cookieName = "cookie_TO";
    var cookieValue = true;

    var today = new Date();
    var expire = new Date();
    expire.setTime(today.getTime() + 3600000 * 24 * nDays);
    document.cookie = cookieName + "=" + escape(cookieValue) + ";expires=" + expire.toGMTString() + ";path=/";
  });

});

function getcookie(a) {
  var b = new RegExp(a + '=([^;]){1,}');
  var c = b.exec(document.cookie);
  if (c) c = c[0].split('='); else return false;
  return c[1] ? c[1] : false;
}

var cookiechecking = getcookie("cookie_TO");
if (cookiechecking) {
  $(".footer-cookies").remove();
}
else {
  $(".footer-cookies").addClass("active-cookies");
}

 function timer_count(date_start, date_end, countertimer) {
        var countDownDate = new Date(date_end).getTime();
        var countStartDate = new Date(date_start).getTime();
        var now = new Date().getTime();
        var timer = document.getElementById("count-timer-" + countertimer);
        // Update the count down every 1 second
        if (now > countStartDate && now < countDownDate) {
            var x = setInterval(function () {

                // Get today's date and time
                var now = new Date().getTime(); 

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // формат слов
                var word_day;
                var lastFigure = parseInt(days.toString().substr(days.toString().length - 1, 1));
                if (lastFigure == 1) {
                    word_day = "День";
                }
                if (lastFigure > 1 && lastFigure < 5) {
                    word_day = "Дня";
                }
                if (lastFigure == 0 || lastFigure >= 5) {
                    word_day = "Дней"
                }

                days = (days > 9) ?  days : ('0' + days)
                hours = (hours > 9) ?  hours : ('0' + hours)
                minutes = (minutes > 9) ?  minutes : ('0' + minutes)
                seconds = (seconds > 9) ?  seconds : ('0' + seconds)

                // console.log("номер:" + countertimer);
                // Display the result in the element with id="demo"
                timer.innerHTML = days + " " + word_day + " " + hours + ":"
                    + minutes + ":" + seconds;

                if (distance < 0) {
                    clearInterval(x);
                    timer.innerHTML = "";
                }
            }, 1000);
        } else {
            timer.remove();
        }
    }


 
// button up
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    if ($('#upbutton').is(':hidden')) {
      $('#upbutton').css({opacity: 1}).fadeIn('slow');
    }
  } else {
    $('#upbutton').stop(true, false).fadeOut('fast');
  }
});
$('#upbutton').click(function () {
  $('html, body').stop().animate({scrollTop: 0}, 300);
});

var shrinkHeader = 10;
var scroll = getCurrentScroll();
if (scroll >= shrinkHeader) {
  $('header').addClass('header-shrink');
  $('.header-sale').hide();
  $('body').removeClass('header-sale-block-active');

} else {
  $('header').removeClass('header-shrink');
}
console.log(scroll)

function getCurrentScroll() {
  return window.pageYOffset || document.documentElement.scrollTop;
}


$(function () {
  var shrinkHeader = 100;
  $(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $('header').addClass('header-shrink');
      $('.header-tanki-mobile').addClass('header-shrink-mobile');
      $('.header-sale').hide();
      $('body').removeClass('header-sale-block-active');

    } else {
      $('header').removeClass('header-shrink');
      $('.header-tanki-mobile').removeClass('header-shrink-mobile');
    }
  });

  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }
});


$('.header-sale-close').on('click', function () {
  $('.header-sale').hide();
  $('body').removeClass('header-sale-block-active');
});
$('.date-filter-result-now').on('click', function () {
  $('.date-filter-wrap').toggleClass('active-date-filter');
  step('.date-filter-wrap', 'active-date-filter');
})
$('.date-filter-wrap span').on('click', function () {
  new_result = $(this).text();
  $('.date-filter-result-now').html(new_result);
  $('.date-filter-wrap').toggleClass('active-date-filter');
})


$(function () {
  height_size = $(window).height();
  $('.home-screen').css('height', height_size);
  $('.background-mx-video').css('height', height_size);
  $(window).resize(function () {
    height_size = $(window).height();
    console.log(height_size);
    $('.home-screen').css('height', height_size)
    $('.background-mx-video').css('height', height_size);
  })
})

$('.search-modal-filter span').on('click', function () {
  $('.search-modal-filter span').removeClass('active-filter');
  $(this).toggleClass('active-filter');
})


$('.header-menu-dropdown').on('click', function (e) {

  e.preventDefault();
  $(this).toggleClass('open-menu');

  $('.header-menu-dropdown ul li').on('click', function (event) {
    event.stopPropagation();
  });
  step('.header-menu-dropdown','open-menu')

});
$('.lang-change').on('click', function () {
  $(this).toggleClass('open-menu');
  step('.lang-change','open-menu')
});

// îñòàíîâêà áëîêîâ
function step(targetclass, removecl) {
  jQuery(function ($) {
    $(document).mouseup(function (e) { // ñîáûòèå êëèêà ïî âåá-äîêóìåíòó
      var div = $(targetclass); // òóò óêàçûâàåì ID ýëåìåíòà
      if (!div.is(e.target) // åñëè êëèê áûë íå ïî íàøåìó áëîêó
        && div.has(e.target).length === 0) { // è íå ïî åãî äî÷åðíèì ýëåìåíòàì
        div.removeClass(removecl); // ñêðûâàåì åãî
      }
    });
  });
}

$('.menu-mobile').on('click',function () {
  $('.content-tanki-template').toggleClass('active-mobile-menu')
})

function setCookie(name, value, options = {}) {

  options = {
    path: '/',
    ...options
  };

  if (options.expires instanceof Date) {
    options.expires = options.expires.toUTCString();
  }

  let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

  for (let optionKey in options) {
    updatedCookie += "; " + optionKey;
    let optionValue = options[optionKey];
    if (optionValue !== true) {
      updatedCookie += "=" + optionValue;
    }
  }

  document.cookie = updatedCookie;
}

// detect OS & update button
var OSName = false;
if (navigator.appVersion.indexOf("Win") != -1) {
  OSName = "Win";
}
if (navigator.appVersion.indexOf("Mac") != -1) {
  OSName = "Mac";
}

console.log(OSName + " OS")

var tankiGlobalURL = {
  Win: 'https://tankionline.com/desktop/TankiOnlineSetup.exe',
  Mac: 'https://tankionline.com/desktop/TankiOnlineSetup.dmg'
};

if (OSName) {
  $(".download-play-game").attr('href', tankiGlobalURL[OSName]);
} else {
  $(".download-play-game").hide();
}
