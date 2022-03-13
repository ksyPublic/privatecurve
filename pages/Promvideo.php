<? include "../inc/header.php" ?>
<div class="sub-wrap">
    <div class="sub_header_wrap">
        <div class="sub_header"></div>
    </div>
    <div class="content-wrap">
        <div class="all-title">
            <h1 class="ft30 col01 bold">PROMO VIDEO</h1>
        </div>
        <div class="inner">
            <div class="total-sub-wrap">
                <div class="gzs_wrap2 clr">
                    <form name="fsearch" method="get">
                        <div class="nts_select">
                            <!--Select-->
                            <select class="nts_select" id="search_cate" name="y_search" onchange="">
                                <option value="">전체</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                            </select>
                        </div>
                        <!-- //Select end -->
                        <div class="nts_search">
                            <!--Search-->
                            <input type="hidden" name="bo_table" value="photo" />
                            <input type="hidden" name="sca" value="" />
                            <input type="hidden" name="sop" value="and" />
                            <input type="hidden" name="sfl" value="wr_subject||wr_content" />
                            <input type="text" title="검색" name="stx" class="fc02" value="" />
                            <button type="submit" class="submit_btn">검색</button>
                        </div>
                        <!-- //Search end -->
                    </form>
                </div>
                <div class="total-sizing-wrap grid"><!--gallery START-->
                    <div class="gal-box video">
                        <a data-id="mA7FI1Wr4UY" class="youtube_movie" style="cursor: pointer">
                            <div class="video-wrap">
                                <div class="figure"><img src="../images/data/test.jpg" alt="" /></div>
                            </div>
                            <div class="video-title">
                                <p class="bold">JESSIE J 1ST LIVE IN SEOUL 2019</p>
                            </div>
                        </a>
                    </div>
                    <div class="gal-box video">
                        <a href="#">
                            <div class="video-wrap">
                                <div class="figure"><img src="../images/data/test.jpg" alt="" /></div>
                            </div>
                            <div class="video-title">
                                <p class="bold">JESSIE J 1ST LIVE IN SEOUL 2019</p>
                            </div>
                        </a>
                    </div>
                    <div class="gal-box video">
                        <a href="#">
                            <div class="video-wrap">
                                <div class="figure"><img src="../images/data/test.jpg" alt="" /></div>
                            </div>
                            <div class="video-title">
                                <p class="bold">JESSIE J 1ST LIVE IN SEOUL 2019</p>
                            </div>
                        </a>
                    </div>
                    <div class="gal-box video">
                        <a href="#">
                            <div class="video-wrap">
                                <div class="figure"><img src="../images/data/test.jpg" alt="" /></div>
                            </div>
                            <div class="video-title">
                                <p class="bold">JESSIE J 1ST LIVE IN SEOUL 2019</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="pageNav">
                    <div class="page">
                        <a href="#none" class="first"></a>
                        <!--패드웹버전-->
                        <span class="page_p">
                        <a href="#none" class="act">1</a><!--현재페이지-->
                        <a href="#none">2</a>
                        <a href="#none">3</a>
                        <a href="#none">4</a>
                        <a href="#none">5</a> </span><!--패드웹버전 끝-->
                        <a href="#none" class="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="movie" style="display: none;">
    <div id="video_pop" style="display: none;">
        <a href="#stop_video">닫기</a>
        <div class="pop_con"></div>
    </div>
</div>
<script type="text/javascript">

//시작
$(document).ready(function() {
	$("#video_pop > a").on('click', function() {
		//팝업 닫기
		$("#video_pop .pop_con").empty();
		$("#video_pop, div.movie").fadeOut();
		$(".ov-bg, div.movie").fadeOut();
	});
	//영문 동영상
	$(".youtube_movie").click(function() {
		var vdurl = $(this).attr("data-id");
		if ($(window).width() < 900) {
			$(this).attr("href", "https://youtu.be/" + vdurl).attr("target", "_blank");
		} else {
			$(this).attr("href", "#none").attr("target", "_self");
			
			$("#video_pop .pop_con").css("height", 400).html(
				'<iframe width="" height="" src="https://www.youtube.com/embed/' + vdurl +
				'?rel=0&amp;showinfo=0&amp;ecver=1&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>'
			);
			$("#video_pop, div.movie").fadeIn();
			$(".ov-bg").fadeIn();
		}
	});
});
$(window).load(function(){
	var $container = $('.grid');
	// initialize
	$container.masonry({
		itemSelector: '.gal-box',
		fitWidth: false,
	});
});
</script>

<? include "../inc/footer.php" ?>
