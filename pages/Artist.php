<? include "../inc/header.php" ?>
<div class="sub-wrap">
    <div class="sub_header_wrap">
        <div class="sub_header"></div>
    </div>
    <div class="content-wrap">
        <div class="all-title">
            <h1 class="ft30 col01 bold">ARTIST</h1>
        </div>
        <div class="inner">
            <div class="total-sub-wrap">
                <div class="gzs_wrap2 clr">
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
                        <div class="nts_search"><!--Search-->
                            <input type="hidden" name="bo_table" value="photo">
                            <input type="hidden" name="sca" value="">
                            <input type="hidden" name="sop" value="and">
                            <input type="hidden" name="sfl" value="wr_subject||wr_content" />
                            <input type="text" title="검색" name="stx" class="fc02" value="" />
                            <button type="submit" class="submit_btn">검색</button>
                        </div><!-- //Search end -->
                    </form>
                </div>
                <div class="total-sizing-wrap grid"><!--gallery START-->
                    <div class="gal-box art-box">
                        <a href="Artist_View.php">
                            <div class="images-box">
                                <img src="../images/data/mamas.jpg" />
                            </div>
                            <div class="name-box">
                                <p class="ft24 white bold">MAMAS GUN</p>
                                <h2 class="ft16 white mgt8 fwe300">마마스건</h2>
                            </div>
                        </a>
                    </div>
                    <div class="gal-box art-box">
                        <a href="Artist_View.php">
                            <div class="images-box">
                                <img src="../images/sub/sub_header.jpg" />
                            </div>
                            <div class="name-box">
                                <p class="ft24 white bold">MAMAS GUN</p>
                                <h2 class="ft16 white mgt8 fwe300">마마스건</h2>
                            </div>
                        </a>
                    </div>
                    <div class="gal-box art-box">
                        <a href="Artist_View.php">
                            <div class="images-box">
                                <img src="../images/data/mamas.jpg" />
                            </div>
                            <div class="name-box">
                                <p class="ft24 white bold">MAMAS GUN</p>
                                <h2 class="ft16 white mgt8 fwe300">마마스건</h2>
                            </div>
                        </a>
                    </div>
                    <div class="gal-box art-box">
                        <a href="Artist_View.php">
                            <div class="images-box">
                                <img src="../images/data/mamas.jpg" />
                            </div>
                            <div class="name-box">
                                <p class="ft24 white bold">MAMAS GUN</p>
                                <h2 class="ft16 white mgt8 fwe300">마마스건</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="admin-manager">
                        <span class="admin">
                            <a href="#none" class="activ">관리자</a>
                            <a href="Artist_Write.php">글쓰기</a>
                            <a href="#none">수정</a>
                            <a href="#none">삭제</a>
                        </span>
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
