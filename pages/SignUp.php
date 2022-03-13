<? include "../inc/header.php" ?>
<div class="sub-wrap">
    <div class="sub_header_wrap">
        <div class="sub_header"></div>
    </div>
    <div class="content-wrap">
        <div class="all-title">
            <h1 class="ft30 col01 bold">SIGN UP</h1>
        </div>
        <div class="inner">
            <div class="total-sub-wrap">
                <div class="signup-wrap">
                    <div class="sign-box">
                        <h1 class="sing-title ft30 col01 fwe300">
                            SNS 회원가입 안내
                        </h1>
                        <span class="fwe100 let01">
                            SNS 계정으로 간편하게 회원 가입하실 수 있습니다. 단, 일부 서비스와 회원 혜택에 제한이 있을 수 있습니다.
                        </span>
                        <ul class="sign">
                            <li class="kakao"><a href=""><span></span>카카오로 회원가입</a></li>
                            <li class="naver"><a href=""><span></span>네이버 회원가입</a></li>
                            <li class="facebook"><a href=""><span></span>페이스북 회원가입</a></li>
                            <li class="google"><a href=""><span></span>구글 회원가입</a></li>
                        </ul>
                    </div>
                    <form  name="fregister" id="fregister" action="#" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">
                        <div class="sign-box-wrap clr">
                            <div class="basic mgt20">
                                <input type="checkbox" name="chk_all" value="1" id="checkall">
                                <label for="checkall">전체선택</label>
                            </div>
                            <div class="basic border-box">
                                <input type="checkbox" name="agree" value="2" id="chk1">
                                <label for="chk1">회원가입약관의 내용에 동의합니다</label>
                            </div>
                            <!--회원가입약관 내용-->
                            <div class="border-box-textArea">해당 홈페이지에 맞는 회원가입약관을 입력합니다.</div>
                            
                            <div class="basic border-box">
                                <input type="checkbox" name="agree2" value="3" id="chk2">
                                <label for="chk2">개인정보처리방침안내의 내용에 동의합니다</label>
                            </div>
                            <!--개인정보처리방침안내의 내용-->
                            <div class="border-box-textArea">
                                <!-- <table class="privacy_table">
                                    <caption>개인정보처리방침안내</caption>
                                    <thead>
                                    <tr>
                                        <th>목적</th>
                                        <th>항목</th>
                                        <th>보유기간</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>이용자 식별 및 본인여부 확인</td>
                                        <td>아이디, 이름, 비밀번호</td>
                                        <td>회원 탈퇴 시까지</td>
                                    </tr>
                                    <tr>
                                        <td>고객서비스 이용에 관한 통지,<br>CS대응을 위한 이용자 식별</td>
                                        <td>연락처 (이메일, 휴대전화번호)</td>
                                        <td>회원 탈퇴 시까지</td>
                                    </tr>
                                    </tbody>
                                </table> -->
                            </div>
                            <div class="sign-il-btn ">
                                <button type="submit" href="./join-Us.php" class="bak3">회원가입</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<script>
function fregister_submit(f)
{
    if (!f.agree.checked) {
        alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
        f.agree.focus();
        return false;
    }

    if (!f.agree2.checked) {
        alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
        f.agree2.focus();
        return false;
    }

    return true;
}

jQuery(function($){
    // 모두선택
    $("input[name=chk_all]").click(function() {
        if ($(this).prop('checked')) {
            $("input[name^=agree]").prop('checked', true);
        } else {
            $("input[name^=agree]").prop("checked", false);
        }
    });
});

</script>
    </div>
</div>
<? include "../inc/footer.php" ?>
