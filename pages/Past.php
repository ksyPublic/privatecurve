<? include "../inc/header.php" ?>
<div class="sub-wrap">
    <div class="sub_header_wrap">
        <div class="sub_header"></div>
    </div>
    <div class="content-wrap">
        <div class="all-title">
            <h1 class="ft30 col01 bold">PAST</h1>
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
                <div class="total-sizing-wrap"><!--gallery START-->
                    <div class="onSale-wrap">
                        <a href="Past_View.php">
                            <div class="images-box-on clr">
                                <img src="../images/data/test.jpg" /><!-- 이미지 영역 -->
                            </div>
                        </a>
                        <div class="content-box">
                            <a href="Past_View.php"><p class="fwe600">MAMAS GUN GOLDEN DAYS PT. 2</p></a>
                            <h2 class="ft14">2019.01.01 - 20</h2>
                            <span class="ft12">세종문화회관</h2>
                        </div>
                    </div>
                    <div class="onSale-wrap">
                        <div class="images-box-on clr">
                            <img src="../images/data/test.jpg" /><!-- 이미지 영역 --><!-- 이미지 영역 -->
                        </div>
                        <div class="content-box">
                            <p class="fwe600">한글ㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹ…</p>
                            <h2 class="ft14">2019.01.01 - 20</h2>
                            <span class="ft12">세종문화회관</h2>
                        </div>
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
<? include "../inc/footer.php" ?>
