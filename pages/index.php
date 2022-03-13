<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes"
        />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" type="text/css" href="../css/common.css" />
        <link rel="stylesheet" type="text/css" href="../css/font.css" />
        <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="../js/gnb.js"></script>
        <script type="text/javascript" src="../js/masonry.min.js"></script>

        <title>메인페이지 코딩</title>
    </head>
    <body>
        <div class="wrap">
            <div class="header">
                <div class="header_wrap pc" id="header">
                    <div class="gnb-bar">
                        <h1 class="logo">
                            <a href="index.html">
                                프라이빗커브
                            </a>
                        </h1>
                        <ul class="gnb clr">
                            <li class="dep1"><a href="#" alt="COMPANY">COMPANY</a><div class="mb-list01"></div></li>
                            <li class="dep2"><a href="#" alt="ARTIST">ARTIST</a><div class="mb-list02"></div></li>
                            <li class="dep3"><a href="#" alt="NEWS">NEWS</a><div class="mb-list03"></div></li>
                            <li class="dep4"><a href="#" alt="LIVE&TICKET">LIVE&TICKET</a><div class="mb-list04"></div></li>
                            <li class="dep5"><a href="#" alt="VIDEO">VIDEO</a><div class="mb-list05"></div></li>
                        </ul>
                        <div class="hd-right-wrap">
                            <ul class="">
                                <li class="pbt20 mblog"><a href="login.php" alt="로그인">로그인</a></li>
                                <li class="mrt20 pbt20 mblog"><a href="SignUp.php" alt="회원가입">회원가입</a></li>
                                <a href="" alt="페이스북"><li class="face mbsns"></li></a>
                                <a href="" alt="트위터"><li class="twit mbsns"></li></a>
                                <a href="" alt="인스타"><li class="insta mbsns"></li></a>
                                <a href="" alt="유튜브"><li class="youtube mbsns"></li></a>
                                <a href="" alt="블로그"><li class="blog mbsns"></li></a>
                            </ul>
                        </div>
                    </div>
                   <div class="fix_menu">
                        <div class="fix-nav clr">
                            <div class="depth1">
                                <ul class="on">
                                    <li><a href="company.php">ABOUT</a></li>
                                    <li><a href="History.php">HISTORY</a></li>
                                    <li><a href="Contact.php">CONTACT US</a></li>
                                </ul>
                            </div>
                            <div class="depth2">
                                <ul class="on">
                                    <li><a href="Artist.php">ARTIST</a></li>
                                </ul>
                            </div>
                            <div class="depth3">
                                <ul class="on">
                                    <li><a href="Notice.php">NOTICE</a></li>
                                    <li><a href="Article.php">ARTICLE</a></li>
                                </ul>
                            </div>
                            <div class="depth4">
                                <ul class="on">
                                    <li><a href="Onsale.php">ONSALE</a></li>
                                    <li><a href="Past.php">PAST</a></li>
                                </ul>
                            </div>
                            <div class="depth5">
                                <ul class="on">
                                    <li><a href="Promvideo.php">PROMO VIDEO</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- //fix_menu -->
                    <div class="fl all_menu"><a href="#none" class="" onclick="javascript:return false;">all menu</a></div>
                </div>
               
            </div>
            <script>
                $( window ).resize(function() {
                        var windowWidth = $( window ).width();
                        if ( windowWidth < 371) {
                        //창 가로 크기가 371 미만일 경우
                        $('.ms_slider .ms01').attr('style', "background:url('../images/main/main01.jpg') center center no-repeat;")
                        } else if ( windowWidth < 769) {
                        //창 가로 크기가 769 미만일 경우
                        $('.ms_slider .ms01').attr('style', "background:url('../images/main/Main02.jpg') center center no-repeat;")
                        } else {
                        //창 가로 크기가 769 보다 클 경우
                        $('.ms_slider .ms01').attr('style', "background:url('../images/main/Main03.jpg') center center no-repeat;")
                    }
                });
            </script>
            <div class="main_rolling">
                <ul class="ms_slider">
                    <!--default-->
                    <li class="ms01" style="background:url('../images/main/main01.jpg') center center no-repeat;"></li>
                    <li class="ms02" style="background:url('../images/main/Main02.jpg') center center no-repeat;"></li>
                    <li class="ms03" style="background:url('../images/main/Main03.jpg') center center no-repeat;"></li>
                </ul>
            </div>
            <div class="footer_wrap">
                <div class="inner">
                    <ul class="link-footer">
                        <li><a href="">개인정보처리방침</a></li>
                        <li><a href="">이용약관</a></li>
                        <li><a href="">이메일무단수집거부</a></li>
                    </ul>
                    <h1 class="juso">
                        B-310 (Jamsil The-Sharp Starpark) 10, Olympic-ro 35ga-gil, Songpa-gu, Seoul, 138-240 Korea
                    </h1>
                    <ul class="linkTo">
                        <li><a href="">copyright(C) private curve 2013 All rights reserved.</a></li>
                        <li><a href="mailto:info@privatecurve.com">contact us : info@privatecurve.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hidden_menu pc02">

        </div>
        <div class="ov-bg"></div>
    </body>
    <script>
        (function($) {
            $(document).ready(function() {
                $(".ms_slider").bxSlider({
                    pager: true,
                    controls: true,
                    mode: "fade",
                    infiniteLoop: true,
                    auto: true,
                    autoStart: true,
                    autoDirection: "next",
                    autoHover: true,
                    pause: 3000,
                    autoControls: false,
                    pagerType: "full",
                    captions: true,
                    speed: 200
                });
            });
        })(jQuery);
    </script>
</html>
