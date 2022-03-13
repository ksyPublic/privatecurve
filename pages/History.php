<? include "../inc/header.php" ?>
<div class="sub-wrap">
    <div class="sub_header_wrap">
        <div class="sub_header"></div>
    </div>
    <div class="content-wrap">
        <div class="all-title">
            <h1 class="ft30 col01 bold">HISTORY</h1>
        </div>
        <div class="inner">
            <div class="total-sub-wrap">
                <div class="gzs_wrap clr">
                    <form name="fsearch" method="get">
                        <div class="nts_select"><!--Select-->
                            <select class="nts_select" id="search_cate" name="y_search" onchange="">
                                <option value="">전체</option>
                                <option value="2018" >2018</option>
                                <option value="2017" >2017</option>
                                <option value="2016" >2016</option>
                                <option value="2015" >2015</option>
                            </select>
                        </div><!-- //Select end -->
                    </form>
                </div>
                <div class="change-title">
                    <h1 class="ft24">전체</h1>
                </div>
                <div class="total-sizing-wrap grid"><!--gallery START-->
                    <div class="gal-box width01 dpdi mgt01">
                        <div class="images-box">
                            <img src="../images/data/프커홈페이지_히스토리_1.jpg">
                        </div>
                        <div class="name-box brd">
                            <div class="pad">
                                <p class="ft14 col04 fwe500">테스트중입니다</p>
                                <h2 class="ft14 col04 mgt8 fwe300">TEST INFO</h2>
                                <h3 class="ft12 col03 mgt13">1.26 @현대카드 언더스테이지</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gal-box width01 dpdi mgt01">
                        <div class="images-box">
                            <img src="http://sjf.zcx.kr/data/file/photo/thumb-0_erbMFZti_e43596280005939c6277cbda07ff3b6e9844064c_314x443.jpg">
                        </div>
                        <div class="name-box brd">
                            <div class="pad">
                                <p class="ft14 col04 fwe500">테스트중입니다</p>
                                <h2 class="ft14 col04 mgt8 fwe300">TEST INFO</h2>
                                <h3 class="ft12 col03 mgt13">1.26 @현대카드 언더스테이지</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gal-box width01 dpdi mgt01">
                        <div class="images-box">
                            <img src="http://sjf.zcx.kr/data/file/photo/thumb-0_erbMFZti_e43596280005939c6277cbda07ff3b6e9844064c_314x443.jpg">
                        </div>
                        <div class="name-box brd">
                            <div class="pad">
                                <p class="ft14 col04 fwe500">테스트중입니다</p>
                                <h2 class="ft14 col04 mgt8 fwe300">TEST INFO</h2>
                                <h3 class="ft12 col03 mgt13">1.26 @현대카드 언더스테이지</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gal-box width01 dpdi mgt01">
                        <div class="images-box">
                            <img src="../images/sub/sub_header.jpg">
                        </div>
                        <div class="name-box brd">
                            <div class="pad">
                                <p class="ft14 col04 fwe500">테스트중입니다</p>
                                <h2 class="ft14 col04 mgt8 fwe300">TEST INFO</h2>
                                <h3 class="ft12 col03 mgt13">1.26 @현대카드 언더스테이지</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gal-box width01 dpdi mgt01">
                        <div class="images-box">
                            <img src="http://sjf.zcx.kr/data/file/photo/thumb-0_erbMFZti_e43596280005939c6277cbda07ff3b6e9844064c_314x443.jpg">
                        </div>
                        <div class="name-box brd">
                            <div class="pad">
                                <p class="ft14 col04 fwe500">테스트중입니다</p>
                                <h2 class="ft14 col04 mgt8 fwe300">TEST INFO</h2>
                                <h3 class="ft12 col03 mgt13">1.26 @현대카드 언더스테이지</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gal-box width01 dpdi mgt01">
                        <div class="images-box">
                            <img src="../images/sub/sub_header.jpg">
                        </div>
                        <div class="name-box brd">
                            <div class="pad">
                                <p class="ft14 col04 fwe500">테스트중입니다</p>
                                <h2 class="ft14 col04 mgt8 fwe300">TEST INFO</h2>
                                <h3 class="ft12 col03 mgt13">1.26 @현대카드 언더스테이지</h3>
                            </div>
                        </div>
                    </div>
                </div><!-- //gallery end -->
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
<script>
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
