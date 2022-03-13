(function($) {
    $(function() {
        // /* select */
        // $("#kst_sel select").bind("change", function() {
        //     $(this)
        //         .siblings("label")
        //         .text(
        //             $(this)
        //                 .children("option:selected")
        //                 .text()
        //         );
        // });

        $(window).scroll(function() {
            var thg = $(this).scrollTop();
            if (thg > 0) {
                $(".header .header_wrap").addClass("h_scroll");
                $(".sub_location").addClass("sb_scroll");
            } else {
                $(".header .header_wrap").removeClass("h_scroll");
                $(".sub_location").removeClass("sb_scroll");
            }
        });

        sublo();

        var responSize = 1263, //1280
            responPadMax = 1183, // 1196
            responPadJung = 1006; //1023
        responPadMin = 751; //768
        var device = "";
        var deviceCheck = function() {
            winWidth = $(window).width();
            if (winWidth >= responSize && winWidth >= responPadMax) {
                if (device == "pc") {
                } else {
                    device = "pc";
                    eventreset(device);
                    allm();

                    pcmenu(device);
                    //PC---------------------
                }
            } else if (winWidth <= responPadMax && winWidth >= responPadJung) {
                if (device == "pad") {
                } else {
                    device = "pad";
                    eventreset(device);
                    allm02();
                    mbmenu(device);
                    //pad-------------------
                }
                //---------------------------------------
            } else if (winWidth <= responPadJung && winWidth >= responPadMin) {
                if (device == "pad") {
                } else {
                    device = "pad";
                    eventreset(device);
                    allm02();
                    mbmenu(device);
                    nm_menu();
                    //pad-------------------
                }
                //---------------------------------------
            } else {
                if (device == "mb") {
                } else {
                    device = "mb";
                    eventreset(device);
                    allm02();
                    mbmenu(device);
                    nm_menu();

                    //mb-------------------
                }
            }
        };
        deviceCheck();

        $(window).resize(function() {
            deviceCheck();
            $("body").css("position", "static");
            nopi();
        });
        /* */
        function eventreset(device) {
            if ($("#mnb_btn").size() > 0) {
                $("#mnb_btn, #mnb_close").remove();
                $(".ov-bg").hide();
            }
            $("#header").unbind("mouseleave");
            $(".header_wrap").unbind("mouseleave");
            $(".header_wrap > li").unbind("click");
            $(".header_wrap > li").unbind("slideDown");
            $(".header_wrap > li").unbind("mouseenter");
            $(".fix_menu, .sub_menu ul").unbind("slideUp");
            $(".fix_menu, .bus_visual, .depth3").attr("style", "");
            $(".header_wrap > li").removeClass("open");
            $(".all_menu").unbind("click");
            $(".ov-bg").hide();
            $(".sub_top").css("overflow", "hidden");
            $(".net_menu").show();
            $(".mo_net_menu").unbind("click");
        }
        /*pc-menu*/
        function pcmenu(device) {
            $("#header")
                .removeClass("mp")
                .addClass("pc");
            $(".pc .fix_menu").hide();

            $(".header_wrap .gnb").each(function() {
                $(this).on("mouseenter", function() {
                    if (!$(".header_wrap").hasClass("on")) {
                        $(".header_wrap").addClass("on");
                        $(".header_wrap").addClass("h_scroll");
                        $(".header_wrap")
                            .find(".fix_menu")
                            .stop()
                            .slideDown(300);
                        $(".header_wrap").addClass("active");
                    }
                });
            });

            $(".header_wrap").mouseleave(function() {
                $(".header_wrap")
                    .find(".fix_menu")
                    .slideUp(300);
                $(".header_wrap.on").removeClass("on");
                $(window).scroll(function() {
                    var scroll = $(this).scrollTop();
                    if (scroll > 0) {
                        $(".header_wrap").addClass("h_scroll");
                    } else {
                        $(".header_wrap").removeClass("h_scroll");
                    }
                });
            });
        }

        function mbmenu(device) {
            $("#header")
                .removeClass("pc")
                .addClass("mp");
        }

        function allm() {
            eventreset(device);
            $(".hidden_menu")
                .removeClass("mp02")
                .addClass("pc02");
            $(".hidden_menu").hide();
            $(".all_menu").click(function(i) {
                $(".hidden_menu").html($(".gnb-bar").html());
                $(".mb-list01").html($(".depth1").html());
                $(".mb-list02").html($(".depth2").html());
                $(".mb-list03").html($(".depth3").html());
                $(".mb-list04").html($(".depth4").html());
                $(".mb-list05").html($(".depth5").html());

                $(".hidden_menu").prepend('<a href="#none" class="hdb_btn" onclick="javascript:return false;"></a>');
                // $(".hidden_menu .gnb > li").remove();
                // $(".hidden_menu .depth1").removeClass("clr");
                $(".hidden_menu").fadeIn();
                $(".ov-bg").fadeIn();

                $(".hdb_btn").click(function() {
                    $(".ov-bg").fadeOut();
                    $(".hidden_menu").fadeOut();
                    $("body").css("position", "static");
                });

                $(".hidden_menu .gnb > li > a").click(function() {
                    $(".hidden_menu .gnb > li > div").slideUp();
                    $(".hidden_menu .gnb > ul").removeClass("on");
                    if (
                        !$(this)
                            .next()
                            .is(":visible")
                    ) {
                        $(this)
                            .next()
                            .slideDown();
                        $(this).addClass("on");
                    }
                });
            });
        }

        function allm02() {
            eventreset(device);
            $(".hidden_menu")
                .removeClass("pc02")
                .addClass("mp02");
            $(".hidden_menu").hide();
            //$('body').css('position','fixed');
            $(".all_menu").click(function() {
                $(".hidden_menu").html($(".gnb-bar").html());
                $(".mb-list01").html($(".depth1").html());
                $(".mb-list02").html($(".depth2").html());
                $(".mb-list03").html($(".depth3").html());
                $(".mb-list04").html($(".depth4").html());
                $(".mb-list05").html($(".depth5").html());
                $(".hidden_menu").prepend('<a href="#none" class="hdb_btn" onclick="javascript:return false;"></a>');
                $(".hidden_menu .depth1").removeClass("clr");
                $(".ov-bg").fadeIn();
                $(".hidden_menu").fadeIn();
                $("body").css("position", "static");
                $(".hidden_menu .mon").attr("href", "#none");

                $(".hdb_btn").click(function() {
                    $(".ov-bg").fadeOut();
                    $(".hidden_menu").fadeOut();
                    $("body").css("position", "static");
                });

                $(".hidden_menu .gnb > li > a").click(function() {
                    $(".hidden_menu .gnb > li > div").slideUp();
                    $(".hidden_menu .depth1 > li > a").removeClass("on");
                    if (
                        !$(this)
                            .next()
                            .is(":visible")
                    ) {
                        $(this)
                            .next()
                            .slideDown();
                        $(this).addClass("on");
                    }
                });
            });
        }

        function sublo() {
            $(".sub_menu .sd_txt").click(function() {
                $(".sub_menu .sub_hidden").slideUp();
                $(".sub_top").css("overflow", "visible");
                $(".sub_menu .sd_txt").removeClass("sp");
                if (
                    !$(this)
                        .next()
                        .is(":visible")
                ) {
                    $(this)
                        .next()
                        .slideDown();
                    $(this).addClass("sp");
                }
            });
        }

        function nm_menu() {
            $(".net_menu").hide();
            $(".mo_net_menu").text($(".net_menu .on a").text());
            $(".mo_net_menu").append("<i></i>");
            $(".net_menu  li a").append("<i></i>");
            $(".mo_net_menu").click(function() {
                $(".net_menu")
                    .stop()
                    .slideToggle(300);
            });
        }

        /* height */
        function nopi() {
            var sameHeight = 0; //전체높이 처음에 0
            $(".box").ready(function() {
                //.box클래스가 문서에 로딩되면 실행
                $(".box").css("height", "");
                $(".box").each(function() {
                    //.box클래스애들 갯수만큼 반복
                    var itemHeight = $(this).height(); //.box 높이 로 변경
                    if (itemHeight >= sameHeight) {
                        //.box클래스 높이가 크거나 같으면
                        sameHeight = itemHeight; //전체높이가 이번 .box 높이 로 변경
                    }
                });
                $(".box").css("height", sameHeight); //.box 높이를 전체높이로 변경 inline에 css로 높이가 들어감
            });
        }
        nopi();
    });
})(jQuery);
