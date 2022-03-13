<? include "../inc/header.php" ?>
<div class="sub-wrap">
    <div class="sub_header_wrap">
        <div class="sub_header"></div>
    </div>
    <div class="content-wrap">
        <div class="all-title">
            <h1 class="ft30 col01 bold">NOTICE</h1>
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
                    <div class="gal-box notice-box">
                        <div class="notice-images-box">
                            <a href="Notice_View.php"><img src="../images/data/test.jpg" alt="test"/></a>
                        </div>
                        <div class="notice-content-box">
                            <a href="Notice_View.php">
                                <span class="bold">[공연안내]</span>
                                <h1 class="bold line15">CHRISTOPHER 1st LIVE IN SEOUL</h1>
                                <h2 class="ft14 col03">미성의 바이브, 덴마크의 댄스 팝 프린스 크리스토퍼 
                                    첫 단독 내한공연 확정! 아름다운 마성을 기반으로...</h2>
                                <span class="date col03 ft12 fwe500">2018-01-01</span>
                            </a>
                        </div>
                    </div>
                    <div class="gal-box notice-box">
                        <div class="notice-images-box">
                            <a href="Notice_View.php"><img src="../images/data/test.jpg" alt="test"/></a>
                        </div>
                        <div class="notice-content-box">
                            <a href="Notice_View.php">
                                <span class="bold">[공연안내]</span>
                                <h1 class="bold line15">CHRISTOPHER 1st LIVE IN SEOUL</h1>
                                <h2 class="ft14 col03">미성의 바이브, 덴마크의 댄스 팝 프린스 크리스토퍼 
                                    첫 단독 내한공연 확정! 아름다운 마성을 기반으로...</h2>
                                <span class="date col03 ft12 fwe500">2018-01-01</span>
                            </a>
                        </div>
                    </div>
                    <div class="gal-box notice-box">
                        <div class="notice-images-box">
                            <a href="Notice_View.php"><img src="../images/data/test.jpg" alt="test"/></a>
                        </div>
                        <div class="notice-content-box">
                            <a href="Notice_View.php">
                                <span class="bold">[공연안내]</span>
                                <h1 class="bold line15">CHRISTOPHER 1st LIVE IN SEOUL</h1>
                                <h2 class="ft14 col03">미성의 바이브, 덴마크의 댄스 팝 프린스 크리스토퍼 
                                    첫 단독 내한공연 확정! 아름다운 마성을 기반으로...</h2>
                                <span class="date col03 ft12 fwe500">2018-01-01</span>
                            </a>
                        </div>
                    </div>
                    <div class="gal-box notice-box">
                        <div class="notice-images-box">
                            <a href="Notice_View.php"><img src="../images/data/test.jpg" alt="test"/></a>
                        </div>
                        <div class="notice-content-box">
                            <a href="Notice_View.php">
                                <span class="bold">[공연안내]</span>
                                <h1 class="bold line15">CHRISTOPHER 1st LIVE IN SEOUL</h1>
                                <h2 class="ft14 col03">미성의 바이브, 덴마크의 댄스 팝 프린스 크리스토퍼 
                                    첫 단독 내한공연 확정! 아름다운 마성을 기반으로...</h2>
                                <span class="date col03 ft12 fwe500">2018-01-01</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="admin-manager">
                    <span class="admin">
                        <a href="#none" class="activ">관리자</a>
                        <a href="Notice_Write.php">글쓰기</a>
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
