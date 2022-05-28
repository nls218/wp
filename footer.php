 
<div class="footer-group">
    <footer id="tanki-footer" class="tanki-footer">
        <div class="container">
            <div class="row flex-container-space-top">

                <div class="sidebar-footer sf-col-1">
                    <div id="logo-foot" class="inner-sidebar-footer"></div>
                </div>

                <div class="sidebar-footer sf-col-2">
                    <div id="menu-additional" class="inner-sidebar-footer">
                        <div class="menu-menu_footer-container"><ul id="menu-menu_footer" class="footer-menu"><li id="menu-item-33346" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33346"><a href="https://tankionline.com/desktop/TankiOnlineSetup.exe">Скачать игру</a></li>
<li id="menu-item-33341" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33341"><a target="_blank" rel="noopener noreferrer" href="https://tankionline.com/ru/gamerules/">Правила игры</a></li>
<li id="menu-item-33342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33342"><a target="_blank" rel="noopener noreferrer" href="https://tankionline.com/ru/eula/">Лицензионное соглашение</a></li>
<li id="menu-item-33345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33345"><a target="_blank" rel="noopener noreferrer" href="https://tankionline.com/ru/privacy/">Политика конфиденциальности</a></li>
<li id="menu-item-43238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43238"><a href="https://tankionline.com/ru/dokumentaciya/">Документация</a></li>
</ul></div>                    </div>
                </div>

                <div class="sidebar-footer sf-col-3">
                    <div id="support-block" class="inner-sidebar-footer">
                        <div class="icon-support-footer"></div>
                        <div class="support-footer-txt-container">
                            <div class="foot-support-title">Служба поддержки:</div>
                            <a class="support-content-mail" href="mailto:help@tankionline.com">
                                <div class="foot-support-content">help@tankionline.com</div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="sidebar-footer sf-col-4">
                    <div id="social" class="inner-sidebar-footer">

                                                    <div id="custom_html-3" class="widget_text foot widget widget_custom_html"><div class="textwidget custom-html-widget"><a target="_blank" href="https://vk.com/tankionline" rel="noopener noreferrer">
<div class="foot-social-el s-2"></div>
</a>

<a target="_blank" href="https://t.me/rutankionline" rel="noopener noreferrer">
<div class="foot-social-el s-9"></div>
</a>
<a target="_blank" href="https://discord.com/invite/BQYPab8" rel="noopener noreferrer">
<div class="foot-social-el s-1"></div>
</a>

<a target="_blank" href="https://www.youtube.com/user/tankionline" rel="noopener noreferrer">
<div class="foot-social-el s-8"></div>
</a>
</div></div>                        
                    </div>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.tankionline.mobile.production">
                        <div class="g-play"></div>
                    </a>

<!--                    <a class="play-href" target="_blank" href="https://tankionline.com/mobile/tankionline-1634830530.apk">-->
<!--                        <div class="g-play2">-->
<!--                            <div class="g-play-txt">-->
<!--                                --><!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="copyright-content">

                © ООО «Альтернатива Гейм» 2010–2022. Все права защищены.
<!--                -->            </div>
        </div>
    </div>


    <div id="search-modal" class="modal">
    <div class="container">
        <div class="container-search-modal">
            <div class="search-modal-label">
                Хочу найти            </div>
            <form role="search" method="get" id="searchform" class="searchform" action="https://tankionline.com/ru/">
                <input autofocus="" placeholder="Поиск" type="text" value="" name="s" class="search-input-modal" id="s">
                <input type="submit" id="searchsubmit" value=" " disabled="">
            </form>
            <a href="#close-modal" rel="modal:close" class="close-modal-search"></a>
        </div>
        <div class="container-search-modal">
            <div class="date-filter"> Дата:
                <div class="date-filter-result">
                    <div class="date-filter-result-now">Сначала новые</div>
                    <div class="date-filter-wrap">
                        <span data-filter-date="DESC">Сначала новые</span>
                        <span data-filter-date="ASC">Сначала старые</span>
                    </div>
                </div>

            </div>
            <div class="search-modal-filter type-anonce-filter">Тип анонса:
                <span class="active-filter" data-filter="all">Все</span>
                <span data-filter="timer">Акции</span>
                <span data-filter="video">Видео </span>
                <span data-filter="simple">Новости</span>
            </div>
        </div>

        <div class="result-search">
            <div class="result-search-list"></div>
        </div>

    </div>
</div>

<script>
    var validate_form = true;
    if (validate_form)
        $("#searchsubmit").prop('disabled', true);


    $(".search-input-modal").on("input", function () {
        if (this.value.length < 3) {
            $("#searchsubmit").prop('disabled', true);
        } else {
            validate_form=false;
            $("#searchsubmit").prop("disabled", false);
        }
    });
    var ajaxurl = 'https://tankionline.com/ru/wp-admin/admin-ajax.php';
</script>
    <div id="support-block-modal" class="modal">


    <div class="support-block-form">
        <div class="support-block-form-label">Запрос в техподдержку            <a href="#close-modal" rel="modal:close" class="close-modal-support"></a>
        </div>

        <div class="support-block-form-container support-mail-login">
            
<div class="form-login-to">

	<div class="loader-spinner">
		<div class="sk-circle-bounce">
			<div class="sk-circle"></div>
			<div class="sk-circle sk-circle-2"></div>
			<div class="sk-circle sk-circle-3"></div>
			<div class="sk-circle sk-circle-4"></div>
			<div class="sk-circle sk-circle-5"></div>
			<div class="sk-circle sk-circle-6"></div>
			<div class="sk-circle sk-circle-7"></div>
			<div class="sk-circle sk-circle-8"></div>
			<div class="sk-circle sk-circle-9"></div>
			<div class="sk-circle sk-circle-10"></div>
			<div class="sk-circle sk-circle-11"></div>
			<div class="sk-circle sk-circle-12"></div>
		</div>
	</div>
	<div id="status_result"></div>
    <div class="email-empty">
        К вашему аккаунту не привязана электронная почта. Чтобы отправить запрос в техническую поддержку, привяжите email.        <br>
        <br>
        Привязать электронную почту можно в разделе «Аккаунт» настроек игры. Вам понадобится подтвердить привязку указанной почты.    </div>
	<form name="login-form-support" id="login-form-support">

		<input placeholder="Никнейм" type="text" class="support-input-modal sup-req-fields" name="login" id="my-user-login" value="">
		<input type="password" placeholder="Пароль" name="pass" class="support-input-modal sup-req-fields" id="my-user-pass" value="">

        <div id="g-recaptcha-login" class="g-recaptcha sup-req-fields"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeV5AITAAAAAI3U1V8jsU-bsPuSqjKa4th1Zy7a&amp;co=aHR0cHM6Ly90YW5raW9ubGluZS5jb206NDQz&amp;hl=ru&amp;v=M-QqaF9xk6BpjLH22uHZRhXt&amp;theme=dark&amp;size=normal&amp;cb=owijxdnm3f4" width="304" height="78" role="presentation" name="a-wduw1i1f7eav" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>

		<input type="submit" name="submit-to-support" class="support-input-modal sup-req-fields" id="submit-to-support" value="Войти">
	</form>

</div>


<script>
  function validateFromSupport() {
    let result_auth = true,
      form_pass_auth,
      form_login_auth;

    form_login_auth = $("#my-user-login").val();
    form_pass_auth = $("#my-user-pass").val();

    if (form_login_auth === '' || form_pass_auth === '' || grecaptcha.getResponse(0) === '') {
      result_auth = false;
    }

    $('.sup-req-fields').removeClass('required_field-check')
    $('#login-form-support .sup-req-fields').each(function () {
      if ($(this).val() === '') {
        $(this).addClass('required_field-check')
      }
    });

    // добавить проверки
    return result_auth;
  }

  $('#submit-to-support').on('click', async function (e) {
    e.preventDefault();
    let check_form_support = validateFromSupport(),
      status_result = document.getElementById('status_result');

    if (check_form_support) {
      $(".form-login-to").addClass('active-loader');
      let data = $('#login-form-support').serialize(),
        response = await fetch('https://tankionline.com/ru/wp-content/themes/tanki20/template/auth.php', {
          method: 'POST',
          headers: {'Content-Type': 'application/x-www-form-urlencoded'},
          body: data
        });

      let result = await response.json();
      console.log(result)

      if (result.status === 'success') {
        document.forms["login-form-support"].reset();
      $("#sup1-login-mail").val(result.login);
      $("#sup1-email-mail").val(result.email);
        setTimeout(function () {
          $(".support-block-form").addClass('active-mail-income');
        }, 2000);


      }
      else if (result.status ==="email_empty") {
          document.forms["login-form-support"].reset();
          $(".email-empty").addClass("active")
      }

    else {
        status_result.innerHTML = result;
      }

      grecaptcha.reset();

      setTimeout(function () {
        $(".form-login-to").removeClass('active-loader');
      }, 2000);
    }


  });
</script>
        </div>

        <div class="support-block-form-container support-mail-block">
            <div class="loader-spinner">
                <div class="sk-circle-bounce">
                    <div class="sk-circle"></div>
                    <div class="sk-circle sk-circle-2"></div>
                    <div class="sk-circle sk-circle-3"></div>
                    <div class="sk-circle sk-circle-4"></div>
                    <div class="sk-circle sk-circle-5"></div>
                    <div class="sk-circle sk-circle-6"></div>
                    <div class="sk-circle sk-circle-7"></div>
                    <div class="sk-circle sk-circle-8"></div>
                    <div class="sk-circle sk-circle-9"></div>
                    <div class="sk-circle sk-circle-10"></div>
                    <div class="sk-circle sk-circle-11"></div>
                    <div class="sk-circle sk-circle-12"></div>
                </div>
            </div>
            <form action="https://tankionline.com/ru/" id="form_mail-support">
                <input readonly="" placeholder="Никнейм" type="text" class="support-input-modal" id="sup1-login-mail">
                <textarea autofocus="" placeholder="Опишите вашу проблему" rows="10" cols="45" id="sup1-txt-mail" class="support-input-modal" name="text"></textarea>
                <div id="g-recaptcha-support" class="g-recaptcha support-input-modal"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeV5AITAAAAAI3U1V8jsU-bsPuSqjKa4th1Zy7a&amp;co=aHR0cHM6Ly90YW5raW9ubGluZS5jb206NDQz&amp;hl=ru&amp;v=M-QqaF9xk6BpjLH22uHZRhXt&amp;theme=dark&amp;size=normal&amp;cb=lmuco088ioud" width="304" height="78" role="presentation" name="a-ij8m5xjupkxd" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
            </form>
            <input type="submit" class="support-input-modal" id="sup1-submit-mail" value="Отправить">

            <div id="result_mail">
                <div id="result_mail-img"></div>
                <div id="result_mail-txt-ye">

                    Ваш запрос в поддержку принят. Служба поддержки свяжется с вами в ближайшее время.                </div>
            </div>

            <div id="result_mail-txt"></div>

        </div>
    </div>


</div>
<script>
    var ajaxurl = 'https://tankionline.com/ru/wp-admin/admin-ajax.php';

    function validateFromMail() {
        let result_auth = true,
            form_login_auth,
            form_mess_auth;

        form_login_auth = $("#sup1-login-mail").val();
        form_mess_auth = $("#sup1-txt-mail").val();

        if (form_login_auth === '' || form_mess_auth === '' ||  grecaptcha.getResponse(1) === '') {
            result_auth = false;
        }

        $('.support-input-modal').removeClass('required_field-check')
        $('#form_mail-support .support-input-modal').each(function () {
            if ($(this).val() === '') {
                $(this).addClass('required_field-check')
            }
        });

        // добавить проверки
        return result_auth;
    }


    $('#sup1-submit-mail').on('click', async function () {

        let check_form_mail = validateFromMail(),
            result_mail = document.getElementById('result_mail'),
            result_mail_fail = document.getElementById('result_mail-txt');

        if (check_form_mail) {
            $(".support-mail-block").addClass('active-loader');
            var data = {
                'action': 'support_task',
                'nickname': $("#sup1-login-mail").val(),
                'comment': $("#sup1-txt-mail").val(),
                'lang': 'ru',
                'g-recaptcha-response': grecaptcha.getResponse(1),
            };

            $.ajax({
                url: ajaxurl,
                data: data,
                type: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                success: function (data) {
                    let result = $.trim(data);

                    if (result === 'success') {
                        $('.support-mail-block').addClass('active-feedback-success');
                        document.getElementById('form_mail-support').reset();

                        setTimeout(function () {
                            $.modal.close();
                            $('.support-mail-block').removeClass('active-feedback-success');
                            $(".support-block-form").removeClass('active-mail-income');
                        }, 2000);

                    } else {
                        result_mail.innerHTML = result;
                    }

                    // grecaptcha.reset();
                    setTimeout(function () {
                        $(".support-mail-block").removeClass('active-loader');
                    }, 2000);

                }
            });

        }

    });


</script>
    

    <div id="upbutton"></div>
    <a href="#support-block-modal" rel="modal:open">
        <div id="support">
            <div class="support-info">
                Запрос в техподдержку                <!--                <span>онлайн!</span>-->
            </div>
        </div>
    </a>


<!--    <div class="to-lvl-extra">-->
<!--        <div class="level_points-background">-->
<!--            <div style="height:95%" class="level_points"></div>-->
<!--        </div>-->
<!--        <div class="level-back" alt="progress" class="mw-100"></div>-->
<!--        <a target="_blank" href="https://tankionline.com/pages/tanki-sport-season4/?lang=--><!--" class="href-lvl"></a>-->
<!--    </div>-->




    <div class="footer-cookies active-cookies">
        <div class="footer-cookies-txt">

            Мы используем Cookies, чтобы сделать использование сайта максимально безопасным и эффективным. Подробности ищите <a href="https://tankionline.com/ru/privacy/">здесь</a>.        </div>

        <div id="cookie_stop" class="footer-cookies-approve">OK</div>

    </div>

        <script src="https://tankionline.com/ru/wp-content/themes/tanki20/js/main.js?ver=117"></script>
    <script>
        var CaptchaCallback = function() {
            grecaptcha.render('g-recaptcha-login', {'sitekey' : '6LeV5AITAAAAAI3U1V8jsU-bsPuSqjKa4th1Zy7a','theme': 'dark' });
            grecaptcha.render('g-recaptcha-support', {'sitekey' : '6LeV5AITAAAAAI3U1V8jsU-bsPuSqjKa4th1Zy7a','theme': 'dark'});
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&amp;render=explicit&amp;hl=ru_RU" async="" defer=""></script>


    
<!-- WP Audio player plugin v1.9.7 - https://www.tipsandtricks-hq.com/wordpress-audio-music-player-plugin-4556/ -->
    <script type="text/javascript">
        soundManager.useFlashBlock = true; // optional - if used, required flashblock.css
        soundManager.url = 'https://tankionline.com/ru/wp-content/plugins/compact-wp-audio-player/swf/soundmanager2.swf';
        function play_mp3(flg, ids, mp3url, volume, loops)
        {
            //Check the file URL parameter value
            var pieces = mp3url.split("|");
            if (pieces.length > 1) {//We have got an .ogg file too
                mp3file = pieces[0];
                oggfile = pieces[1];
                //set the file URL to be an array with the mp3 and ogg file
                mp3url = new Array(mp3file, oggfile);
            }

            soundManager.createSound({
                id: 'btnplay_' + ids,
                volume: volume,
                url: mp3url
            });

            if (flg == 'play') {
                    soundManager.play('btnplay_' + ids, {
                    onfinish: function() {
                        if (loops == 'true') {
                            loopSound('btnplay_' + ids);
                        }
                        else {
                            document.getElementById('btnplay_' + ids).style.display = 'inline';
                            document.getElementById('btnstop_' + ids).style.display = 'none';
                        }
                    }
                });
            }
            else if (flg == 'stop') {
    //soundManager.stop('btnplay_'+ids);
                soundManager.pause('btnplay_' + ids);
            }
        }
        function show_hide(flag, ids)
        {
            if (flag == 'play') {
                document.getElementById('btnplay_' + ids).style.display = 'none';
                document.getElementById('btnstop_' + ids).style.display = 'inline';
            }
            else if (flag == 'stop') {
                document.getElementById('btnplay_' + ids).style.display = 'inline';
                document.getElementById('btnstop_' + ids).style.display = 'none';
            }
        }
        function loopSound(soundID)
        {
            window.setTimeout(function() {
                soundManager.play(soundID, {onfinish: function() {
                        loopSound(soundID);
                    }});
            }, 1);
        }
        function stop_all_tracks()
        {
            soundManager.stopAll();
            var inputs = document.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].id.indexOf("btnplay_") == 0) {
                    inputs[i].style.display = 'inline';//Toggle the play button
                }
                if (inputs[i].id.indexOf("btnstop_") == 0) {
                    inputs[i].style.display = 'none';//Hide the stop button
                }
            }
        }
    </script>
    <script type="text/javascript" src="https://tankionline.com/ru/wp-content/themes/tanki20/js/search.js?ver=5.4.2"></script>
<script type="text/javascript" src="https://tankionline.com/ru/wp-includes/js/wp-embed.min.js?ver=5.4.2"></script>

    <noindex>
        <!-- Yandex.Metrika counter -->
        <div style="display:none;">
            <script type="text/javascript">
                (function (w, c) {
                    (w[c] = w[c] || []).push(function () {
                        try {
                            w.yaCounter10288858 = new Ya.Metrika({
                                id: 10288858,
                                enableAll: true,
                                trackHash: true,
                                webvisor: true
                            });
                        } catch (e) {
                        }
                    });
                })(window, "yandex_metrika_callbacks");
            </script>
        </div>
        <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
        <noscript>
            <div>
                <img src="//mc.yandex.ru/watch/10288858" style="position:absolute; left:-9999px;" alt=""/>
            </div>
        </noscript>
        <!-- /Yandex.Metrika counter -->

        <div class="rcnt" style="height: 1px; width: 1px; position: fixed; left:-199999px;">
            <noscript>
                <a href="http://top100.rambler.ru/navi/2776112/">
                    <img src="http://counter.rambler.ru/top100.cnt?2776112" border="0"/>
                </a>
            </noscript>
            <img src="//code.directadvert.ru/track/167610.gif" width="1" height="1">
        </div>
    </noindex>

</div></div>


<!-- Dynamic page generated in 0.226 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2022-05-21 18:46:24 -->

<!-- super cache --><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="текущую проверку reCAPTCHA можно пройти в течение ещё двух минут" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=M-QqaF9xk6BpjLH22uHZRhXt&amp;k=6LeV5AITAAAAAI3U1V8jsU-bsPuSqjKa4th1Zy7a" name="c-wduw1i1f7eav" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="текущую проверку reCAPTCHA можно пройти в течение ещё двух минут" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=M-QqaF9xk6BpjLH22uHZRhXt&amp;k=6LeV5AITAAAAAI3U1V8jsU-bsPuSqjKa4th1Zy7a" name="c-ij8m5xjupkxd" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>