<?php

session_start();
require_once 'dbconnect.php';

?>


<!DOCTYPE html>

<!-- saved from url=(0031)https://artcollege.ru/priem#doc -->

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html;
	charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--metatextblock-->

    <title>
        Приемная комиссия Колледжа</title>
    <meta name="description" content="Приёмная комиссия колледжа">
    <meta property="og:url" content="https://artcollege.ru/priem">
    <meta property="og:title" content="Приемная комиссия Колледжа">
    <meta property="og:description" content="Приёмная комиссия колледжа">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://static.tildacdn.com/tild6463-6332-4966-b136-323464343734/image.png">
    <link rel="canonical" href="https://artcollege.ru/priem">
    <!--/metatextblock-->
    <meta property="fb:app_id" content="257953674358265">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://tilda.ws/">
    <link rel="dns-prefetch" href="https://static.tildacdn.com/">
    <link rel="shortcut icon" href="https://static.tildacdn.com/tild3436-3235-4332-b862-366434653364/favicon.ico"
          type="image/x-icon">
    <link rel="apple-touch-icon" href="https://static.tildacdn.com/tild6465-3037-4966-b961-646237626530/152x152_1.png">
    <link rel="apple-touch-icon" sizes="76x76"
          href="https://static.tildacdn.com/tild6465-3037-4966-b961-646237626530/152x152_1.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="https://static.tildacdn.com/tild6465-3037-4966-b961-646237626530/152x152_1.png">
    <link rel="apple-touch-startup-image"
          href="https://static.tildacdn.com/tild6465-3037-4966-b961-646237626530/152x152_1.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content="https://static.tildacdn.com/tild6534-6530-4136-a234-333834363162/270x270_1.png">
    <!-- Assets -->
    <link rel="stylesheet" href="./files/tilda-grid-3.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./files/tilda-blocks-2.12.css" type="text/css" media="all">
    <link rel="stylesheet" href="./files/tilda-animation-1.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./files/tilda-slds-1.4.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./files/tilda-zoom-2.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="./files/tilda-menusub-1.0.min.css" type="text/css" media="all">
    <script type="text/javascript" async="" id="tildastatscript" src="./files/tildastat-0.2.min.js.Без названия">
    </script>
    <script async="" src="./files/analytics.js.Без названия">
    </script>
    <script type="text/javascript" async="" src="./files/watch.js.Без названия">
    </script>
    <script async="" id="mango-js" src="./files/mango.js.Без названия" charset="utf-8">
    </script>
    <script async="" src="./files/gtm.js.Без названия">
    </script>
    <script src="./files/jquery-1.10.2.min.js.Без названия">
    </script>
    <script src="./files/tilda-scripts-2.8.min.js.Без названия">
    </script>
    <script src="./files/tilda-blocks-2.7.js.Без названия">
    </script>
    <script src="./files/lazyload-1.3.min.js.Без названия" charset="utf-8">
    </script>
    <script src="./files/tilda-animation-1.0.min.js.Без названия" charset="utf-8">
    </script>
    <script src="./files/tilda-slds-1.4.min.js.Без названия" charset="utf-8">
    </script>
    <script src="./files/hammer.min.js.Без названия" charset="utf-8">
    </script>
    <script src="./files/tilda-zoom-2.0.min.js.Без названия" charset="utf-8">
    </script>
    <script src="./files/tilda-menusub-1.0.min.js.Без названия" charset="utf-8">
    </script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>
    <!-- Google Tag Manager -->
    <script type="text/javascript">
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MM595QJ');
    </script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
        if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y') {
            var style = document.createElement('style');
            style.type = 'text/css';
            style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;	-o-transition: opacity ease-in-out .2s;	transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
            document.getElementsByTagName('head')[0].appendChild(style);
            $(document).ready(function () {
                $('.t-records').addClass('t-records_animated');
                setTimeout(function () {
                    $('.t-records').addClass('t-records_visible');
                    sessionStorage.setItem('visited', 'y');
                }, 400);
            });

        }</script>
    <link href="./files/multichannel-widget.css" rel="stylesheet" type="text/css">
</head>
<body class="t-body" style="margin: 0px;
	">
<!--allrecords-->
<div id="allrecords" class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node"
     data-tilda-project-id="1090793" data-tilda-page-id="6681068" data-tilda-page-alias="priem"
     data-tilda-formskey="60252717a0d8c27159aec8439a4aacc0" style="overflow: hidden;
	">
    <!--header-->
    <div id="t-header" class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node"
         data-tilda-project-id="1090793" data-tilda-page-id="5299279" data-tilda-page-alias="header"
         data-tilda-formskey="60252717a0d8c27159aec8439a4aacc0">
        <div id="rec124587932" class="r t-rec r_showed r_anim" style="opacity: 1;
		" data-record-type="360" data-animationappear="off">
            <!-- T360 -->
            <style type="text/css">
                @media screen and (min-width: 980px) {
                    .t-records {
                        opacity: 0;
                    }

                    .t-records_animated {
                        -webkit-transition: opacity ease-in-out .5s;
                        -moz-transition: opacity ease-in-out .5s;
                        -o-transition: opacity ease-in-out .5s;
                        transition: opacity ease-in-out .5s;
                    }

                    .t-records.t-records_visible {
                        opacity: 1;
                    }
                }</style>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(window).bind('pageshow', function (event) {
                        if (event.originalEvent.persisted) {
                            window.location.reload()
                        }
                    });
                    $("#rec124587932").attr('data-animationappear', 'off');
                    $("#rec124587932").css('opacity', '1');
                    $('.t-records').addClass('t-records_animated');
                    setTimeout(function () {
                        $('.t-records').addClass('t-records_visible');
                    }, 200);
                });
            </script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("button:not(.t-submit,.t835__btn_next,.t835__btn_prev,.t835__btn_result,.t862__btn_next,.t862__btn_prev,.t862__btn_result,.t854__news-btn,.t862__btn_next),a:not([href*=#],.carousel-control,.t-carousel__control,.t807__btn_reply,[href^=#price],[href^=javascript],[href^=mailto],[href^=tel],[href^=link_sub],.t-menu__link-item[data-menu-submenu-hook])").click(function (e) {
                        var goTo = this.getAttribute("href");
                        if (goTo !== null) {
                            var target = $(this).attr("target");
                            if (target !== "_blank") {
                                e.preventDefault();
                                $(".t-records").removeClass("t-records_visible");
                                setTimeout(function () {
                                    window.location = goTo;
                                }, 500);
                            }
                        }
                    });
                });
            </script>
            <style type="text/css">
                .t360__bar {
                    background-color: #7b3ef8;
                }</style>
            <script type="text/javascript">
                $(document).ready(function () {
                    var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
                    if (isSafari) {
                    } else {
                        $("body").append('<div class="t360__progress"><div class="t360__bar"></div></div>');
                        setTimeout(function () {
                            $(".t360__bar").addClass("t360__barprogress");
                        }, 10);
                    }
                });
                $(window).load(function () {
                    $(".t360__bar").removeClass("t360__barprogress");
                    $(".t360__bar").addClass("t360__barprogressfinished");
                    setTimeout(function () {
                        $(".t360__bar").addClass("t360__barprogresshidden");
                    }, 20);
                    setTimeout(function () {
                        $(".t360__progress").hide();
                    }, 500);
                });
            </script>
        </div>
        <div id="rec95397366" class="r t-rec t-screenmin-980px" style="background-color:#ffffff;
		" data-animationappear="off" data-record-type="257" data-screen-min="980px" data-bg-color="#ffffff">
            <!-- T228 -->
            <div id="nav95397366marker">
            </div>
            <div id="nav95397366" class="t228 t228__positionstatic " style=" height:50px;
		" data-bgcolor-hex="" data-bgcolor-rgba="" data-navmarker="nav95397366marker" data-appearoffset=""
                 data-bgopacity-two="" data-menushadow="" data-bgopacity="1" data-menu-items-align="left"
                 data-menu="yes">
                <div class="t228__maincontainer t228__c12collumns" style="height:50px;
		">
                    <div class="t228__padding40px">
                    </div>
                    <div class="t228__leftside">
                        <div class="t228__leftcontainer">
                            <a href="#" style="color:#ffffff;
				">
                                <img src="./files/logo_1_mok_horiz-02-.jpg" class="t228__imglogo t228__imglogomobile"
                                     imgfield="img" style="max-width: 100px;
				width: 50px;
				height: auto;
				display: block;
				padding-top: 5px;
				padding-bottom: 5px;
				" alt="ТАВИАК">
                            </a>
                        </div>
                    </div>
                    <div class="t228__centerside t228__menualign_left">
                        <div class="t228__centercontainer">
                            <ul class="t228__list ">
                                <li class="t228__list_item">
                                    <a class="t-menu__link-item"
                                       href="file:///D:/OSPanel/domains/localhost/lazarev/college.html"
                                       data-menu-submenu-hook="" style="font-size:12px;
					font-weight:400;
					text-transform:uppercase;
					" data-menu-item-number="4">
                                        Колледж</a>
                                </li>
                                <li class="t228__list_item">
                                    <a class="t-menu__link-item" href="http://taviak.ru/abiturient/podgotov_kursi/"
                                       data-menu-submenu-hook="" style="font-size:12px;
					font-weight:400;
					text-transform:uppercase;
					" data-menu-item-number="5">
                                        Курсы</a>
                                </li>
                                <li class="t228__list_item">
                                    <a class="t-menu__link-item"
                                       href="http://taviak.ru/studentu/profsoyuzy/profsoyuz/sobytiya/"
                                       data-menu-submenu-hook="" style="font-size:12px;
					font-weight:400;
					text-transform:uppercase;
					" data-menu-item-number="6">
                                        События</a>
                                </li>
                                <?php
                                if ($_SESSION['proverka1'] == true) {
                                    ?>

                                <li class="t228__list_item">
                                    <a class="t-menu__link-item"
                                       href="lk.php"
                                       data-menu-submenu-hook="" style="font-size:12px;
					font-weight:400;
					text-transform:uppercase;
					" data-menu-item-number="6">
                                        Личный кабинет</a>
                                </li>

                                <li class="t228__list_item">
                                    <a class="t-menu__link-item"
                                       href="exit.php"
                                       data-menu-submenu-hook="" style="font-size:12px;
					font-weight:400;
					text-transform:uppercase;
					" data-menu-item-number="6">
                                        Выйти</a>
                                </li>

                                    <?php
                                } else {
                                ?>


                                    <li class="t228__list_item">
                                        <a class="t-menu__link-item"
                                           href="log.php"
                                           data-menu-submenu-hook="" style="font-size:12px;
					font-weight:400;
					text-transform:uppercase;
					" data-menu-item-number="6">
                                            Авторизация</a>
                                    </li>

                                    <?php
                                }
                                ?>




                            </ul>
                        </div>
                    </div>
                    <div class="t228__rightside">
                        <div class="t228__rightcontainer">
                            <div class="t228__right_buttons">
                                <div class="t228__right_buttons_wrap">
                                    <div class="t228__right_buttons_but">
                                        <a href="tel:+7(863) 431-59-40" target="" class="t-btn " style="color:#333344;
						background-color:#ffffff;
						border-radius:20px;
						-moz-border-radius:20px;
						-webkit-border-radius:20px;
						">
                                            <table style="width:100%;
						height:100%;
						">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        +7 (863) 431-59-40
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t228__padding40px">
                    </div>
                </div>
            </div>
            <style>
                @media screen and (max-width: 980px) {
                    #rec95397366 .t228__leftcontainer {
                        padding: 20px;
                    }
                }

                @media screen and (max-width: 980px) {
                    #rec95397366 .t228__imglogo {
                        padding: 20px 0;
                    }
                }</style>
            <script type="text/javascript">
                $(document).ready(function () {
                    t228_highlight();
                });

                $(window).resize(function () {
                    t228_setBg('95397366');

                });

                $(document).ready(function () {
                    t228_setBg('95397366');

                });
            </script>
            <style>
                #rec95397366 .t-btn:not(.t-animate_no-hover):hover {
                    background-color: #7b3ef8 !important;
                    color: #ffffff !important;
                }

                #rec95397366 .t-btn:not(.t-animate_no-hover) {
                    -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
                }</style>
            <style>
                #rec95397366 .t-menu__link-item {
                    -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                }

                #rec95397366 .t-menu__link-item.t-active {
                    opacity: 0.50 !important;
                }

                #rec95397366 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
                    opacity: 0.5 !important;
                }

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
                    #rec95397366 .t-menu__link-item, #rec95397366 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }</style>
            <script type="text/javascript">
                $(document).ready(function () {
                    setTimeout(function () {
                        t_menusub_init('95397366');
                    }, 500);
                });
            </script>
            <style>
                @media screen and (max-width: 980px) {
                    #rec95397366 .t-menusub__menu .t-menusub__link-item {
                        color: #000000 !important;
                    }
                }</style>
        </div>
        <div id="rec125925313" class="r t-rec t-rec_pt_15 t-rec_pb_15 t-screenmin-980px" style="padding-top:15px;
padding-bottom:15px;
background-color:#ffffff;
" data-record-type="258" data-screen-min="980px" data-bg-color="#ffffff" data-animationappear="off">
            <!-- T229 -->
            <div id="nav125925313marker">
            </div>
            <div id="nav125925313" class="t229 t229__positionstatic" style="background-color: rgba(255,255,255,1);
height:44px;
" data-bgcolor-hex="#ffffff" data-bgcolor-rgba="rgba(255,255,255,1)" data-navmarker="nav125925313marker"
                 data-appearoffset="" data-bgopacity="1" data-menu="yes">
                <div class="t229__maincontainer t229__c12collumns" style="height:44px;
">
                    <div class="t229__padding40px">
                    </div>
                    <div class="t229__centerside t229__menualign_left">
                        <ul>
                            <li class="t229__list_item">
                                <a class="t-menu__link-item t-active" href="#" data-menu-submenu-hook="" style="font-size:22px;
			font-weight:400;
			padding:0 0px;
			">
                                    Приемная комиссия</a>
                            </li>
                            <li class="t229__list_item">
                                <a class="t-menu__link-item" href="#" data-menu-submenu-hook="" style="font-size:22px;
			font-weight:400;
			padding:0 0px;
			">
                                    Специальности</a>
                            </li>
                            <li class="t229__list_item">
                                <a class="t-menu__link-item" href="#" data-menu-submenu-hook="" style="font-size:22px;
			font-weight:400;
			padding:0 0px;
			">
                                    Дни открытых дверей</a>
                            </li>


                            <?php
                            if ($_SESSION['proverka1'] == true) {
                                ?>



                                <?php
                            }
                            ?>


                        </ul>
                    </div>
                    <div class="t229__padding40px">
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    t229_highlight('5299279');
                    $('.t229').removeClass('t229__beforeready');
                });
            </script>
            <script type="text/javascript">
                $(window).resize(function () {
                    t229_setBg('125925313');
                });
                $(window).load(function () {
                    t229_setBg('125925313');
                });
                $(document).ready(function () {
                    t229_setBg('125925313');
                });
            </script>
            <style>
                #rec125925313 .t-menu__link-item {
                    -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                }

                #rec125925313 .t-menu__link-item.t-active {
                    opacity: 0.50 !important;
                }

                #rec125925313 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
                    opacity: 0.5 !important;
                }

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
                    #rec125925313 .t-menu__link-item, #rec125925313 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }</style>
            <script type="text/javascript">
                $(document).ready(function () {
                    setTimeout(function () {
                        t_menusub_init('125925313');
                    }, 500);
                });
            </script>
            <style>
                @media screen and (max-width: 980px) {
                    #rec125925313 .t-menusub__menu .t-menusub__link-item {
                        color: #000000 !important;
                    }
                }</style>
            <!--[if IE 8]>
            <style>
                #rec125925313 .t229 {
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9ffffff', endColorstr='#D9ffffff');

                }</style>
            <![endif]-->
        </div>
        <div id="rec118425135" class="r t-rec t-screenmin-980px" style="background-color:#f0f6ff;
" data-record-type="258" data-screen-min="980px" data-bg-color="#f0f6ff" data-animationappear="off">
            <!-- T229 -->
            <div id="nav118425135marker">
            </div>
            <div id="nav118425135" class="t229 t229__positionstatic" style="background-color: rgba(250,252,255,1);
height:44px;
" data-bgcolor-hex="#fafcff" data-bgcolor-rgba="rgba(250,252,255,1)" data-navmarker="nav118425135marker"
                 data-appearoffset="" data-bgopacity="1" data-menu="yes">
                <div class="t229__maincontainer t229__c12collumns" style="height:44px;
">
                    <div class="t229__padding40px">
                    </div>
                    <div class="t229__centerside t229__menualign_left">
                        <ul>
                            <li class="t229__list_item">
                                <a class="t-menu__link-item" href="https://artcollege.ru/f-design"
                                   data-menu-submenu-hook="" style="font-size:12px;
			font-weight:400;
			padding:0 0px;

	</ul>
</div>
<div class=" t229__padding40px">
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    t229_highlight('5299279');
                    $('.t229').removeClass('t229__beforeready');
                });
            </script>
            <script type="text/javascript">
                $(window).resize(function () {
                    t229_setBg('118425135');
                });
                $(window).load(function () {
                    t229_setBg('118425135');
                });
                $(document).ready(function () {
                    t229_setBg('118425135');
                });
            </script>
            <style>
                #rec118425135 .t-menu__link-item {
                    -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                }

                #rec118425135 .t-menu__link-item.t-active {
                    opacity: 0.50 !important;
                }

                #rec118425135 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
                    opacity: 0.5 !important;
                }

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
                    #rec118425135 .t-menu__link-item, #rec118425135 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }</style>
            <script type="text/javascript">
                $(document).ready(function () {
                    setTimeout(function () {
                        t_menusub_init('118425135');
                    }, 500);
                });
            </script>
            <style>
                @media screen and (max-width: 980px) {
                    #rec118425135 .t-menusub__menu .t-menusub__link-item {
                        color: #000000 !important;
                    }
                }</style>
            <!--[if IE 8]>
            <style>
                #rec118425135 .t229 {
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9fafcff', endColorstr='#D9fafcff');

                }</style>
            <![endif]-->
        </div>
        <div id="rec95397288" class="r t-rec t-screenmax-980px" style="background-color:#ffffff;
" data-animationappear="off" data-record-type="327" data-screen-max="980px" data-bg-color="#ffffff">
            <!-- T282 -->
            <div id="nav95397288marker">
            </div>
            <div id="nav95397288" class="t282" data-menu="yes" data-appearoffset="">
                <div class="t282__container t282__small t282__positionstatic" style="">
                    <div class="t282__container__bg" style=" " data-bgcolor-hex="" data-bgcolor-rgba=""
                         data-navmarker="nav95397288marker" data-appearoffset="" data-bgopacity="1"
                         data-menu-shadow="0px 1px 3px rgba(0,0,0,0.)">
                    </div>
                    <div class="t282__container__bg_opened" style="background-color:#f1f2f9;
		">
                    </div>
                    <div class="t282__menu__content ">
                        <div class="t282__logo__container" style="height:60px;
		">
                            <div class="t282__logo__content">
                                <a class="t282__logo" href="https://artcollege.ru/" style="color:#333344;
			font-size:19px;
			font-weight:400;
			letter-spacing:1px;
			text-transform:uppercase;
			">
                                    <img src="./files/logo_1_mok_horizont-.svg" style="height: 25px;
			" class="t280__logo__img" imgfield="img" alt="ТАВИАК">
                                </a>
                            </div>
                            <div class="t282__burger">
		<span style="background-color:#333344;
		">
	</span>
                                <span style="background-color:#333344;
	">
</span>
                                <span style="background-color:#333344;
">
</span>
                                <span style="background-color:#333344;
">
</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t282__menu__container t282__closed">
                    <div class="t282__menu__wrapper" style="background-color:#f1f2f9;
	">
                        <div class="t282__menu">
                            <div class="t282__menu__items">
                                <a class="t282__menu__item t-heading t-heading_md t-menu__link-item"
                                   href="https://1-mok.ru/" data-menu-submenu-hook="" style="color:#333344;
			font-size:15px;
			font-weight:400;
			">
                                    Комплекс</a>
                                <a class="t282__menu__item t-heading t-heading_md t-menu__link-item t-active"
                                   href="https://artcollege.ru/priem" data-menu-submenu-hook="" style="color:#333344;
			font-size:15px;
			font-weight:400;
			">
                                    Приемная комиссия</a>
                                <a class="t282__menu__item t-heading t-heading_md t-menu__link-item"
                                   href="https://artcollege.ru/#specialty" data-menu-submenu-hook="" style="color:#333344;
			font-size:15px;
			font-weight:400;
			">
                                    Специальности</a>
                                <a class="t282__menu__item t-heading t-heading_md t-menu__link-item"
                                   href="https://artcollege.ru/dod" data-menu-submenu-hook="" style="color:#333344;
			font-size:15px;
			font-weight:400;
			">
                                    Дни открытых дверей</a>
                                <a class="t282__menu__item t-heading t-heading_md t-menu__link-item"
                                   href="https://artcollege.ru/perevod" data-menu-submenu-hook="" style="color:#333344;
			font-size:15px;
			font-weight:400;
			">
                                    Перевод</a>
                                <a class="t282__menu__item t-heading t-heading_md t-menu__link-item"
                                   href="https://artcollege.ru/priem/adres" data-menu-submenu-hook="" style="color:#333344;
			font-size:15px;
			font-weight:400;
			">
                                    Адреса</a>
                            </div>
                            <div class="t282__descr t-descr t-descr__xxs" style="color:#7b3ef8;
		font-size:24px;
		">
                                <div style="color:#7b3ef8;
		" data-customstyle="yes">
                                    <a href="tel:+7 (863) 431-59-40" style="color: rgb(123, 62, 248);
		">
		<span style="font-weight: 400;
		">
		+7 (863) 431-59-40</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t282__overlay t282__closed">
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    t282_showMenu('95397288');
                    t282_changeSize('95397288');
                    t282_highlight();
                });
                $(window).resize(function () {
                    t282_changeSize('95397288');
                });
            </script>
            <style>
                #rec95397288 .t-menu__link-item {
                    -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                }

                #rec95397288 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
                    color: #6f7998 !important;
                    opacity: 0.5 !important;
                }

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
                    #rec95397288 .t-menu__link-item, #rec95397288 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }</style>
            <script type="text/javascript">
                $(document).ready(function () {
                    setTimeout(function () {
                        t_menusub_init('95397288');
                    }, 500);
                });
            </script>
            <style>
                @media screen and (max-width: 980px) {
                    #rec95397288 .t-menusub__menu .t-menusub__link-item {
                        color: #333344 !important;
                    }
                }</style>
        </div>
        <div id="rec126408646" class="r t-rec t-rec_pb_0 t-screenmax-980px" style="padding-bottom:0px;
" data-animationappear="off" data-record-type="258" data-screen-max="980px">
            <!-- T229 -->
            <div id="nav126408646marker">
            </div>
            <div id="nav126408646" class="t229 t229__positionstatic" style="background-color: rgba(144,210,52,1);
height:50px;
" data-bgcolor-hex="#90d234" data-bgcolor-rgba="rgba(144,210,52,1)" data-navmarker="nav126408646marker"
                 data-appearoffset="" data-bgopacity="1" data-menu="yes">
                <div class="t229__maincontainer " style="height:50px;
">
                    <div class="t229__padding40px">
                    </div>
                    <div class="t229__centerside ">
                        <ul class="uppercase">
                            <li class="t229__list_item">
                                <a class="t-menu__link-item" href="tel:+7(863) 431-59-40" data-menu-submenu-hook=""
                                   style="color:#ffffff;
			font-size:20px;
			font-weight:700;
			text-transform:uppercase;
			">
                                    +7 (863) 431-59-40</a>
                            </li>
                        </ul>
                    </div>
                    <div class="t229__padding40px">
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    t229_highlight('5299279');
                    $('.t229').removeClass('t229__beforeready');
                });
            </script>
            <script type="text/javascript">
                $(window).resize(function () {
                    t229_setBg('126408646');
                });
                $(window).load(function () {
                    t229_setBg('126408646');
                });
                $(document).ready(function () {
                    t229_setBg('126408646');
                });
            </script>
            <script type="text/javascript">
                $(document).ready(function () {
                    setTimeout(function () {
                        t_menusub_init('126408646');
                    }, 500);
                });
            </script>
            <style>
                @media screen and (max-width: 980px) {
                    #rec126408646 .t-menusub__menu .t-menusub__link-item {
                        color: #ffffff !important;
                    }
                }</style>
            <!--[if IE 8]>
            <style>
                #rec126408646 .t229 {
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D990d234', endColorstr='#D990d234');

                }</style>
            <![endif]-->
        </div>
    </div>
    <!--/header-->
    <!-- <div id="rec125770200" class="r t-rec" style=" " data-animationappear="off" data-record-type="121">
        <!-- T654 -->

</div>
<script type="text/javascript">
    $(window).resize(function () {
        t654_setBg('125770200');

    });

    $(document).ready(function () {
        t654_setBg('125770200');

    });

    $(document).ready(function () {
        t654_showPanel('125770200');

    });
</script>
</div>
<div id="rec117959198" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
    <!-- T396 -->
    <style>
        #rec117959198 .t396__artboard {
            height: 170px;
            background-color: #ffffff;
        }

        #rec117959198 .t396__carrier {
            height: 170px;
            background-position: center center;
            background-attachment: scroll;
            background-image: url('https://static.tildacdn.com/tild3465-3134-4938-b937-376337383232/-Recovered.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec117959198 .t396__artboard {
            }

            #rec117959198 {
                background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(69, 58, 177, 0.5)), to(rgba(69, 58, 177, 0.3)));
                background-image: -webkit-linear-gradient(top, rgba(69, 58, 177, 0.5), rgba(69, 58, 177, 0.3));
                background-image: linear-gradient(to bottom, rgba(69, 58, 177, 0.5), rgba(69, 58, 177, 0.3));
            }

            #rec117959198 .t396__carrier {
                background-image: url('https://static.tildacdn.com/tild6165-3564-4364-b661-616664356438/-Recovered.jpg');
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117959198 .t396__artboard {
                height: 140px;
            }

            #rec117959198 .t396__filter {
                height: 140px;
            }

            #rec117959198 .t396__carrier {
                height: 140px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117959198 .t396__artboard {
                height: 200px;
            }

            #rec117959198 .t396__filter {
                height: 200px;
            }

            #rec117959198 .t396__carrier {
                height: 200px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117959198 .t396__artboard {
                height: 220px;
            }

            #rec117959198 .t396__filter {
                height: 220px;
            }

            #rec117959198 .t396__carrier {
                height: 220px;
            }
        }

        #rec117959198 .tn-elem[data-elem-id="1554884679803"] {
            color: #ffffff;
            z-index: 1;
            top: calc(85px - 0px + -8px);
            left: calc(50% - 600px + 20px);
            width: 710px;
        }

        #rec117959198 .tn-elem[data-elem-id="1554884679803"] .tn-atom {
            color: #ffffff;
            font-size: 40px;
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.2;
            font-weight: 500;
            letter-spacing: 0 pxpx;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117959198 .tn-elem[data-elem-id="1554884679803"] {
                top: calc(85px - 0px + -3px);
                left: calc(50% - 480px + 12px);
                width: 510px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117959198 .tn-elem[data-elem-id="1554884679803"] {
                top: calc(70px - 0px + 2px);
                left: calc(50% - 320px + 13px);
                width: 380px;
            }

            #rec117959198 .tn-elem[data-elem-id="1554884679803"] .tn-atom {
                font-size: 30px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117959198 .tn-elem[data-elem-id="1554884679803"] {
                top: calc(100px - 0px + -18px);
                left: calc(50% - 155px + 0px);
                width: 310px;
            }

            #rec117959198 .tn-elem[data-elem-id="1554884679803"] {
                text-align: center;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117959198 .tn-elem[data-elem-id="1554884679803"] {
                top: calc(110px - 0px + -26px);
                left: calc(50% - 160px + 0px);
                width: 320px;
            }

            #rec117959198 .tn-elem[data-elem-id="1554884679803"] .tn-atom {
                line-height: 1.3;
            }
        }

        #rec117959198 .tn-elem[data-elem-id="1554884679827"] {
            color: #ffffff;
            z-index: 4;
            top: calc(85px - 0px + -50px);
            left: calc(50% - 600px + 20px);
            width: 550px;
        }

        #rec117959198 .tn-elem[data-elem-id="1554884679827"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.65;
            font-weight: 400;
            letter-spacing: 0 pxpx;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117959198 .tn-elem[data-elem-id="1554884679827"] {
                top: calc(85px - 0px + -42px);
                left: calc(50% - 480px + 12px);
                width: 600px;
            }

            #rec117959198 .tn-elem[data-elem-id="1554884679827"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117959198 .tn-elem[data-elem-id="1554884679827"] {
                top: calc(70px - 0px + -33px);
                left: calc(50% - 320px + 13px);
                width: 520px;
            }

            #rec117959198 .tn-elem[data-elem-id="1554884679827"] .tn-atom {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117959198 .tn-elem[data-elem-id="1554884679827"] {
                top: calc(100px - 0px + -53px);
                left: calc(50% - 230px + 0px);
                width: 460px;
            }

            #rec117959198 .tn-elem[data-elem-id="1554884679827"] {
                text-align: center;
            }

            #rec117959198 .tn-elem[data-elem-id="1554884679827"] .tn-atom {
                font-size: 13px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117959198 .tn-elem[data-elem-id="1554884679827"] {
                top: calc(110px - 0px + -65px);
                left: calc(50% - 150px + 0px);
                width: 300 pxpx;
            }

            #rec117959198 .tn-elem[data-elem-id="1554884679827"] .tn-atom {
                font-size: 12px;
            }
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="117959198" data-artboard-height="170"
             data-artboard-height-res-640="140" data-artboard-height-res-480="200" data-artboard-height-res-320="220"
             data-artboard-height_vh="" data-artboard-valign="center" data-artboard-ovrflw=""
             data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="170"
             data-artboard-proxy-max-height="170">
            <div class="t396__carrier" data-artboard-recid="117959198">
            </div>
            <div class="t396__elem tn-elem tn-elem__1179591981554884679803" data-elem-id="1554884679803"
                 data-elem-type="text" data-field-top-value="-8" data-field-top-res-960-value="-3"
                 data-field-top-res-640-value="2" data-field-top-res-480-value="-18" data-field-top-res-320-value="-26"
                 data-field-left-value="20" data-field-left-res-960-value="12" data-field-left-res-640-value="13"
                 data-field-left-res-480-value="0" data-field-left-res-320-value="0" data-field-width-value="710"
                 data-field-width-res-960-value="510" data-field-width-res-640-value="380"
                 data-field-width-res-480-value="310" data-field-width-res-320-value="320"
                 data-field-axisy-value="center" data-field-axisx-value="left" data-field-axisx-res-480-value="center"
                 data-field-container-value="grid" data-field-container-res-480-value="grid"
                 data-field-topunits-value="" data-field-leftunits-value="" data-field-heightunits-value=""
                 data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 53px;
			left: 251.5px;
			width: 710px;
			">
                <div class="tn-atom" field="tn_text_1554884679803">
                    Приемная комиссия<br>
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179591981554884679827" data-elem-id="1554884679827"
                 data-elem-type="text" data-field-top-value="-50" data-field-top-res-960-value="-42"
                 data-field-top-res-640-value="-33" data-field-top-res-480-value="-53"
                 data-field-top-res-320-value="-65" data-field-left-value="20" data-field-left-res-960-value="12"
                 data-field-left-res-640-value="13" data-field-left-res-480-value="0" data-field-left-res-320-value="0"
                 data-field-width-value="550" data-field-width-res-960-value="600" data-field-width-res-640-value="520"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="300px"
                 data-field-axisy-value="center" data-field-axisx-value="left" data-field-axisx-res-480-value="center"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 25.5px;
		left: 251.5px;
		width: 550px;
		">
                <div class="tn-atom" field="tn_text_1554884679827">
                    СТРУКТУРНОЕ ПОДРАЗДЕЛЕНИЕ КОЛЛЕДЖ<br>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            t396_init('117959198');

        });
    </script>
    <!-- /T396 -->
</div>
<div id="rec125756112" class="r t-rec t-screenmin-980px" style="background-color:#ffffff;
" data-record-type="121" data-screen-min="980px" data-bg-color="#ffffff" data-animationappear="off">
    <!-- T396 -->
    <style>
        #rec125756112 .t396__artboard {
            height: 60px;
            background-color: #ffffff;
            overflow: visible;
        }

        #rec125756112 .t396__filter {
            height: 60px;
        }

        #rec125756112 .t396__carrier {
            height: 60px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .t396__artboard {
                height: 80px;
            }

            #rec125756112 .t396__filter {
                height: 80px;
            }

            #rec125756112 .t396__carrier {
                height: 80px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .t396__artboard {
                height: 60px;
            }

            #rec125756112 .t396__filter {
                height: 60px;
            }

            #rec125756112 .t396__carrier {
                height: 60px;
                background-position: center center;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .t396__artboard {
                height: 391px;
            }

            #rec125756112 .t396__filter {
                height: 391px;
            }

            #rec125756112 .t396__carrier {
                height: 391px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .t396__artboard {
                height: 386px;
            }

            #rec125756112 .t396__filter {
                height: 386px;
            }

            #rec125756112 .t396__carrier {
                height: 386px;
                background-position: center center;
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1474457702916"] {
            color: #525d83;
            z-index: 14;
            top: 11px;
            left: calc(50% - 600px + 75px);
            width: 130px;
        }

        #rec125756112 .tn-elem[data-elem-id="1474457702916"] .tn-atom {
            color: #525d83;
            font-size: 15px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1474457702916"] {
                top: 22px;
                left: calc(50% - 480px + 60px);
                width: 110px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457702916"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1474457702916"] {
                top: 12px;
                left: calc(50% - 320px + 41px);
                width: 90px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457702916"] .tn-atom {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1474457702916"] {
                top: 43px;
                left: calc(50% - 240px + 150px);
                width: 240px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457702916"] .tn-atom {
                font-size: 14px;
                line-height: 1.45;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1474457702916"] {
                top: 39px;
                left: calc(50% - 160px + 80px);
                width: 220px;
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1474457880885"] {
            color: #525d83;
            z-index: 15;
            top: 11px;
            left: calc(50% - 600px + 295px);
            width: 120px;
        }

        #rec125756112 .tn-elem[data-elem-id="1474457880885"] .tn-atom {
            color: #525d83;
            font-size: 15px;
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1474457880885"] {
                top: 22px;
                left: calc(50% - 480px + 230px);
                width: 100px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457880885"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1474457880885"] {
                top: 12px;
                left: calc(50% - 320px + 152px);
                width: 90px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457880885"] .tn-atom {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1474457880885"] {
                top: 105px;
                left: calc(50% - 240px + 150px);
                width: 240px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457880885"] .tn-atom {
                font-size: 14px;
                line-height: 1.45;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1474457880885"] {
                top: 100px;
                left: calc(50% - 160px + 80px);
                width: 220px;
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1474457891812"] {
            color: #525d83;
            z-index: 19;
            top: 11px;
            left: calc(50% - 600px + 527px);
            width: 168px;
        }

        #rec125756112 .tn-elem[data-elem-id="1474457891812"] .tn-atom {
            color: #525d83;
            font-size: 15px;
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1474457891812"] {
                top: 22px;
                left: calc(50% - 480px + 401px);
                width: 145px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457891812"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1474457891812"] {
                top: 12px;
                left: calc(50% - 320px + 272px);
                width: 100px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457891812"] .tn-atom {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1474457891812"] {
                top: 176px;
                left: calc(50% - 240px + 150px);
                width: 240px;
            }

            #rec125756112 .tn-elem[data-elem-id="1474457891812"] .tn-atom {
                font-size: 14px;
                line-height: 1.45;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1474457891812"] {
                top: 172px;
                left: calc(50% - 160px + 80px);
                width: 220px;
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1474466320823"] {
            z-index: 20;
            top: 13px;
            left: calc(50% - 600px + 30px);
            width: 30px;
        }

        #rec125756112 .tn-elem[data-elem-id="1474466320823"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1474466320823"] {
                top: 17px;
                left: calc(50% - 480px + 10px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1474466320823"] {
                top: 12px;
                left: calc(50% - 320px + 11px);
                width: 22px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1474466320823"] {
                top: 34px;
                left: calc(50% - 240px + 90px);
                width: 35px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1474466320823"] {
                top: 30px;
                left: calc(50% - 160px + 30px);
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1474466951488"] {
            z-index: 21;
            top: 10px;
            left: calc(50% - 600px + 250px);
            width: 35px;
        }

        #rec125756112 .tn-elem[data-elem-id="1474466951488"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1474466951488"] {
                top: 17px;
                left: calc(50% - 480px + 180px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1474466951488"] {
                top: 12px;
                left: calc(50% - 320px + 121px);
                width: 25px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1474466951488"] {
                top: 98px;
                left: calc(50% - 240px + 90px);
                width: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1474466951488"] {
                top: 92px;
                left: calc(50% - 160px + 30px);
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1474466969815"] {
            z-index: 27;
            top: 13px;
            left: calc(50% - 600px + 482px);
            width: 32px;
        }

        #rec125756112 .tn-elem[data-elem-id="1474466969815"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1474466969815"] {
                top: 17px;
                left: calc(50% - 480px + 351px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1474466969815"] {
                top: 12px;
                left: calc(50% - 320px + 241px);
                width: 22px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1474466969815"] {
                top: 168px;
                left: calc(50% - 240px + 90px);
                width: 35px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1474466969815"] {
                top: 163px;
                left: calc(50% - 160px + 30px);
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1478011503134"] {
            color: #525d83;
            z-index: 28;
            top: 11px;
            left: calc(50% - 600px + 795px);
            width: 110px;
        }

        #rec125756112 .tn-elem[data-elem-id="1478011503134"] .tn-atom {
            color: #525d83;
            font-size: 15px;
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503134"] {
                top: 22px;
                left: calc(50% - 480px + 630px);
                width: 136px;
            }

            #rec125756112 .tn-elem[data-elem-id="1478011503134"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503134"] {
                top: 12px;
                left: calc(50% - 320px + 412px);
                width: 90px;
            }

            #rec125756112 .tn-elem[data-elem-id="1478011503134"] .tn-atom {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503134"] {
                top: 248px;
                left: calc(50% - 240px + 150px);
                width: 240px;
            }

            #rec125756112 .tn-elem[data-elem-id="1478011503134"] .tn-atom {
                font-size: 14px;
                line-height: 1.45;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503134"] {
                top: 244px;
                left: calc(50% - 160px + 80px);
                width: 220px;
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1478011503142"] {
            color: #525d83;
            z-index: 30;
            top: 11px;
            left: calc(50% - 600px + 1063px);
            width: 110px;
        }

        #rec125756112 .tn-elem[data-elem-id="1478011503142"] .tn-atom {
            color: #525d83;
            font-size: 15px;
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503142"] {
                top: 22px;
                left: calc(50% - 480px + 850px);
                width: 100px;
            }

            #rec125756112 .tn-elem[data-elem-id="1478011503142"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503142"] {
                top: 12px;
                left: calc(50% - 320px + 560px);
                width: 70px;
            }

            #rec125756112 .tn-elem[data-elem-id="1478011503142"] .tn-atom {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503142"] {
                top: 320px;
                left: calc(50% - 240px + 150px);
                width: 240px;
            }

            #rec125756112 .tn-elem[data-elem-id="1478011503142"] .tn-atom {
                font-size: 14px;
                line-height: 1.45;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503142"] {
                top: 315px;
                left: calc(50% - 160px + 80px);
                width: 220px;
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1478011503154"] {
            z-index: 31;
            top: 13px;
            left: calc(50% - 600px + 750px);
            width: 30px;
        }

        #rec125756112 .tn-elem[data-elem-id="1478011503154"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503154"] {
                top: 17px;
                left: calc(50% - 480px + 580px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503154"] {
                top: 12px;
                left: calc(50% - 320px + 381px);
                width: 22px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503154"] {
                top: 239px;
                left: calc(50% - 240px + 90px);
                width: 35px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503154"] {
                top: 235px;
                left: calc(50% - 160px + 30px);
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1478011503169"] {
            z-index: 32;
            top: 10px;
            left: calc(50% - 600px + 1010px);
            width: 35px;
        }

        #rec125756112 .tn-elem[data-elem-id="1478011503169"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503169"] {
                top: 17px;
                left: calc(50% - 480px + 800px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503169"] {
                top: 12px;
                left: calc(50% - 320px + 531px);
                width: 22px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503169"] {
                top: 313px;
                left: calc(50% - 240px + 90px);
                width: 35px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec125756112 .tn-elem[data-elem-id="1478011503169"] {
                top: 307px;
                left: calc(50% - 160px + 30px);
            }
        }

        #rec125756112 .tn-elem[data-elem-id="1548923369213"] {
            z-index: 13;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100vh;
        }

        #rec125756112 .tn-elem[data-elem-id="1548923369213"] .tn-atom {
            opacity: 0.1;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 1);
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="125756112" data-artboard-height="60"
             data-artboard-height-res-960="80" data-artboard-height-res-640="60" data-artboard-height-res-480="391"
             data-artboard-height-res-320="386" data-artboard-height_vh="" data-artboard-valign="center"
             data-artboard-ovrflw="visible" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="60"
             data-artboard-proxy-max-height="60">
            <div class="t396__carrier" data-artboard-recid="125756112">
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121474457702916" data-elem-id="1474457702916"
                 data-elem-type="text" data-field-top-value="11" data-field-top-res-960-value="22"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="43" data-field-top-res-320-value="39"
                 data-field-left-value="75" data-field-left-res-960-value="60" data-field-left-res-640-value="41"
                 data-field-left-res-480-value="150" data-field-left-res-320-value="80" data-field-width-value="130"
                 data-field-width-res-960-value="110" data-field-width-res-640-value="90"
                 data-field-width-res-480-value="240" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 11px;
			left: 306.5px;
			width: 130px;
			">
                <div class="tn-atom" field="tn_text_1474457702916">
                    Диплом гос. образца
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121474457880885" data-elem-id="1474457880885"
                 data-elem-type="text" data-field-top-value="11" data-field-top-res-960-value="22"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="105" data-field-top-res-320-value="100"
                 data-field-left-value="295" data-field-left-res-960-value="230" data-field-left-res-640-value="152"
                 data-field-left-res-480-value="150" data-field-left-res-320-value="80" data-field-width-value="120"
                 data-field-width-res-960-value="100" data-field-width-res-640-value="90"
                 data-field-width-res-480-value="240" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 11px;
			left: 526.5px;
			width: 120px;
			">
                <div class="tn-atom" field="tn_text_1474457880885">
                    Бюджетные места
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121474457891812" data-elem-id="1474457891812"
                 data-elem-type="text" data-field-top-value="11" data-field-top-res-960-value="22"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="176" data-field-top-res-320-value="172"
                 data-field-left-value="527" data-field-left-res-960-value="401" data-field-left-res-640-value="272"
                 data-field-left-res-480-value="150" data-field-left-res-320-value="80" data-field-width-value="168"
                 data-field-width-res-960-value="145" data-field-width-res-640-value="100"
                 data-field-width-res-480-value="240" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 11px;
			left: 758.5px;
			width: 168px;
			">
                <div class="tn-atom" field="tn_text_1474457891812">
                    Поступление в вузы-партнеры
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121474466320823" data-elem-id="1474466320823"
                 data-elem-type="image" data-field-top-value="13" data-field-top-res-960-value="17"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="34" data-field-top-res-320-value="30"
                 data-field-left-value="30" data-field-left-res-960-value="10" data-field-left-res-640-value="11"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="30" data-field-width-value="30"
                 data-field-width-res-640-value="22" data-field-width-res-480-value="35" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                 style="left: 261.5px;
			top: 13px;
			width: 30px;
			">
                <div class="tn-atom">
                    <img class="tn-atom__img t-img loaded"
                         data-original="https://static.tildacdn.com/tild3265-3765-4238-a233-613963316432/11mu_diploma_white_.svg"
                         imgfield="tn_img_1474466320823" src="./files/11mu_diploma_white_.svg">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121474466951488" data-elem-id="1474466951488"
                 data-elem-type="image" data-field-top-value="10" data-field-top-res-960-value="17"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="98" data-field-top-res-320-value="92"
                 data-field-left-value="250" data-field-left-res-960-value="180" data-field-left-res-640-value="121"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="30" data-field-width-value="35"
                 data-field-width-res-640-value="25" data-field-width-res-480-value="40" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                 style="left: 481.5px;
		top: 10px;
		width: 35px;
		">
                <div class="tn-atom">
                    <img class="tn-atom__img t-img loaded"
                         data-original="https://static.tildacdn.com/tild6265-3262-4064-a230-626231383839/Tilda_Icons_24fn_dis.svg"
                         imgfield="tn_img_1474466951488" src="./files/Tilda_Icons_24fn_dis.svg">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121474466969815" data-elem-id="1474466969815"
                 data-elem-type="image" data-field-top-value="13" data-field-top-res-960-value="17"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="168" data-field-top-res-320-value="163"
                 data-field-left-value="482" data-field-left-res-960-value="351" data-field-left-res-640-value="241"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="30" data-field-width-value="32"
                 data-field-width-res-640-value="22" data-field-width-res-480-value="35" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                 style="left: 713.5px;
	top: 13px;
	width: 32px;
	">
                <div class="tn-atom">
                    <img class="tn-atom__img t-img loaded"
                         data-original="https://static.tildacdn.com/tild6138-6337-4737-b235-626161623962/Tilda_Icons_1ed_hat_.svg"
                         imgfield="tn_img_1474466969815" src="./files/Tilda_Icons_1ed_hat_.svg">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121478011503134" data-elem-id="1478011503134"
                 data-elem-type="text" data-field-top-value="11" data-field-top-res-960-value="22"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="248" data-field-top-res-320-value="244"
                 data-field-left-value="795" data-field-left-res-960-value="630" data-field-left-res-640-value="412"
                 data-field-left-res-480-value="150" data-field-left-res-320-value="80" data-field-width-value="110"
                 data-field-width-res-960-value="136" data-field-width-res-640-value="90"
                 data-field-width-res-480-value="240" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 11px;
left: 1026.5px;
width: 110px;
">
                <div class="tn-atom" field="tn_text_1478011503134">
                    Содействие в трудоустройстве
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121478011503142" data-elem-id="1478011503142"
                 data-elem-type="text" data-field-top-value="11" data-field-top-res-960-value="22"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="320" data-field-top-res-320-value="315"
                 data-field-left-value="1063" data-field-left-res-960-value="850" data-field-left-res-640-value="560"
                 data-field-left-res-480-value="150" data-field-left-res-320-value="80" data-field-width-value="110"
                 data-field-width-res-960-value="100" data-field-width-res-640-value="70"
                 data-field-width-res-480-value="240" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 11px;
left: 1294.5px;
width: 110px;
">
                <div class="tn-atom" field="tn_text_1478011503142">
                    Отсрочка от армии
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121478011503154" data-elem-id="1478011503154"
                 data-elem-type="image" data-field-top-value="13" data-field-top-res-960-value="17"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="239" data-field-top-res-320-value="235"
                 data-field-left-value="750" data-field-left-res-960-value="580" data-field-left-res-640-value="381"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="30" data-field-width-value="30"
                 data-field-width-res-640-value="22" data-field-width-res-480-value="35" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                 style="left: 981.5px;
top: 13px;
width: 30px;
">
                <div class="tn-atom">
                    <img class="tn-atom__img t-img loaded"
                         data-original="https://static.tildacdn.com/tild3330-3761-4930-b464-633833353362/Tilda_Icons_28_law_c.svg"
                         imgfield="tn_img_1478011503154" src="./files/Tilda_Icons_28_law_c.svg">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121478011503169" data-elem-id="1478011503169"
                 data-elem-type="image" data-field-top-value="10" data-field-top-res-960-value="17"
                 data-field-top-res-640-value="12" data-field-top-res-480-value="313" data-field-top-res-320-value="307"
                 data-field-left-value="1010" data-field-left-res-960-value="800" data-field-left-res-640-value="531"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="30" data-field-width-value="35"
                 data-field-width-res-640-value="22" data-field-width-res-480-value="35" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                 style="left: 1241.5px;
top: 10px;
width: 35px;
">
                <div class="tn-atom">
                    <img class="tn-atom__img t-img loaded"
                         data-original="https://static.tildacdn.com/tild6439-6263-4465-b936-653062343135/Tilda_Icons_36_23feb.svg"
                         imgfield="tn_img_1478011503169" src="./files/Tilda_Icons_36_23feb.svg">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1257561121548923369213" data-elem-id="1548923369213"
                 data-elem-type="shape" data-field-top-value="0" data-field-left-value="0" data-field-height-value="100"
                 data-field-width-value="100" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="window" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="%" data-field-widthunits-value="%"
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 1663px;
left: 0px;
top: 0px;
height: 60px;
">
                <div class="tn-atom">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            t396_init('125756112');

        });
    </script>
    <!-- /T396 -->
</div>
<div id="rec117960119" class="r t-rec t-rec_pt_60 t-rec_pb_75" style="padding-top:60px;
padding-bottom:75px;
background-color:#ffffff;
" data-animationappear="off" data-record-type="650" data-bg-color="#ffffff">
    <!-- T650 -->
    <div class="t650">
        <div class="t-container">
            <div class="t650__row">
                <div class="t650__col t-col t-col_4 t-align_left">
                    <a href="https://artcollege.ru/priem#doc" target="">
                        <div class="t650__inner-col" style="background-color: rgb(255, 255, 255);
					border-radius: 5px;
					box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 0px;
					height: 201px;
					">
                            <div class="t650__text">
                                <div class="t-name t-name_lg " style="" field="li_title__1563968327931">
                                    Документы<br>
                                </div>
                            </div>
                            <div class="t650__btn-container">
                                <div class="t650__btntext-wrapper">
                                    <div class="t650__btn-text t-btntext t-btntext_sm " style="color:#7b3ef8;
							font-weight:400;
							">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t650__col t-col t-col_4 t-align_left">
                    <a href="https://st.educom.ru/eduoffices/gateways/get_file.php?id={3366AA76-11D7-0FC9-E467-9C56A6325DFB}&amp;
			name=Acc.pdf" target="_blank">
                        <div class="t650__inner-col" style="background-color: rgb(255, 255, 255);
			border-radius: 5px;
			box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 0px;
			height: 201px;
			">
                            <div class="t650__text">
                                <div class="t-name t-name_lg " style="" field="li_title__1567690646425">
                                    Свидетельство о государственной аккредитации
                                </div>
                            </div>
                            <div class="t650__btn-container">
                                <div class="t650__btntext-wrapper">
                                    <div class="t650__btn-text t-btntext t-btntext_sm " style="color:#7b3ef8;
						font-weight:400;
						">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t650__col t-col t-col_4 t-align_left">
                    <a href="que.php" target="_blank">
                        <div class="t650__inner-col" style="background-color: rgb(255, 255, 255);
			border-radius: 5px;
			box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 0px;
			height: 201px;
			">
                            <div class="t650__text">
                                <div class="t-name t-name_lg " style="" field="li_title__1489140981614">
                                    Частые вопросы<br>
                                </div>
                            </div>
                            <div class="t650__btn-container">
                                <div class="t650__btntext-wrapper">
                                    <div class="t650__btn-text t-btntext t-btntext_sm " style="color:#7b3ef8;
					font-weight:400;
					">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="t650__row">
                <div class="t650__col t-col t-col_4 t-align_left">
                    <a href="https://1-mok.mskobr.ru/reception/perechen-ispytaniy/#index" target="_blank">
                        <div class="t650__inner-col" style="background-color: rgb(255, 255, 255);
			border-radius: 5px;
			box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 0px;
			height: 143px;
			">
                            <div class="t650__text">
                                <div class="t-name t-name_lg " style="" field="li_title__1562865002724">
                                    Вступительные испытания<br>
                                </div>
                            </div>
                            <div class="t650__btn-container">
                                <div class="t650__btntext-wrapper">
                                    <div class="t650__btn-text t-btntext t-btntext_sm " style="color:#7b3ef8;
					font-weight:400;
					">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t650__col t-col t-col_4 t-align_left">
                    <a href="https://1-mok.mskobr.ru/reception/medosmotr/#index" target="_blank">
                        <div class="t650__inner-col" style="background-color: rgb(255, 255, 255);
		border-radius: 5px;
		box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 0px;
		height: 143px;
		">
                            <div class="t650__text">
                                <div class="t-name t-name_lg " style="" field="li_title__1562865003695">
                                    Медицинский осмотр<br>
                                </div>
                            </div>
                            <div class="t650__btn-container">
                                <div class="t650__btntext-wrapper">
                                    <div class="t650__btn-text t-btntext t-btntext_sm " style="color:#7b3ef8;
				font-weight:400;
				">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t650__col t-col t-col_4 t-align_left">
                    <a href="https://1-mok.mskobr.ru/reception/mos/#index" target="">
                        <div class="t650__inner-col" style="background-color: rgb(255, 255, 255);
		border-radius: 5px;
		box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 0px;
		height: 143px;
		">
                            <div class="t650__text">
                                <div class="t-name t-name_lg " style="" field="li_title__1567688808358">
                                    Бюджетное обучение
                                </div>
                            </div>
                            <div class="t650__btn-container">
                                <div class="t650__btntext-wrapper">
                                    <div class="t650__btn-text t-btntext t-btntext_sm " style="color:#7b3ef8;
					font-weight:400;
					">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="t650__row">
                <div class="t650__col t-col t-col_4 t-align_left">
                    <a href="https://1-mok.mskobr.ru/reception/platnoe/#index" target="">
                        <div class="t650__inner-col" style="background-color: rgb(255, 255, 255);
			border-radius: 5px;
			box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 10px 0px;
			height: 143px;
			">
                            <div class="t650__text">
                                <div class="t-name t-name_lg " style="" field="li_title__1567688835026">
                                    Платное обучение
                                </div>
                            </div>
                            <div class="t650__btn-container">
                                <div class="t650__btntext-wrapper">
                                    <div class="t650__btn-text t-btntext t-btntext_sm " style="color:#7b3ef8;
						font-weight:400;
						">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        #rec117960119 .t650__inner-col:hover {
            background-color: !important;
            box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.10) !important;

        }</style>
    <script type="text/javascript">
        $(document).ready(function () {
            t650_unifyHeights('117960119');
        });
        var t650__doResize_117960119;
        $(window).resize(function () {
            clearTimeout(t650__doResize_117960119);
            t650__doResize = setTimeout(function () {
                t650_unifyHeights('117960119');
            }, 200);
        });
        $(window).load(function () {
            t650_unifyHeights('117960119');
        });
        $('.t650').bind('displayChanged', function () {
            t650_unifyHeights('117960119');
        });
    </script>
</div>
<div id="rec127582147" class="r t-rec r_showed r_anim" style=" " data-record-type="215">
    <a name="specialty" style="font-size:0;
	">
    </a>
</div>
<div id="rec117961302" class="r t-rec t-rec_pb_15 r_showed r_anim" style="padding-bottom:15px;
" data-record-type="43">
    <!-- T030 -->
    <div class="t030">
        <div class="t-container t-align_center">
            <div class="t-col t-col_10 t-prefix_1">
                <div class="t030__title t-title t-title_xxs" field="title" style="">
                    Специальности Колледжа <br>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="rec126241845" class="r t-rec" style=" " data-animationappear="off" data-record-type="121">
    <!-- T396 -->
    <style>
        #rec126241845 .t396__artboard {
            height: 185px;
            background-color: #ffffff;
        }

        #rec126241845 .t396__filter {
            height: 185px;
        }

        #rec126241845 .t396__carrier {
            height: 185px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec126241845 .t396__artboard {
                height: 175px;
                background-color: #ffffff;
            }

            #rec126241845 .t396__filter {
                height: 175px;
            }

            #rec126241845 .t396__carrier {
                height: 175px;
                background-position: center center;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241845 .t396__artboard {
                height: 105px;
            }

            #rec126241845 .t396__filter {
                height: 105px;
            }

            #rec126241845 .t396__carrier {
                height: 105px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241845 .t396__artboard {
                height: 375px;
            }

            #rec126241845 .t396__filter {
                height: 375px;
            }

            #rec126241845 .t396__carrier {
                height: 375px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241845 .t396__artboard {
                height: 430px;
            }

            #rec126241845 .t396__filter {
                height: 430px;
            }

            #rec126241845 .t396__carrier {
                height: 430px;
            }
        }

        #rec126241845 .tn-elem[data-elem-id="1474899596906"] {
            z-index: 3;
            top: 16px;
            left: calc(50% - 600px + 120px);
            width: 280px;
            height: 145px;
        }

        #rec126241845 .tn-elem[data-elem-id="1474899596906"] .tn-atom {
            background-color: #5e49d6;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241845 .tn-elem[data-elem-id="1474899596906"] {
                top: 16px;
                left: calc(50% - 480px + 91px);
                width: 229px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241845 .tn-elem[data-elem-id="1474899596906"] {
                top: 11px;
                left: calc(50% - 320px + 25px);
                width: 183px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241845 .tn-elem[data-elem-id="1474899596906"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 197px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241845 .tn-elem[data-elem-id="1474899596906"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 198px;
            }
        }

        #rec126241845 .tn-elem[data-elem-id="1474900321386"] {
            color: #000000;
            z-index: 8;
            top: 39px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec126241845 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
            color: #000000;
            font-size: 30px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241845 .tn-elem[data-elem-id="1474900321386"] {
                top: 41px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 28px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241845 .tn-elem[data-elem-id="1474900321386"] {
                top: 36px;
                left: calc(50% - 320px + 231px);
                width: 240px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 19px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241845 .tn-elem[data-elem-id="1474900321386"] {
                top: 242px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474900321386"] {
                text-align: center;
            }

            #rec126241845 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241845 .tn-elem[data-elem-id="1474900321386"] {
                top: 249px;
                left: calc(50% - 160px + 50px);
                width: 220px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                line-height: 1.2;
            }
        }

        #rec126241845 .tn-elem[data-elem-id="1474900324080"] {
            color: #000000;
            z-index: 9;
            top: 107px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec126241845 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
            color: #000000;
            font-size: 18px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241845 .tn-elem[data-elem-id="1474900324080"] {
                top: 103px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241845 .tn-elem[data-elem-id="1474900324080"] {
                top: 337px;
                left: calc(50% - 320px + 91px);
                width: 460px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241845 .tn-elem[data-elem-id="1474900324080"] {
                top: 290px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241845 .tn-elem[data-elem-id="1474900324080"] {
                top: 320px;
                left: calc(50% - 160px + 30px);
                width: 260px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                line-height: 1.45;
            }
        }

        #rec126241845 .tn-elem[data-elem-id="1474900287008"] {
            z-index: 1;
            top: 16px;
            left: calc(50% - 600px + 120px);
            width: 960px;
            height: 145px;
        }

        #rec126241845 .tn-elem[data-elem-id="1474900287008"] .tn-atom {
            border-width: 1px;
            background-color: #ffffff;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 1199px) {
            #rec126241845 .tn-elem[data-elem-id="1474900287008"] {
                top: 16px;
                left: calc(50% - 480px + 90px);
                width: 780px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241845 .tn-elem[data-elem-id="1474900287008"] {
                top: 11px;
                left: calc(50% - 320px + 25px);
                width: 590px;
                height: 81px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241845 .tn-elem[data-elem-id="1474900287008"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 341px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241845 .tn-elem[data-elem-id="1474900287008"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 388px;
            }
        }

        #rec126241845 .tn-elem[data-elem-id="1474995998327"] {
            color: #ffffff;
            text-align: center;
            z-index: 10;
            top: 97px;
            left: calc(50% - 600px + 450px);
            width: 120px;
            height: 43px;
        }

        #rec126241845 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-color: #7c49e3;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        #rec126241845 .tn-elem[data-elem-id="1474995998327"] .tn-atom:hover {
            background-color: #8f57ff;
            color: #ffffff;
        }

        @media screen and (max-width: 1199px) {
            #rec126241845 .tn-elem[data-elem-id="1474995998327"] {
                top: 98px;
                left: calc(50% - 480px + 377px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241845 .tn-elem[data-elem-id="1474995998327"] {
                top: 33px;
                left: calc(50% - 320px + 481px);
                height: 35px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
                background-color: #7c49e3;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241845 .tn-elem[data-elem-id="1474995998327"] {
                top: 296px;
                left: calc(50% - 240px + 125px);
                width: 230px;
                height: 40px;
            }

            #rec126241845 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
                background-color: #7c49e3;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241845 .tn-elem[data-elem-id="1474995998327"] {
                top: 333px;
                left: calc(50% - 160px + 50px);
            }
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="126241845" data-artboard-height="185"
             data-artboard-height-res-960="175" data-artboard-height-res-640="105" data-artboard-height-res-480="375"
             data-artboard-height-res-320="430" data-artboard-height_vh="" data-artboard-valign="center"
             data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="185"
             data-artboard-proxy-max-height="185">
            <div class="t396__carrier" data-artboard-recid="126241845">
            </div>
            <div class="t396__filter" data-artboard-recid="126241845">
            </div>
            <div class="t396__elem tn-elem tn-elem__1262418451474899596906" data-elem-id="1474899596906"
                 data-elem-type="shape" data-field-top-value="16" data-field-top-res-960-value="16"
                 data-field-top-res-640-value="11" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="91" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="80"
                 data-field-height-res-480-value="197" data-field-height-res-320-value="198"
                 data-field-width-value="280" data-field-width-res-960-value="229" data-field-width-res-640-value="183"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 280px;
				left: 351.5px;
				top: 16px;
				height: 145px;
				">
                <div class="tn-atom t-bgimg loaded"
                     data-original="https://static.tildacdn.com/tild3631-3664-4365-b162-313061363237/12.jpg"
                     style="background-image: url(&quot;
					https://static.tildacdn.com/tild3631-3664-4365-b162-313061363237/12.jpg&quot;
					);
					" src="">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262418451474900321386" data-elem-id="1474900321386"
                 data-elem-type="text" data-field-top-value="39" data-field-top-res-960-value="41"
                 data-field-top-res-640-value="36" data-field-top-res-480-value="242" data-field-top-res-320-value="249"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="231"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="50" data-field-width-value="580"
                 data-field-width-res-960-value="450" data-field-width-res-640-value="240"
                 data-field-width-res-480-value="300" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 39px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900321386">
                    Очное после 9 класса
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262418451474900324080" data-elem-id="1474900324080"
                 data-elem-type="text" data-field-top-value="107" data-field-top-res-960-value="103"
                 data-field-top-res-640-value="337" data-field-top-res-480-value="290"
                 data-field-top-res-320-value="320" data-field-left-value="450" data-field-left-res-960-value="377"
                 data-field-left-res-640-value="91" data-field-left-res-480-value="90"
                 data-field-left-res-320-value="30" data-field-width-value="580" data-field-width-res-960-value="450"
                 data-field-width-res-640-value="460" data-field-width-res-480-value="300"
                 data-field-width-res-320-value="260" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 107px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900324080">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262418451474900287008" data-elem-id="1474900287008"
                 data-elem-type="shape" data-field-top-value="16" data-field-top-res-960-value="16"
                 data-field-top-res-640-value="11" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="90" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="81"
                 data-field-height-res-480-value="341" data-field-height-res-320-value="388"
                 data-field-width-value="960" data-field-width-res-960-value="780" data-field-width-res-640-value="590"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 960px;
		left: 351.5px;
		top: 16px;
		height: 145px;
		">
                <div class="tn-atom">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262418451474995998327" data-elem-id="1474995998327"
                 data-elem-type="button" data-field-top-value="97" data-field-top-res-960-value="98"
                 data-field-top-res-640-value="33" data-field-top-res-480-value="296" data-field-top-res-320-value="333"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="481"
                 data-field-left-res-480-value="125" data-field-left-res-320-value="50" data-field-height-value="43"
                 data-field-height-res-640-value="35" data-field-height-res-480-value="40" data-field-width-value="120"
                 data-field-width-res-480-value="230" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,height,container,axisx,axisy,caption,leftunits,topunits" style="top: 97px;
	left: 681.5px;
	width: 120px;
	height: 43px;
	">
                <a class="tn-atom" href="file:///D:/OSPanel/domains/localhost/lazarev/9klass.html ">
                    Подробнее</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            t396_init('126241845');

        });
    </script>
    <!-- /T396 -->
</div>
<div id="rec126241948" class="r t-rec" style=" " data-animationappear="off" data-record-type="121">
    <!-- T396 -->
    <style>
        #rec126241948 .t396__artboard {
            height: 175px;
            background-color: #ffffff;
        }

        #rec126241948 .t396__filter {
            height: 175px;
        }

        #rec126241948 .t396__carrier {
            height: 175px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec126241948 .t396__artboard {
                height: 175px;
                background-color: #ffffff;
            }

            #rec126241948 .t396__filter {
                height: 175px;
            }

            #rec126241948 .t396__carrier {
                height: 175px;
                background-position: center center;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241948 .t396__artboard {
                height: 105px;
            }

            #rec126241948 .t396__filter {
                height: 105px;
            }

            #rec126241948 .t396__carrier {
                height: 105px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241948 .t396__artboard {
                height: 375px;
            }

            #rec126241948 .t396__filter {
                height: 375px;
            }

            #rec126241948 .t396__carrier {
                height: 375px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241948 .t396__artboard {
                height: 430px;
            }

            #rec126241948 .t396__filter {
                height: 430px;
            }

            #rec126241948 .t396__carrier {
                height: 430px;
            }
        }

        #rec126241948 .tn-elem[data-elem-id="1474899596906"] {
            z-index: 3;
            top: 16px;
            left: calc(50% - 600px + 120px);
            width: 280px;
            height: 145px;
        }

        #rec126241948 .tn-elem[data-elem-id="1474899596906"] .tn-atom {
            background-color: #ebebeb;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241948 .tn-elem[data-elem-id="1474899596906"] {
                top: 16px;
                left: calc(50% - 480px + 91px);
                width: 229px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241948 .tn-elem[data-elem-id="1474899596906"] {
                top: 13px;
                left: calc(50% - 320px + 25px);
                width: 183px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241948 .tn-elem[data-elem-id="1474899596906"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 197px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241948 .tn-elem[data-elem-id="1474899596906"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 198px;
            }
        }

        #rec126241948 .tn-elem[data-elem-id="1474900321386"] {
            color: #000000;
            z-index: 8;
            top: 39px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec126241948 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
            color: #000000;
            font-size: 30px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241948 .tn-elem[data-elem-id="1474900321386"] {
                top: 41px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec126241948 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 28px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241948 .tn-elem[data-elem-id="1474900321386"] {
                top: 39px;
                left: calc(50% - 320px + 231px);
                width: 240px;
            }

            #rec126241948 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 19px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241948 .tn-elem[data-elem-id="1474900321386"] {
                top: 242px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec126241948 .tn-elem[data-elem-id="1474900321386"] {
                text-align: center;
            }

            #rec126241948 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241948 .tn-elem[data-elem-id="1474900321386"] {
                top: 249px;
                left: calc(50% - 160px + 50px);
                width: 220px;
            }

            #rec126241948 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                line-height: 1.2;
            }
        }

        #rec126241948 .tn-elem[data-elem-id="1474900324080"] {
            color: #000000;
            z-index: 9;
            top: 107px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec126241948 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
            color: #000000;
            font-size: 18px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241948 .tn-elem[data-elem-id="1474900324080"] {
                top: 103px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec126241948 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241948 .tn-elem[data-elem-id="1474900324080"] {
                top: 339px;
                left: calc(50% - 320px + 91px);
                width: 460px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241948 .tn-elem[data-elem-id="1474900324080"] {
                top: 290px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec126241948 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241948 .tn-elem[data-elem-id="1474900324080"] {
                top: 320px;
                left: calc(50% - 160px + 30px);
                width: 260px;
            }

            #rec126241948 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                line-height: 1.45;
            }
        }

        #rec126241948 .tn-elem[data-elem-id="1474900287008"] {
            z-index: 1;
            top: 16px;
            left: calc(50% - 600px + 120px);
            width: 960px;
            height: 145px;
        }

        #rec126241948 .tn-elem[data-elem-id="1474900287008"] .tn-atom {
            border-width: 1px;
            background-color: #ffffff;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 1199px) {
            #rec126241948 .tn-elem[data-elem-id="1474900287008"] {
                top: 16px;
                left: calc(50% - 480px + 90px);
                width: 780px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241948 .tn-elem[data-elem-id="1474900287008"] {
                top: 13px;
                left: calc(50% - 320px + 25px);
                width: 590px;
                height: 81px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241948 .tn-elem[data-elem-id="1474900287008"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 341px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241948 .tn-elem[data-elem-id="1474900287008"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 388px;
            }
        }

        #rec126241948 .tn-elem[data-elem-id="1474995998327"] {
            color: #ffffff;
            text-align: center;
            z-index: 10;
            top: 97px;
            left: calc(50% - 600px + 450px);
            width: 120px;
            height: 43px;
        }

        #rec126241948 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-color: #7c49e3;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        #rec126241948 .tn-elem[data-elem-id="1474995998327"] .tn-atom:hover {
            background-color: #8f57ff;
            color: #ffffff;
        }

        @media screen and (max-width: 1199px) {
            #rec126241948 .tn-elem[data-elem-id="1474995998327"] {
                top: 98px;
                left: calc(50% - 480px + 377px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241948 .tn-elem[data-elem-id="1474995998327"] {
                top: 38px;
                left: calc(50% - 320px + 481px);
                height: 35px;
            }

            #rec126241948 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
                background-color: #7c49e3;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241948 .tn-elem[data-elem-id="1474995998327"] {
                top: 296px;
                left: calc(50% - 240px + 125px);
                width: 230px;
                height: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241948 .tn-elem[data-elem-id="1474995998327"] {
                top: 333px;
                left: calc(50% - 160px + 50px);
            }
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="126241948" data-artboard-height="175"
             data-artboard-height-res-960="175" data-artboard-height-res-640="105" data-artboard-height-res-480="375"
             data-artboard-height-res-320="430" data-artboard-height_vh="" data-artboard-valign="center"
             data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="175"
             data-artboard-proxy-max-height="175">
            <div class="t396__carrier" data-artboard-recid="126241948">
            </div>
            <div class="t396__filter" data-artboard-recid="126241948">
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419481474899596906" data-elem-id="1474899596906"
                 data-elem-type="shape" data-field-top-value="16" data-field-top-res-960-value="16"
                 data-field-top-res-640-value="13" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="91" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="80"
                 data-field-height-res-480-value="197" data-field-height-res-320-value="198"
                 data-field-width-value="280" data-field-width-res-960-value="229" data-field-width-res-640-value="183"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 280px;
				left: 351.5px;
				top: 16px;
				height: 145px;
				">
                <div class="tn-atom t-bgimg loaded"
                     data-original="https://static.tildacdn.com/tild3939-3761-4134-a135-313133363861/5.jpg"
                     style="background-image: url(&quot;
					https://static.tildacdn.com/tild3939-3761-4134-a135-313133363861/5.jpg&quot;
					);
					" src="">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419481474900321386" data-elem-id="1474900321386"
                 data-elem-type="text" data-field-top-value="39" data-field-top-res-960-value="41"
                 data-field-top-res-640-value="39" data-field-top-res-480-value="242" data-field-top-res-320-value="249"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="231"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="50" data-field-width-value="580"
                 data-field-width-res-960-value="450" data-field-width-res-640-value="240"
                 data-field-width-res-480-value="300" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 39px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900321386">
                    Очное после 11 класса
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419481474900324080" data-elem-id="1474900324080"
                 data-elem-type="text" data-field-top-value="107" data-field-top-res-960-value="103"
                 data-field-top-res-640-value="339" data-field-top-res-480-value="290"
                 data-field-top-res-320-value="320" data-field-left-value="450" data-field-left-res-960-value="377"
                 data-field-left-res-640-value="91" data-field-left-res-480-value="90"
                 data-field-left-res-320-value="30" data-field-width-value="580" data-field-width-res-960-value="450"
                 data-field-width-res-640-value="460" data-field-width-res-480-value="300"
                 data-field-width-res-320-value="260" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 107px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900324080">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419481474900287008" data-elem-id="1474900287008"
                 data-elem-type="shape" data-field-top-value="16" data-field-top-res-960-value="16"
                 data-field-top-res-640-value="13" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="90" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="81"
                 data-field-height-res-480-value="341" data-field-height-res-320-value="388"
                 data-field-width-value="960" data-field-width-res-960-value="780" data-field-width-res-640-value="590"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 960px;
		left: 351.5px;
		top: 16px;
		height: 145px;
		">
                <div class="tn-atom">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419481474995998327" data-elem-id="1474995998327"
                 data-elem-type="button" data-field-top-value="97" data-field-top-res-960-value="98"
                 data-field-top-res-640-value="38" data-field-top-res-480-value="296" data-field-top-res-320-value="333"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="481"
                 data-field-left-res-480-value="125" data-field-left-res-320-value="50" data-field-height-value="43"
                 data-field-height-res-640-value="35" data-field-height-res-480-value="40" data-field-width-value="120"
                 data-field-width-res-480-value="230" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,height,container,axisx,axisy,caption,leftunits,topunits" style="top: 97px;
	left: 681.5px;
	width: 120px;
	height: 43px;
	">
                <a class="tn-atom" href="https://artcollege.ru/after11">
                    Подробнее</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            t396_init('126241948');

        });
    </script>
    <!-- /T396 -->
</div>
<div id="rec126241960" class="r t-rec" style=" " data-animationappear="off" data-record-type="121">
    <!-- T396 -->
    <style>
        #rec126241960 .t396__artboard {
            height: 195px;
            background-color: #ffffff;
        }

        #rec126241960 .t396__filter {
            height: 195px;
        }

        #rec126241960 .t396__carrier {
            height: 195px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec126241960 .t396__artboard {
                height: 195px;
                background-color: #ffffff;
            }

            #rec126241960 .t396__filter {
                height: 195px;
            }

            #rec126241960 .t396__carrier {
                height: 195px;
                background-position: center center;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241960 .t396__artboard {
                height: 115px;
            }

            #rec126241960 .t396__filter {
                height: 115px;
            }

            #rec126241960 .t396__carrier {
                height: 115px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241960 .t396__artboard {
                height: 385px;
            }

            #rec126241960 .t396__filter {
                height: 385px;
            }

            #rec126241960 .t396__carrier {
                height: 385px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241960 .t396__artboard {
                height: 390px;
            }

            #rec126241960 .t396__filter {
                height: 390px;
            }

            #rec126241960 .t396__carrier {
                height: 390px;
            }
        }

        #rec126241960 .tn-elem[data-elem-id="1474899596906"] {
            z-index: 3;
            top: 26px;
            left: calc(50% - 600px + 120px);
            width: 280px;
            height: 145px;
        }

        #rec126241960 .tn-elem[data-elem-id="1474899596906"] .tn-atom {
            background-color: #ebebeb;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241960 .tn-elem[data-elem-id="1474899596906"] {
                top: 26px;
                left: calc(50% - 480px + 91px);
                width: 229px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241960 .tn-elem[data-elem-id="1474899596906"] {
                top: 17px;
                left: calc(50% - 320px + 25px);
                width: 183px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241960 .tn-elem[data-elem-id="1474899596906"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 197px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241960 .tn-elem[data-elem-id="1474899596906"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 198px;
            }
        }

        #rec126241960 .tn-elem[data-elem-id="1474900321386"] {
            color: #000000;
            z-index: 8;
            top: 49px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec126241960 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
            color: #000000;
            font-size: 30px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241960 .tn-elem[data-elem-id="1474900321386"] {
                top: 51px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec126241960 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 28px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241960 .tn-elem[data-elem-id="1474900321386"] {
                top: 43px;
                left: calc(50% - 320px + 231px);
                width: 240px;
            }

            #rec126241960 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 19px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241960 .tn-elem[data-elem-id="1474900321386"] {
                top: 242px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec126241960 .tn-elem[data-elem-id="1474900321386"] {
                text-align: center;
            }

            #rec126241960 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241960 .tn-elem[data-elem-id="1474900321386"] {
                top: 249px;
                left: calc(50% - 160px + 50px);
                width: 220px;
            }

            #rec126241960 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                line-height: 1.2;
            }
        }

        #rec126241960 .tn-elem[data-elem-id="1474900324080"] {
            color: #000000;
            z-index: 9;
            top: 117px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec126241960 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
            color: #000000;
            font-size: 18px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec126241960 .tn-elem[data-elem-id="1474900324080"] {
                top: 113px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec126241960 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241960 .tn-elem[data-elem-id="1474900324080"] {
                top: 343px;
                left: calc(50% - 320px + 91px);
                width: 460px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241960 .tn-elem[data-elem-id="1474900324080"] {
                top: 290px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec126241960 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241960 .tn-elem[data-elem-id="1474900324080"] {
                top: 320px;
                left: calc(50% - 160px + 30px);
                width: 260px;
            }

            #rec126241960 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                line-height: 1.45;
            }
        }

        #rec126241960 .tn-elem[data-elem-id="1474900287008"] {
            z-index: 1;
            top: 26px;
            left: calc(50% - 600px + 120px);
            width: 960px;
            height: 145px;
        }

        #rec126241960 .tn-elem[data-elem-id="1474900287008"] .tn-atom {
            border-width: 1px;
            background-color: #ffffff;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 1199px) {
            #rec126241960 .tn-elem[data-elem-id="1474900287008"] {
                top: 26px;
                left: calc(50% - 480px + 90px);
                width: 780px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241960 .tn-elem[data-elem-id="1474900287008"] {
                top: 17px;
                left: calc(50% - 320px + 25px);
                width: 590px;
                height: 81px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241960 .tn-elem[data-elem-id="1474900287008"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 341px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241960 .tn-elem[data-elem-id="1474900287008"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 346px;
            }
        }

        #rec126241960 .tn-elem[data-elem-id="1474995998327"] {
            color: #ffffff;
            text-align: center;
            z-index: 10;
            top: 107px;
            left: calc(50% - 600px + 450px);
            width: 120px;
            height: 43px;
        }

        #rec126241960 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-color: #7c49e3;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        #rec126241960 .tn-elem[data-elem-id="1474995998327"] .tn-atom:hover {
            background-color: #8f57ff;
            color: #ffffff;
        }

        @media screen and (max-width: 1199px) {
            #rec126241960 .tn-elem[data-elem-id="1474995998327"] {
                top: 108px;
                left: calc(50% - 480px + 377px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec126241960 .tn-elem[data-elem-id="1474995998327"] {
                top: 42px;
                left: calc(50% - 320px + 481px);
                height: 35px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec126241960 .tn-elem[data-elem-id="1474995998327"] {
                top: 296px;
                left: calc(50% - 240px + 125px);
                width: 230px;
                height: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec126241960 .tn-elem[data-elem-id="1474995998327"] {
                top: 293px;
                left: calc(50% - 160px + 50px);
            }
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="126241960" data-artboard-height="195"
             data-artboard-height-res-960="195" data-artboard-height-res-640="115" data-artboard-height-res-480="385"
             data-artboard-height-res-320="390" data-artboard-height_vh="" data-artboard-valign="center"
             data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="195"
             data-artboard-proxy-max-height="195">
            <div class="t396__carrier" data-artboard-recid="126241960">
            </div>
            <div class="t396__filter" data-artboard-recid="126241960">
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419601474899596906" data-elem-id="1474899596906"
                 data-elem-type="shape" data-field-top-value="26" data-field-top-res-960-value="26"
                 data-field-top-res-640-value="17" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="91" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="80"
                 data-field-height-res-480-value="197" data-field-height-res-320-value="198"
                 data-field-width-value="280" data-field-width-res-960-value="229" data-field-width-res-640-value="183"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 280px;
				left: 351.5px;
				top: 26px;
				height: 145px;
				">
                <div class="tn-atom t-bgimg loaded"
                     data-original="https://static.tildacdn.com/tild6233-6137-4462-b966-383633393765/7.jpg"
                     style="background-image: url(&quot;
					https://static.tildacdn.com/tild6233-6137-4462-b966-383633393765/7.jpg&quot;
					);
					" src="">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419601474900321386" data-elem-id="1474900321386"
                 data-elem-type="text" data-field-top-value="49" data-field-top-res-960-value="51"
                 data-field-top-res-640-value="43" data-field-top-res-480-value="242" data-field-top-res-320-value="249"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="231"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="50" data-field-width-value="580"
                 data-field-width-res-960-value="450" data-field-width-res-640-value="240"
                 data-field-width-res-480-value="300" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 49px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900321386">
                    Заочное обучение
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419601474900324080" data-elem-id="1474900324080"
                 data-elem-type="text" data-field-top-value="117" data-field-top-res-960-value="113"
                 data-field-top-res-640-value="343" data-field-top-res-480-value="290"
                 data-field-top-res-320-value="320" data-field-left-value="450" data-field-left-res-960-value="377"
                 data-field-left-res-640-value="91" data-field-left-res-480-value="90"
                 data-field-left-res-320-value="30" data-field-width-value="580" data-field-width-res-960-value="450"
                 data-field-width-res-640-value="460" data-field-width-res-480-value="300"
                 data-field-width-res-320-value="260" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 117px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900324080">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419601474900287008" data-elem-id="1474900287008"
                 data-elem-type="shape" data-field-top-value="26" data-field-top-res-960-value="26"
                 data-field-top-res-640-value="17" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="90" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="81"
                 data-field-height-res-480-value="341" data-field-height-res-320-value="346"
                 data-field-width-value="960" data-field-width-res-960-value="780" data-field-width-res-640-value="590"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 960px;
		left: 351.5px;
		top: 26px;
		height: 145px;
		">
                <div class="tn-atom">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1262419601474995998327" data-elem-id="1474995998327"
                 data-elem-type="button" data-field-top-value="107" data-field-top-res-960-value="108"
                 data-field-top-res-640-value="42" data-field-top-res-480-value="296" data-field-top-res-320-value="293"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="481"
                 data-field-left-res-480-value="125" data-field-left-res-320-value="50" data-field-height-value="43"
                 data-field-height-res-640-value="35" data-field-height-res-480-value="40" data-field-width-value="120"
                 data-field-width-res-480-value="230" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,height,container,axisx,axisy,caption,leftunits,topunits" style="top: 107px;
	left: 681.5px;
	width: 120px;
	height: 43px;
	">
                <a class="tn-atom" href="https://artcollege.ru/zaochnoe">
                    Подробнее</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            t396_init('126241960');

        });
    </script>
    <!-- /T396 -->
</div>
<div id="rec117973092" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
    <!-- T396 -->
    <style>
        #rec117973092 .t396__artboard {
            height: 195px;
            background-color: #ffffff;
        }

        #rec117973092 .t396__filter {
            height: 195px;
        }

        #rec117973092 .t396__carrier {
            height: 195px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec117973092 .t396__artboard {
                height: 195px;
                background-color: #ffffff;
            }

            #rec117973092 .t396__filter {
                height: 195px;
            }

            #rec117973092 .t396__carrier {
                height: 195px;
                background-position: center center;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973092 .t396__artboard {
                height: 115px;
            }

            #rec117973092 .t396__filter {
                height: 115px;
            }

            #rec117973092 .t396__carrier {
                height: 115px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973092 .t396__artboard {
                height: 385px;
            }

            #rec117973092 .t396__filter {
                height: 385px;
            }

            #rec117973092 .t396__carrier {
                height: 385px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973092 .t396__artboard {
                height: 390px;
            }

            #rec117973092 .t396__filter {
                height: 390px;
            }

            #rec117973092 .t396__carrier {
                height: 390px;
            }
        }

        #rec117973092 .tn-elem[data-elem-id="1474899596906"] {
            z-index: 3;
            top: 26px;
            left: calc(50% - 600px + 120px);
            width: 280px;
            height: 145px;
        }

        #rec117973092 .tn-elem[data-elem-id="1474899596906"] .tn-atom {
            background-color: #ebebeb;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973092 .tn-elem[data-elem-id="1474899596906"] {
                top: 26px;
                left: calc(50% - 480px + 91px);
                width: 229px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973092 .tn-elem[data-elem-id="1474899596906"] {
                top: 17px;
                left: calc(50% - 320px + 25px);
                width: 183px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973092 .tn-elem[data-elem-id="1474899596906"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 197px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973092 .tn-elem[data-elem-id="1474899596906"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 198px;
            }
        }

        #rec117973092 .tn-elem[data-elem-id="1474900321386"] {
            color: #000000;
            z-index: 8;
            top: 49px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec117973092 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
            color: #000000;
            font-size: 30px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973092 .tn-elem[data-elem-id="1474900321386"] {
                top: 51px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec117973092 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 28px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973092 .tn-elem[data-elem-id="1474900321386"] {
                top: 43px;
                left: calc(50% - 320px + 231px);
                width: 240px;
            }

            #rec117973092 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 19px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973092 .tn-elem[data-elem-id="1474900321386"] {
                top: 242px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec117973092 .tn-elem[data-elem-id="1474900321386"] {
                text-align: center;
            }

            #rec117973092 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973092 .tn-elem[data-elem-id="1474900321386"] {
                top: 249px;
                left: calc(50% - 160px + 50px);
                width: 220px;
            }

            #rec117973092 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                line-height: 1.2;
            }
        }

        #rec117973092 .tn-elem[data-elem-id="1474900324080"] {
            color: #000000;
            z-index: 9;
            top: 117px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec117973092 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
            color: #000000;
            font-size: 18px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973092 .tn-elem[data-elem-id="1474900324080"] {
                top: 113px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec117973092 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973092 .tn-elem[data-elem-id="1474900324080"] {
                top: 343px;
                left: calc(50% - 320px + 91px);
                width: 460px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973092 .tn-elem[data-elem-id="1474900324080"] {
                top: 290px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec117973092 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973092 .tn-elem[data-elem-id="1474900324080"] {
                top: 320px;
                left: calc(50% - 160px + 30px);
                width: 260px;
            }

            #rec117973092 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                line-height: 1.45;
            }
        }

        #rec117973092 .tn-elem[data-elem-id="1474900287008"] {
            z-index: 1;
            top: 26px;
            left: calc(50% - 600px + 120px);
            width: 960px;
            height: 145px;
        }

        #rec117973092 .tn-elem[data-elem-id="1474900287008"] .tn-atom {
            border-width: 1px;
            background-color: #ffffff;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 1199px) {
            #rec117973092 .tn-elem[data-elem-id="1474900287008"] {
                top: 26px;
                left: calc(50% - 480px + 90px);
                width: 780px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973092 .tn-elem[data-elem-id="1474900287008"] {
                top: 17px;
                left: calc(50% - 320px + 25px);
                width: 590px;
                height: 81px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973092 .tn-elem[data-elem-id="1474900287008"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 341px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973092 .tn-elem[data-elem-id="1474900287008"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 343px;
            }
        }

        #rec117973092 .tn-elem[data-elem-id="1474995998327"] {
            color: #ffffff;
            text-align: center;
            z-index: 10;
            top: 107px;
            left: calc(50% - 600px + 450px);
            width: 120px;
            height: 43px;
        }

        #rec117973092 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-color: #7c49e3;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        #rec117973092 .tn-elem[data-elem-id="1474995998327"] .tn-atom:hover {
            background-color: #8f57ff;
            color: #ffffff;
        }

        @media screen and (max-width: 1199px) {
            #rec117973092 .tn-elem[data-elem-id="1474995998327"] {
                top: 108px;
                left: calc(50% - 480px + 377px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973092 .tn-elem[data-elem-id="1474995998327"] {
                top: 42px;
                left: calc(50% - 320px + 481px);
                height: 35px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973092 .tn-elem[data-elem-id="1474995998327"] {
                top: 296px;
                left: calc(50% - 240px + 125px);
                width: 230px;
                height: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973092 .tn-elem[data-elem-id="1474995998327"] {
                top: 293px;
                left: calc(50% - 160px + 45px);
            }
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="117973092" data-artboard-height="195"
             data-artboard-height-res-960="195" data-artboard-height-res-640="115" data-artboard-height-res-480="385"
             data-artboard-height-res-320="390" data-artboard-height_vh="" data-artboard-valign="center"
             data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="195"
             data-artboard-proxy-max-height="195">
            <div class="t396__carrier" data-artboard-recid="117973092">
            </div>
            <div class="t396__filter" data-artboard-recid="117973092">
            </div>
            <div class="t396__elem tn-elem tn-elem__1179730921474899596906" data-elem-id="1474899596906"
                 data-elem-type="shape" data-field-top-value="26" data-field-top-res-960-value="26"
                 data-field-top-res-640-value="17" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="91" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="80"
                 data-field-height-res-480-value="197" data-field-height-res-320-value="198"
                 data-field-width-value="280" data-field-width-res-960-value="229" data-field-width-res-640-value="183"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 280px;
				left: 351.5px;
				top: 26px;
				height: 145px;
				">
                <div class="tn-atom t-bgimg loaded"
                     data-original="https://static.tildacdn.com/tild6439-3732-4564-b131-366137393737/2.jpg"
                     style="background-image: url(&quot;
					https://static.tildacdn.com/tild6439-3732-4564-b131-366137393737/2.jpg&quot;
					);
					" src="">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179730921474900321386" data-elem-id="1474900321386"
                 data-elem-type="text" data-field-top-value="49" data-field-top-res-960-value="51"
                 data-field-top-res-640-value="43" data-field-top-res-480-value="242" data-field-top-res-320-value="249"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="231"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="50" data-field-width-value="580"
                 data-field-width-res-960-value="450" data-field-width-res-640-value="240"
                 data-field-width-res-480-value="300" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 49px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900321386">
                    Платное обучение
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179730921474900324080" data-elem-id="1474900324080"
                 data-elem-type="text" data-field-top-value="117" data-field-top-res-960-value="113"
                 data-field-top-res-640-value="343" data-field-top-res-480-value="290"
                 data-field-top-res-320-value="320" data-field-left-value="450" data-field-left-res-960-value="377"
                 data-field-left-res-640-value="91" data-field-left-res-480-value="90"
                 data-field-left-res-320-value="30" data-field-width-value="580" data-field-width-res-960-value="450"
                 data-field-width-res-640-value="460" data-field-width-res-480-value="300"
                 data-field-width-res-320-value="260" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 117px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900324080">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179730921474900287008" data-elem-id="1474900287008"
                 data-elem-type="shape" data-field-top-value="26" data-field-top-res-960-value="26"
                 data-field-top-res-640-value="17" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="90" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="81"
                 data-field-height-res-480-value="341" data-field-height-res-320-value="343"
                 data-field-width-value="960" data-field-width-res-960-value="780" data-field-width-res-640-value="590"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 960px;
		left: 351.5px;
		top: 26px;
		height: 145px;
		">
                <div class="tn-atom">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179730921474995998327" data-elem-id="1474995998327"
                 data-elem-type="button" data-field-top-value="107" data-field-top-res-960-value="108"
                 data-field-top-res-640-value="42" data-field-top-res-480-value="296" data-field-top-res-320-value="293"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="481"
                 data-field-left-res-480-value="125" data-field-left-res-320-value="45" data-field-height-value="43"
                 data-field-height-res-640-value="35" data-field-height-res-480-value="40" data-field-width-value="120"
                 data-field-width-res-480-value="230" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,height,container,axisx,axisy,caption,leftunits,topunits" style="top: 107px;
	left: 681.5px;
	width: 120px;
	height: 43px;
	">
                <a class="tn-atom" href="https://1-mok.mskobr.ru/reception/platnoe/#index" target="_blank">
                    Подробнее</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            t396_init('117973092');

        });
    </script>
    <!-- /T396 -->
</div>
<div id="rec117973234" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
    <!-- T396 -->
    <style>
        #rec117973234 .t396__artboard {
            height: 195px;
            background-color: #ffffff;
        }

        #rec117973234 .t396__filter {
            height: 195px;
        }

        #rec117973234 .t396__carrier {
            height: 195px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec117973234 .t396__artboard {
                height: 195px;
                background-color: #ffffff;
            }

            #rec117973234 .t396__filter {
                height: 195px;
            }

            #rec117973234 .t396__carrier {
                height: 195px;
                background-position: center center;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973234 .t396__artboard {
                height: 115px;
            }

            #rec117973234 .t396__filter {
                height: 115px;
            }

            #rec117973234 .t396__carrier {
                height: 115px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973234 .t396__artboard {
                height: 385px;
            }

            #rec117973234 .t396__filter {
                height: 385px;
            }

            #rec117973234 .t396__carrier {
                height: 385px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973234 .t396__artboard {
                height: 430px;
            }

            #rec117973234 .t396__filter {
                height: 430px;
            }

            #rec117973234 .t396__carrier {
                height: 430px;
            }
        }

        #rec117973234 .tn-elem[data-elem-id="1474899596906"] {
            z-index: 3;
            top: 26px;
            left: calc(50% - 600px + 120px);
            width: 280px;
            height: 145px;
        }

        #rec117973234 .tn-elem[data-elem-id="1474899596906"] .tn-atom {
            background-color: #ebebeb;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973234 .tn-elem[data-elem-id="1474899596906"] {
                top: 26px;
                left: calc(50% - 480px + 91px);
                width: 229px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973234 .tn-elem[data-elem-id="1474899596906"] {
                top: 17px;
                left: calc(50% - 320px + 25px);
                width: 183px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973234 .tn-elem[data-elem-id="1474899596906"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 197px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973234 .tn-elem[data-elem-id="1474899596906"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 198px;
            }
        }

        #rec117973234 .tn-elem[data-elem-id="1474900321386"] {
            color: #000000;
            z-index: 8;
            top: 49px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec117973234 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
            color: #000000;
            font-size: 30px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973234 .tn-elem[data-elem-id="1474900321386"] {
                top: 51px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 28px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973234 .tn-elem[data-elem-id="1474900321386"] {
                top: 43px;
                left: calc(50% - 320px + 231px);
                width: 240px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 19px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973234 .tn-elem[data-elem-id="1474900321386"] {
                top: 242px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474900321386"] {
                text-align: center;
            }

            #rec117973234 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973234 .tn-elem[data-elem-id="1474900321386"] {
                top: 249px;
                left: calc(50% - 160px + 50px);
                width: 220px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                line-height: 1.2;
            }
        }

        #rec117973234 .tn-elem[data-elem-id="1474900324080"] {
            color: #000000;
            z-index: 9;
            top: 117px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec117973234 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
            color: #000000;
            font-size: 18px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973234 .tn-elem[data-elem-id="1474900324080"] {
                top: 113px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973234 .tn-elem[data-elem-id="1474900324080"] {
                top: 343px;
                left: calc(50% - 320px + 91px);
                width: 460px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973234 .tn-elem[data-elem-id="1474900324080"] {
                top: 290px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973234 .tn-elem[data-elem-id="1474900324080"] {
                top: 320px;
                left: calc(50% - 160px + 30px);
                width: 260px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                line-height: 1.45;
            }
        }

        #rec117973234 .tn-elem[data-elem-id="1474900287008"] {
            z-index: 1;
            top: 26px;
            left: calc(50% - 600px + 120px);
            width: 960px;
            height: 145px;
        }

        #rec117973234 .tn-elem[data-elem-id="1474900287008"] .tn-atom {
            border-width: 1px;
            border-radius: 5px;
            background-color: #ffffff;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 1199px) {
            #rec117973234 .tn-elem[data-elem-id="1474900287008"] {
                top: 26px;
                left: calc(50% - 480px + 90px);
                width: 780px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973234 .tn-elem[data-elem-id="1474900287008"] {
                top: 17px;
                left: calc(50% - 320px + 25px);
                width: 590px;
                height: 81px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973234 .tn-elem[data-elem-id="1474900287008"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 341px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973234 .tn-elem[data-elem-id="1474900287008"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 388px;
            }
        }

        #rec117973234 .tn-elem[data-elem-id="1474995998327"] {
            color: #ffffff;
            text-align: center;
            z-index: 10;
            top: 107px;
            left: calc(50% - 600px + 450px);
            width: 120px;
            height: 43px;
        }

        #rec117973234 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-color: #7c49e3;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        #rec117973234 .tn-elem[data-elem-id="1474995998327"] .tn-atom:hover {
            background-color: #8f57ff;
            border-color: #ffffff;
            color: #ffffff;
        }

        @media screen and (max-width: 1199px) {
            #rec117973234 .tn-elem[data-elem-id="1474995998327"] {
                top: 108px;
                left: calc(50% - 480px + 377px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973234 .tn-elem[data-elem-id="1474995998327"] {
                top: 42px;
                left: calc(50% - 320px + 481px);
                height: 35px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
                background-color: #7c49e3;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973234 .tn-elem[data-elem-id="1474995998327"] {
                top: 296px;
                left: calc(50% - 240px + 125px);
                width: 230px;
                height: 40px;
            }

            #rec117973234 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
                background-color: #7c49e3;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973234 .tn-elem[data-elem-id="1474995998327"] {
                top: 333px;
                left: calc(50% - 160px + 50px);
            }
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="117973234" data-artboard-height="195"
             data-artboard-height-res-960="195" data-artboard-height-res-640="115" data-artboard-height-res-480="385"
             data-artboard-height-res-320="430" data-artboard-height_vh="" data-artboard-valign="center"
             data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="195"
             data-artboard-proxy-max-height="195">
            <div class="t396__carrier" data-artboard-recid="117973234">
            </div>
            <div class="t396__filter" data-artboard-recid="117973234">
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732341474899596906" data-elem-id="1474899596906"
                 data-elem-type="shape" data-field-top-value="26" data-field-top-res-960-value="26"
                 data-field-top-res-640-value="17" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="91" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="80"
                 data-field-height-res-480-value="197" data-field-height-res-320-value="198"
                 data-field-width-value="280" data-field-width-res-960-value="229" data-field-width-res-640-value="183"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 280px;
				left: 351.5px;
				top: 26px;
				height: 145px;
				">
                <div class="tn-atom t-bgimg loaded"
                     data-original="https://static.tildacdn.com/tild3538-3662-4731-a462-343134313338/9.jpg"
                     style="background-image: url(&quot;
					https://static.tildacdn.com/tild3538-3662-4731-a462-343134313338/9.jpg&quot;
					);
					" src="">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732341474900321386" data-elem-id="1474900321386"
                 data-elem-type="text" data-field-top-value="49" data-field-top-res-960-value="51"
                 data-field-top-res-640-value="43" data-field-top-res-480-value="242" data-field-top-res-320-value="249"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="231"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="50" data-field-width-value="580"
                 data-field-width-res-960-value="450" data-field-width-res-640-value="240"
                 data-field-width-res-480-value="300" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 49px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900321386">
                    Дни открытых дверей
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732341474900324080" data-elem-id="1474900324080"
                 data-elem-type="text" data-field-top-value="117" data-field-top-res-960-value="113"
                 data-field-top-res-640-value="343" data-field-top-res-480-value="290"
                 data-field-top-res-320-value="320" data-field-left-value="450" data-field-left-res-960-value="377"
                 data-field-left-res-640-value="91" data-field-left-res-480-value="90"
                 data-field-left-res-320-value="30" data-field-width-value="580" data-field-width-res-960-value="450"
                 data-field-width-res-640-value="460" data-field-width-res-480-value="300"
                 data-field-width-res-320-value="260" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 117px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900324080">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732341474900287008" data-elem-id="1474900287008"
                 data-elem-type="shape" data-field-top-value="26" data-field-top-res-960-value="26"
                 data-field-top-res-640-value="17" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="90" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="81"
                 data-field-height-res-480-value="341" data-field-height-res-320-value="388"
                 data-field-width-value="960" data-field-width-res-960-value="780" data-field-width-res-640-value="590"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 960px;
		left: 351.5px;
		top: 26px;
		height: 145px;
		">
                <div class="tn-atom">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732341474995998327" data-elem-id="1474995998327"
                 data-elem-type="button" data-field-top-value="107" data-field-top-res-960-value="108"
                 data-field-top-res-640-value="42" data-field-top-res-480-value="296" data-field-top-res-320-value="333"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="481"
                 data-field-left-res-480-value="125" data-field-left-res-320-value="50" data-field-height-value="43"
                 data-field-height-res-640-value="35" data-field-height-res-480-value="40" data-field-width-value="120"
                 data-field-width-res-480-value="230" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,height,container,axisx,axisy,caption,leftunits,topunits" style="top: 107px;
	left: 681.5px;
	width: 120px;
	height: 43px;
	">
                <a class="tn-atom" href="https://artcollege.ru/dod">
                    Подробнее</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            t396_init('117973234');

        });
    </script>
    <!-- /T396 -->
</div>
<div id="rec117973273" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
    <!-- T396 -->
    <style>
        #rec117973273 .t396__artboard {
            height: 195px;
            background-color: #ffffff;
        }

        #rec117973273 .t396__filter {
            height: 195px;
        }

        #rec117973273 .t396__carrier {
            height: 195px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec117973273 .t396__artboard {
                height: 195px;
                background-color: #ffffff;
            }

            #rec117973273 .t396__filter {
                height: 195px;
            }

            #rec117973273 .t396__carrier {
                height: 195px;
                background-position: center center;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973273 .t396__artboard {
                height: 115px;
            }

            #rec117973273 .t396__filter {
                height: 115px;
            }

            #rec117973273 .t396__carrier {
                height: 115px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973273 .t396__artboard {
                height: 405px;
            }

            #rec117973273 .t396__filter {
                height: 405px;
            }

            #rec117973273 .t396__carrier {
                height: 405px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973273 .t396__artboard {
                height: 430px;
            }

            #rec117973273 .t396__filter {
                height: 430px;
            }

            #rec117973273 .t396__carrier {
                height: 430px;
            }
        }

        #rec117973273 .tn-elem[data-elem-id="1474899596906"] {
            z-index: 3;
            top: 26px;
            left: calc(50% - 600px + 120px);
            width: 280px;
            height: 145px;
        }

        #rec117973273 .tn-elem[data-elem-id="1474899596906"] .tn-atom {
            background-color: #ebebeb;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973273 .tn-elem[data-elem-id="1474899596906"] {
                top: 26px;
                left: calc(50% - 480px + 91px);
                width: 229px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973273 .tn-elem[data-elem-id="1474899596906"] {
                top: 17px;
                left: calc(50% - 320px + 25px);
                width: 183px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973273 .tn-elem[data-elem-id="1474899596906"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 197px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973273 .tn-elem[data-elem-id="1474899596906"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 198px;
            }
        }

        #rec117973273 .tn-elem[data-elem-id="1474900321386"] {
            color: #000000;
            z-index: 8;
            top: 54px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec117973273 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
            color: #000000;
            font-size: 30px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973273 .tn-elem[data-elem-id="1474900321386"] {
                top: 56px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 28px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973273 .tn-elem[data-elem-id="1474900321386"] {
                top: 45px;
                left: calc(50% - 320px + 231px);
                width: 240px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 19px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973273 .tn-elem[data-elem-id="1474900321386"] {
                top: 247px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973273 .tn-elem[data-elem-id="1474900321386"] {
                top: 254px;
                left: calc(50% - 160px + 50px);
                width: 220px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474900321386"] {
                text-align: center;
            }

            #rec117973273 .tn-elem[data-elem-id="1474900321386"] .tn-atom {
                line-height: 1.2;
            }
        }

        #rec117973273 .tn-elem[data-elem-id="1474900324080"] {
            color: #000000;
            z-index: 9;
            top: 117px;
            left: calc(50% - 600px + 450px);
            width: 580px;
        }

        #rec117973273 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
            color: #000000;
            font-size: 18px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973273 .tn-elem[data-elem-id="1474900324080"] {
                top: 113px;
                left: calc(50% - 480px + 377px);
                width: 450px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973273 .tn-elem[data-elem-id="1474900324080"] {
                top: 343px;
                left: calc(50% - 320px + 91px);
                width: 460px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973273 .tn-elem[data-elem-id="1474900324080"] {
                top: 290px;
                left: calc(50% - 240px + 90px);
                width: 300px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973273 .tn-elem[data-elem-id="1474900324080"] {
                top: 320px;
                left: calc(50% - 160px + 30px);
                width: 260px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474900324080"] .tn-atom {
                line-height: 1.45;
            }
        }

        #rec117973273 .tn-elem[data-elem-id="1474900287008"] {
            z-index: 1;
            top: 26px;
            left: calc(50% - 600px + 120px);
            width: 960px;
            height: 145px;
        }

        #rec117973273 .tn-elem[data-elem-id="1474900287008"] .tn-atom {
            border-width: 1px;
            border-radius: 5px;
            background-color: #ffffff;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 1199px) {
            #rec117973273 .tn-elem[data-elem-id="1474900287008"] {
                top: 26px;
                left: calc(50% - 480px + 90px);
                width: 780px;
                height: 145px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973273 .tn-elem[data-elem-id="1474900287008"] {
                top: 17px;
                left: calc(50% - 320px + 25px);
                width: 590px;
                height: 81px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973273 .tn-elem[data-elem-id="1474900287008"] {
                top: 18px;
                left: calc(50% - 240px + 11px);
                width: 460px;
                height: 366px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973273 .tn-elem[data-elem-id="1474900287008"] {
                top: 23px;
                left: calc(50% - 160px + 25px);
                width: 270px;
                height: 388px;
            }
        }

        #rec117973273 .tn-elem[data-elem-id="1474995998327"] {
            color: #ffffff;
            text-align: center;
            z-index: 10;
            top: 107px;
            left: calc(50% - 600px + 450px);
            width: 120px;
            height: 43px;
        }

        #rec117973273 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-color: #7c49e3;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        #rec117973273 .tn-elem[data-elem-id="1474995998327"] .tn-atom:hover {
            background-color: #7c49e3;
            border-color: #ffffff;
            color: #ffffff;
        }

        @media screen and (max-width: 1199px) {
            #rec117973273 .tn-elem[data-elem-id="1474995998327"] {
                top: 108px;
                left: calc(50% - 480px + 377px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973273 .tn-elem[data-elem-id="1474995998327"] {
                top: 42px;
                left: calc(50% - 320px + 481px);
                height: 35px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
                background-color: #7c49e3;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973273 .tn-elem[data-elem-id="1474995998327"] {
                top: 296px;
                left: calc(50% - 240px + 125px);
                width: 230px;
                height: 40px;
            }

            #rec117973273 .tn-elem[data-elem-id="1474995998327"] .tn-atom {
                background-color: #7c49e3;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973273 .tn-elem[data-elem-id="1474995998327"] {
                top: 333px;
                left: calc(50% - 160px + 45px);
            }
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="117973273" data-artboard-height="195"
             data-artboard-height-res-960="195" data-artboard-height-res-640="115" data-artboard-height-res-480="405"
             data-artboard-height-res-320="430" data-artboard-height_vh="" data-artboard-valign="center"
             data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="195"
             data-artboard-proxy-max-height="195">
            <div class="t396__carrier" data-artboard-recid="117973273">
            </div>
            <div class="t396__filter" data-artboard-recid="117973273">
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732731474899596906" data-elem-id="1474899596906"
                 data-elem-type="shape" data-field-top-value="26" data-field-top-res-960-value="26"
                 data-field-top-res-640-value="17" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="91" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="80"
                 data-field-height-res-480-value="197" data-field-height-res-320-value="198"
                 data-field-width-value="280" data-field-width-res-960-value="229" data-field-width-res-640-value="183"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 280px;
				left: 351.5px;
				top: 26px;
				height: 145px;
				">
                <div class="tn-atom t-bgimg loaded"
                     data-original="https://static.tildacdn.com/tild3338-6366-4530-a233-663763623564/1.jpg"
                     style="background-image: url(&quot;
					https://static.tildacdn.com/tild3338-6366-4530-a233-663763623564/1.jpg&quot;
					);
					" src="">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732731474900321386" data-elem-id="1474900321386"
                 data-elem-type="text" data-field-top-value="54" data-field-top-res-960-value="56"
                 data-field-top-res-640-value="45" data-field-top-res-480-value="247" data-field-top-res-320-value="254"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="231"
                 data-field-left-res-480-value="90" data-field-left-res-320-value="50" data-field-width-value="580"
                 data-field-width-res-960-value="450" data-field-width-res-640-value="240"
                 data-field-width-res-480-value="300" data-field-width-res-320-value="220" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 54px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900321386">
                    Подготовительные курсы
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732731474900324080" data-elem-id="1474900324080"
                 data-elem-type="text" data-field-top-value="117" data-field-top-res-960-value="113"
                 data-field-top-res-640-value="343" data-field-top-res-480-value="290"
                 data-field-top-res-320-value="320" data-field-left-value="450" data-field-left-res-960-value="377"
                 data-field-left-res-640-value="91" data-field-left-res-480-value="90"
                 data-field-left-res-320-value="30" data-field-width-value="580" data-field-width-res-960-value="450"
                 data-field-width-res-640-value="460" data-field-width-res-480-value="300"
                 data-field-width-res-320-value="260" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 117px;
			left: 681.5px;
			width: 580px;
			">
                <div class="tn-atom" field="tn_text_1474900324080">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732731474900287008" data-elem-id="1474900287008"
                 data-elem-type="shape" data-field-top-value="26" data-field-top-res-960-value="26"
                 data-field-top-res-640-value="17" data-field-top-res-480-value="18" data-field-top-res-320-value="23"
                 data-field-left-value="120" data-field-left-res-960-value="90" data-field-left-res-640-value="25"
                 data-field-left-res-480-value="11" data-field-left-res-320-value="25" data-field-height-value="145"
                 data-field-height-res-960-value="145" data-field-height-res-640-value="81"
                 data-field-height-res-480-value="366" data-field-height-res-320-value="388"
                 data-field-width-value="960" data-field-width-res-960-value="780" data-field-width-res-640-value="590"
                 data-field-width-res-480-value="460" data-field-width-res-320-value="270" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid"
                 data-field-container-res-480-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                 style="width: 960px;
		left: 351.5px;
		top: 26px;
		height: 145px;
		">
                <div class="tn-atom">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179732731474995998327" data-elem-id="1474995998327"
                 data-elem-type="button" data-field-top-value="107" data-field-top-res-960-value="108"
                 data-field-top-res-640-value="42" data-field-top-res-480-value="296" data-field-top-res-320-value="333"
                 data-field-left-value="450" data-field-left-res-960-value="377" data-field-left-res-640-value="481"
                 data-field-left-res-480-value="125" data-field-left-res-320-value="45" data-field-height-value="43"
                 data-field-height-res-640-value="35" data-field-height-res-480-value="40" data-field-width-value="120"
                 data-field-width-res-480-value="230" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,height,container,axisx,axisy,caption,leftunits,topunits" style="top: 107px;
	left: 681.5px;
	width: 120px;
	height: 43px;
	">
                <a class="tn-atom" href="https://artcollege.ru/podgotovka">
                    Подробнее</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            t396_init('117973273');

        });
    </script>
    <!-- /T396 -->
</div>
<div id="rec127582949" class="r t-rec r_showed r_anim" style=" " data-record-type="215">
    <a name="adres" style="font-size:0;
	">
    </a>
</div>
<div id="rec117973303" class="r t-rec" style="background-color:#efefef;
" data-animationappear="off" data-record-type="396" data-bg-color="#efefef">
    <!-- T396 -->
    <style>
        #rec117973303 .t396__artboard {
            height: 180px;
            background-color: #ffffff;
        }

        #rec117973303 .t396__filter {
            height: 180px;
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(54, 74, 241, 0)), to(rgba(54, 74, 241, 0)));
            background-image: -webkit-linear-gradient(top, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
            background-image: linear-gradient(to bottom, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
        }

        #rec117973303 .t396__carrier {
            height: 180px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec117973303 .t396__artboard {
                height: 139px;
            }

            #rec117973303 .t396__filter {
                height: 139px;
                background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(54, 74, 241, 0)), to(rgba(54, 74, 241, 0)));
                background-image: -webkit-linear-gradient(top, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
                background-image: linear-gradient(to bottom, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
            }

            #rec117973303 .t396__carrier {
                height: 139px;
                background-position: center center;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973303 .t396__artboard {
                height: 123px;
            }

            #rec117973303 .t396__filter {
                height: 123px;
                background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(54, 74, 241, 0)), to(rgba(54, 74, 241, 0)));
                background-image: -webkit-linear-gradient(top, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
                background-image: linear-gradient(to bottom, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
            }

            #rec117973303 .t396__carrier {
                height: 123px;
                background-position: center center;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973303 .t396__artboard {
                height: 243px;
            }

            #rec117973303 .t396__filter {
                height: 243px;
                background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(54, 74, 241, 0)), to(rgba(54, 74, 241, 0)));
                background-image: -webkit-linear-gradient(top, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
                background-image: linear-gradient(to bottom, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
            }

            #rec117973303 .t396__carrier {
                height: 243px;
                background-position: center center;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973303 .t396__artboard {
                height: 243px;
            }

            #rec117973303 .t396__filter {
                height: 243px;
                background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(54, 74, 241, 0)), to(rgba(54, 74, 241, 0)));
                background-image: -webkit-linear-gradient(top, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
                background-image: linear-gradient(to bottom, rgba(54, 74, 241, 0), rgba(54, 74, 241, 0));
            }

            #rec117973303 .t396__carrier {
                height: 243px;
                background-position: center center;
            }
        }

        #rec117973303 .tn-elem[data-elem-id="1494853412830"] {
            color: #000000;
            text-align: center;
            z-index: 2;
            top: -167px;
            left: calc(50% - 600px + 20px);
            width: 1160px;
        }

        #rec117973303 .tn-elem[data-elem-id="1494853412830"] .tn-atom {
            color: #000000;
            font-size: 42px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973303 .tn-elem[data-elem-id="1494853412830"] {
                top: -195px;
                left: calc(50% - 480px + 10px);
                width: 940px;
            }

            #rec117973303 .tn-elem[data-elem-id="1494853412830"] .tn-atom {
                font-size: 38px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973303 .tn-elem[data-elem-id="1494853412830"] {
                top: -165px;
                left: calc(50% - 320px + -440px);
                width: 600px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973303 .tn-elem[data-elem-id="1494853412830"] {
                top: -424px;
                left: calc(50% - 240px + 30px);
                width: 460px;
            }

            #rec117973303 .tn-elem[data-elem-id="1494853412830"] .tn-atom {
                font-size: 30px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973303 .tn-elem[data-elem-id="1494853412830"] {
                top: -474px;
                left: calc(50% - 160px + 13px);
                width: 300px;
            }
        }

        #rec117973303 .tn-elem[data-elem-id="1494853412839"] {
            color: #000000;
            text-align: center;
            z-index: 3;
            top: -89px;
            left: calc(50% - 600px + 320px);
            width: 560px;
        }

        #rec117973303 .tn-elem[data-elem-id="1494853412839"] .tn-atom {
            color: #000000;
            font-size: 24px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.5;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973303 .tn-elem[data-elem-id="1494853412839"] {
                top: -123px;
                left: calc(50% - 480px + 200px);
            }

            #rec117973303 .tn-elem[data-elem-id="1494853412839"] .tn-atom {
                font-size: 22px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973303 .tn-elem[data-elem-id="1494853412839"] {
                top: -93px;
                left: calc(50% - 320px + -420px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973303 .tn-elem[data-elem-id="1494853412839"] {
                top: -364px;
                left: calc(50% - 240px + 30px);
                width: 460px;
            }

            #rec117973303 .tn-elem[data-elem-id="1494853412839"] .tn-atom {
                font-size: 20px;
                line-height: 1.45;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973303 .tn-elem[data-elem-id="1494853412839"] {
                top: -414px;
                left: calc(50% - 160px + 13px);
                width: 300px;
            }

            #rec117973303 .tn-elem[data-elem-id="1494853412839"] .tn-atom {
                line-height: 1.4;
            }
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484612"] {
            color: #000000;
            text-align: center;
            z-index: 11;
            top: -167px;
            left: calc(50% - 600px + 620px);
            width: 1160px;
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484612"] .tn-atom {
            color: #000000;
            font-size: 42px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484612"] {
                top: -185px;
                left: calc(50% - 480px + 20px);
                width: 940px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484612"] .tn-atom {
                font-size: 38px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484612"] {
                top: -155px;
                left: calc(50% - 320px + -430px);
                width: 600px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484612"] {
                top: -414px;
                left: calc(50% - 240px + 40px);
                width: 460px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484612"] .tn-atom {
                font-size: 30px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484612"] {
                top: -464px;
                left: calc(50% - 160px + 23px);
                width: 300px;
            }
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484619"] {
            color: #000000;
            text-align: center;
            z-index: 12;
            top: -89px;
            left: calc(50% - 600px + 920px);
            width: 560px;
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484619"] .tn-atom {
            color: #000000;
            font-size: 24px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.5;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484619"] {
                top: -113px;
                left: calc(50% - 480px + 210px);
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484619"] .tn-atom {
                font-size: 22px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484619"] {
                top: -83px;
                left: calc(50% - 320px + -410px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484619"] {
                top: -354px;
                left: calc(50% - 240px + 40px);
                width: 460px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484619"] .tn-atom {
                font-size: 20px;
                line-height: 1.45;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484619"] {
                top: -404px;
                left: calc(50% - 160px + 23px);
                width: 300px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484619"] .tn-atom {
                line-height: 1.4;
            }
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484605"] {
            z-index: 10;
            top: 37px;
            left: calc(50% - 600px + 121px);
            width: 959px;
            height: 100px;
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484605"] .tn-atom {
            border-radius: 5px;
            background-color: #7c49e3;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 1199px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484605"] {
                top: 21px;
                left: calc(50% - 480px + 90px);
                width: 778px;
                height: 91px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484605"] {
                top: 29px;
                left: calc(50% - 320px + 11px);
                width: 618px;
                height: 68px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484605"] {
                top: 29px;
                left: calc(50% - 240px + 10px);
                width: 460px;
                height: 170px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484605"] {
                top: 36px;
                left: calc(50% - 160px + 10px);
                width: 300px;
                height: 162px;
            }
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484622"] {
            color: #ffffff;
            z-index: 13;
            top: 69px;
            left: calc(50% - 600px + 181px);
            width: 590px;
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484622"] .tn-atom {
            color: #ffffff;
            font-size: 23px;
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484622"] {
                top: 49px;
                left: calc(50% - 480px + 150px);
                width: 400px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484622"] .tn-atom {
                font-size: 21px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484622"] {
                top: 49px;
                left: calc(50% - 320px + 70px);
                width: 260px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484622"] .tn-atom {
                font-size: 17px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484622"] {
                top: 57px;
                left: calc(50% - 240px + 116px);
                width: 260px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484622"] {
                text-align: center;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484622"] .tn-atom {
                font-size: 21px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484622"] {
                top: 72px;
                left: calc(50% - 160px + 30px);
                width: 260px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484622"] {
                text-align: center;
            }
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484640"] {
            color: #333344;
            text-align: center;
            z-index: 15;
            top: 62px;
            left: calc(50% - 600px + 821px);
            width: 200px;
            height: 45px;
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484640"] .tn-atom {
            color: #333344;
            font-size: 15px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 5px;
            background-color: #ffffff;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        #rec117973303 .tn-elem[data-elem-id="1548331484640"] .tn-atom:hover {
            background-color: #81ce1e;
            color: #ffffff;
        }

        @media screen and (max-width: 1199px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484640"] {
                top: 42px;
                left: calc(50% - 480px + 630px);
                width: 160px;
                height: 45px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484640"] {
                top: 45px;
                left: calc(50% - 320px + 461px);
                width: 130px;
                height: 35px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484640"] .tn-atom {
                font-size: 13px;
                background-color: #ffffff;
            }
        }

        @media screen and (max-width: 639px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484640"] {
                top: 111px;
                left: calc(50% - 240px + 117px);
                width: 250px;
                height: 45px;
            }

            #rec117973303 .tn-elem[data-elem-id="1548331484640"] .tn-atom {
                font-size: 15px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec117973303 .tn-elem[data-elem-id="1548331484640"] {
                top: 114px;
                left: calc(50% - 160px + 35px);
            }
        }</style>
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="117973303" data-artboard-height="180"
             data-artboard-height-res-960="139" data-artboard-height-res-640="123" data-artboard-height-res-480="243"
             data-artboard-height-res-320="243" data-artboard-height_vh="" data-artboard-valign="center"
             data-artboard-ovrflw="" data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="180"
             data-artboard-proxy-max-height="180">
            <div class="t396__elem tn-elem tn-elem__1179733031494853412830" data-elem-id="1494853412830"
                 data-elem-type="text" data-field-top-value="-167" data-field-top-res-960-value="-195"
                 data-field-top-res-640-value="-165" data-field-top-res-480-value="-424"
                 data-field-top-res-320-value="-474" data-field-left-value="20" data-field-left-res-960-value="10"
                 data-field-left-res-640-value="-440" data-field-left-res-480-value="30"
                 data-field-left-res-320-value="13" data-field-width-value="1160" data-field-width-res-960-value="940"
                 data-field-width-res-640-value="600" data-field-width-res-480-value="460"
                 data-field-width-res-320-value="300" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: -167px;
			left: 251.5px;
			width: 1160px;
			">
                <div class="tn-atom" field="tn_text_1494853412830">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179733031494853412839" data-elem-id="1494853412839"
                 data-elem-type="text" data-field-top-value="-89" data-field-top-res-960-value="-123"
                 data-field-top-res-640-value="-93" data-field-top-res-480-value="-364"
                 data-field-top-res-320-value="-414" data-field-left-value="320" data-field-left-res-960-value="200"
                 data-field-left-res-640-value="-420" data-field-left-res-480-value="30"
                 data-field-left-res-320-value="13" data-field-width-value="560" data-field-width-res-480-value="460"
                 data-field-width-res-320-value="300" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: -89px;
		left: 551.5px;
		width: 560px;
		">
                <div class="tn-atom" field="tn_text_1494853412839">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179733031548331484612" data-elem-id="1548331484612"
                 data-elem-type="text" data-field-top-value="-167" data-field-top-res-960-value="-185"
                 data-field-top-res-640-value="-155" data-field-top-res-480-value="-414"
                 data-field-top-res-320-value="-464" data-field-left-value="620" data-field-left-res-960-value="20"
                 data-field-left-res-640-value="-430" data-field-left-res-480-value="40"
                 data-field-left-res-320-value="23" data-field-width-value="1160" data-field-width-res-960-value="940"
                 data-field-width-res-640-value="600" data-field-width-res-480-value="460"
                 data-field-width-res-320-value="300" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: -167px;
	left: 851.5px;
	width: 1160px;
	">
                <div class="tn-atom" field="tn_text_1548331484612">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179733031548331484619" data-elem-id="1548331484619"
                 data-elem-type="text" data-field-top-value="-89" data-field-top-res-960-value="-113"
                 data-field-top-res-640-value="-83" data-field-top-res-480-value="-354"
                 data-field-top-res-320-value="-404" data-field-left-value="920" data-field-left-res-960-value="210"
                 data-field-left-res-640-value="-410" data-field-left-res-480-value="40"
                 data-field-left-res-320-value="23" data-field-width-value="560" data-field-width-res-480-value="460"
                 data-field-width-res-320-value="300" data-field-axisy-value="top" data-field-axisx-value="left"
                 data-field-container-value="grid" data-field-topunits-value="" data-field-leftunits-value=""
                 data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: -89px;
left: 1151.5px;
width: 560px;
">
                <div class="tn-atom" field="tn_text_1548331484619">
                </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1179733031548331484622" data-elem-id="1548331484622"
                 data-elem-type="text" data-field-top-value="69" data-field-top-res-960-value="49"
                 data-field-top-res-640-value="49" data-field-top-res-480-value="57" data-field-top-res-320-value="72"
                 data-field-left-value="181" data-field-left-res-960-value="150" data-field-left-res-640-value="70"
                 data-field-left-res-480-value="116" data-field-left-res-320-value="30" data-field-width-value="590"
                 data-field-width-res-960-value="400" data-field-width-res-640-value="260"
                 data-field-width-res-480-value="260" data-field-width-res-320-value="260" data-field-axisy-value="top"
                 data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value=""
                 data-field-leftunits-value="" data-field-heightunits-value="" data-field-widthunits-value=""
                 data-fields="top,left,width,container,axisx,axisy,widthunits,leftunits,topunits" style="top: 69px;
left: 412.5px;
width: 590px;
">
            </div>
        </div>
        <script>
            $(document).ready(function () {
                t396_init('117973303');

            });
        </script>
        <!-- /T396 -->
    </div>
    <div id="rec127582244" class="r t-rec r_showed r_anim" style=" " data-record-type="215">
        <a name="doc" style="font-size:0;
	">
        </a>
    </div>
    <div id="rec126242876" class="r t-rec t-rec_pt_90 t-rec_pb_30 r_showed r_anim" style="padding-top:90px;
padding-bottom:30px;
" data-record-type="43">
        <!-- T030 -->
        <div class="t030">
            <div class="t-container t-align_center">
                <div class="t-col t-col_10 t-prefix_1">
                    <div class="t030__title t-title t-title_xxs" field="title" style="">
                        Официальные документы
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rec126260563" class="r t-rec r_showed r_anim" style=" " data-record-type="215">
        <a name="doc" style="font-size:0;
	">
        </a>
    </div>
    <div id="rec126242885" class="r t-rec t-rec_pb_60" style="padding-bottom:60px;
background-color:#ffffff;
" data-record-type="491" data-bg-color="#ffffff" data-animationappear="off">
        <!-- t491 -->
        <div class="t491">
            <div class="t-container">
                <div class="t491__col t-col t-col_4 t-item">
                    <a href=http://taviak.ru/Content/Kollege/Documenti/USTAV_2015.pdf" target="_blank">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <img src="./files/docs3.svg" class="t491__img t-img loading"
                                     imgfield="li_img__1476976310929" style="width:70px;
					">
                                <div class="t491__title t-name t-name_sm" style="font-size:16px;
					font-weight:500;
					" field="li_title__1476976310929">
                                    Устав образовательной организации
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t491__col t-col t-col_4 t-item">
                    <a href="http://taviak.ru/Content/Kollege/Documenti/LICENSE_03.09.2015-TAVIAK.pdf" target="_blank">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <img src="./files/docs3(1).svg" class="t491__img t-img loading"
                                     imgfield="li_img__1476976315081" style="width:70px;
			">
                                <div class="t491__title t-name t-name_sm" style="font-size:16px;
			font-weight:500;
			" field="li_title__1476976315081">
                                    Лицензия на осуществление образовательной деятельности
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="rec126242933" class="r t-rec t-rec_pb_15" style="padding-bottom:15px;
background-color:#ffffff;
" data-record-type="491" data-bg-color="#ffffff" data-animationappear="off">
        <!-- t491 -->
        <div class="t491">
            <div class="t-container">
                <div class="t491__col t-col t-col_6 t-item">
                    <a href="http://taviak.ru/Content/Kollege/Documenti/akkreditacia_2018.pdf" target="_blank">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <img src="./files/docs3.svg" class="t491__img t-img loading"
                                     imgfield="li_img__1476976310929" style="width:70px;
					">
                                <div class="t491__title t-name t-name_sm" style="font-size:16px;
					font-weight:500;
					" field="li_title__1476976310929">
                                    Свидетельство о гос. аккредитации №3194
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t491__col t-col t-col_4 t-item">
                    <a href="http://taviak.ru/Content/Kollege/Documenti/LICENSE_03.09.2015-TAVIAK.pdf&amp;
	name=TAVIAK.pdf" target="_blank">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <img src="./files/docs3(2).svg" class="t491__img t-img loading"
                                     imgfield="li_img__1476976330452" style="width:70px;
			">
                                <div class="t491__title t-name t-name_sm" style="font-size:16px;
			font-weight:500;
			" field="li_title__1476976330452">
                                    Приложения к лицензии<br>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="rec126263941" class="r t-rec t-rec_pb_90" style="padding-bottom:90px;
background-color:#ffffff;
" data-record-type="491" data-bg-color="#ffffff" data-animationappear="off">
        <!-- t491 -->
        <div class="t491">
            <div class="t-container">
                <div class="t491__col t-col t-col_6 t-item">
                    <a href="http://taviak.ru/Content/Kollege/Documenti/dokumenty%2c%20dlja%20obrazovatel%27nogo%20processa/Pravila_priema/pravila_priema_2020-2021.pdf"
                       target="_blank">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <img src="./files/docs3.svg" class="t491__img t-img loading"
                                     imgfield="li_img__1476976310929" style="width:70px;
						">
                                <div class="t491__title t-name t-name_sm" style="font-size:16px;
						font-weight:500;
						" field="li_title__1476976310929">
                                    Правила приема
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t491__col t-col t-col_6 t-item">
                    <a href="http://taviak.ru/o_college/oficialnye-dokumenty/" target="_blank">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <img src="./files/docs3.svg" class="t491__img t-img loading"
                                     imgfield="li_img__1563451764566" style="width:70px;
						">
                                <div class="t491__title t-name t-name_sm" style="font-size:16px;
						font-weight:500;
						" field="li_title__1563451764566">
                                    Все документы
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t-clear t491__separator" style="margin-bottom:10px;
		">
                </div>
                <div class="t491__col t-col t-col_6 t-item">
                    <a href="http://taviak.ru/o_college/obrazovanie/uchebnye-plany/" target="_blank">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <img src="./files/docs3.svg" class="t491__img t-img loading"
                                     imgfield="li_img__1567689543295" style="width:70px;
					">
                                <div class="t491__title t-name t-name_sm" style="font-size:16px;
					font-weight:500;
					" field="li_title__1567689543295">
                                    Учебные планы
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="t491__col t-col t-col_6 t-item">
                    <a href="http://taviak.ru/o_college/oficialnye-dokumenty/dokumenty-razrabotannye-obrazovatelnoj-organizaciej-dlya-obespecheniya-obrazovatelnogo-processa/lokalnye-normativnye-akty-reglamentiruyushhie-prava-i-obyazannosti-uchastnikov-obrazovatelnogo-processa/"
                       target="_blank">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <img src="./files/docs3.svg" class="t491__img t-img loading"
                                     imgfield="li_img__1567689646272" style="width:70px;
					">
                                <div class="t491__title t-name t-name_sm" style="font-size:16px;
					font-weight:500;
					" field="li_title__1567689646272">
                                    Локальные акты ОУ
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <div id="t-footer" class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node"
         data-tilda-project-id="1090793" data-tilda-page-id="5402995" data-tilda-page-alias="footer"
         data-tilda-formskey="60252717a0d8c27159aec8439a4aacc0">
        <div id="rec97174449" class="r t-rec t-rec_pt_45 t-rec_pb_75" style="padding-top:45px;
	padding-bottom:75px;
	background-color:#1e1e29;
	" data-record-type="463" data-bg-color="#1e1e29" data-animationappear="off">
            <!-- T463 -->
            <div class="t463" id="t-footer_97174449">
                <div class="t463__maincontainer ">
                    <div class="t463__content" style="">
                        <div class="t463__colwrapper">
                            <div class="t463__col">
                            </div>
                            <div class="t463__col t463__col_center t-align_center">
                                <div class="t463__typo t463__copyright t-name t-name_xs" field="text" style="color: #ffffff;
						">
                                    Вы посетили наш информационный ресурс<br>
                                    Подробную информацию можете узнать на нашем<br>
                                    <a href="https://taviak.ru/" style="color:rgb(255, 255, 255) !important;
						text-decoration: none;
						border-bottom: 1px solid rgb(255, 255, 255);
						box-shadow: inset 0px -0px 0px 0px rgb(255, 255, 255);
						-webkit-box-shadow: inset 0px -0px 0px 0px rgb(255, 255, 255);
						-moz-box-shadow: inset 0px -0px 0px 0px rgb(255, 255, 255);
						" target="_blank" rel="nofollow">
                                        официальном сайте taviak.ru</a>
                                    <br>
                                    <br>
                                    <a href="tel:+7(863) 431-59-40" style="">
                                        +7 (863) 431-59-40<br>
                                        <br>
                                    </a>
                                    <a href="https://st.educom.ru/eduoffices/gateways/get_file.php?id={3366AA76-11D7-0FC9-E467-9C56A6325DFB}&amp;
						name=Acc.pdf" target="_blank" style="color:rgb(255, 255, 255) !important;
						" rel="nofollow">
                                    </a>
                                    <br>
                                </div>
                            </div>
                            <div class="t463__col t-align_right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/footer-->
</div>
<meta name="theme-color" content="#5641ce">
<script type="text/javascript" id="">
    (function (a, d, f, g, b, c, e) {
        d.getElementById(g) || (a.MangoObject = b, a[b] = a[b] || function () {
            (a[b].q = a[b].q || []).push(arguments)
        }, a[b].u = f, a[b].t = 1 * new Date, c = d.createElement("script"), c.async = 1, c.id = g, c.src = f, c.charset = "utf-8", e = d.getElementsByTagName("script")[0], e.parentNode.insertBefore(c, e))
    })(window, document, "//widgets.mango-office.ru/widgets/mango.js", "mango-js", "mgo");
    mgo({multichannel: {id: 2247}});
</script>
<!--/allrecords-->
<!-- Stat -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MM595QJ" height="0" width="0" style="display:none;
	visibility:hidden">
    </iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Yandex.Metrika counter 55205893 -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter55205893 = new Ya.Metrika({
                    id: 55205893,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    ecommerce: true
                });
                w.mainMetrika = 'yaCounter55205893';
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div>
        <img src="https://mc.yandex.ru/watch/55205893" style="position:absolute;
		left:-9999px;
		" alt=""/>
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-127198555-3', 'auto');
    ga('send', 'pageview');
    window.mainTracker = 'user';
    if (!window.mainTracker) {
        window.mainTracker = 'tilda';
    }
    (function (d, w, k, o, g) {
        var n = d.getElementsByTagName(o)[0], s = d.createElement(o), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.key = k;
        s.id = "tildastatscript";
        s.src = g;
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, '4451f1ecc2a999f4fef6564be1ca1cb5', 'script', 'https://stat.tildacdn.com/js/tildastat-0.2.min.js');
</script>
<div class="t360__progress" style="display: none;
">
    <div class="t360__bar t360__barprogressfinished t360__barprogresshidden">
    </div>
</div>
</body>
</html>
