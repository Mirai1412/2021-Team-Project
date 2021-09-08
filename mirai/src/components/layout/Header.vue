<template>
    <div class="title" style="border: solid 1px black;">
        <div class="logo">
            <i class="fas fa-chess-rook">
                <h2>
                    Code Finder
                </h2>
            </i>
        </div>
        <div class="none"></div>
        <div class="login">

            <input type="checkbox" id="popup">
                <label for="popup">메뉴</label>
                <div>
                    <div>
                        <label for="popup">
                            <h1>X</h1>
                        </label>
                    </div>
                    <label for="popup">
                        <div class="tas">
                            <ul>
                                <li style="font-size: 23px;">고객지원</li>
                                <li>고객센터안내</li>
                                <li>고객센터 FAQ</li>
                                <li>통합문의</li>
                                <li>제휴서비스</li>
                                <li>이벤트</li>
                                <li>공지사항</li>
                            </ul>

                        </div>
                        <div class="tas2">
                            <ul>
                                <li style="font-size: 23px;">Code Finder 소개</li>
                                <li>회사소개</li>
                                <li>보도자료</li>
                                <li>협력업체모집</li>
                            </ul>
                        </div>
                        <div class="tas3">
                            <ul>
                                <li style="font-size: 23px;">마이페이지</li>
                                <li>글작성목록</li>
                                <li>나의 문의내역</li>
                                <li>정보수정</li>
                                <li>비밀번호 번경</li>
                                <li>회원탈퇴</li>
                            </ul>
                        </div>
                        <div class="tas4">
                            <ul>
                                <li style="font-size: 23px;">채용정보</li>
                                <li>인사제도</li>
                                <li>채용공고</li>
                                <li>입사지원</li>
                            </ul>
                        </div>
                        <div class="tas5">
                            <ul>
                                <li style="font-size: 23px;">회원서비스</li>
                                <li>로그인</li>
                                <li>아이디/비밀번호 찾기</li>
                                <li>회원가입</li>
                            </ul>
                        </div>
                        <div class="tas6">
                            <ul>
                                <li style="font-size: 23px;">기타 서비스</li>
                                <li>사이트 이용약관</li>
                                <li>개인정보 처리방침</li>
                                <li>사이트 운영&관리방침</li>
                                <li>사이트맵</li>
                                <li>통합검색</li>
                                <li>고객프로그램 안내</li>
                            </ul>
                        </div>
                    </label>
                </div>

            </div>
        </div>
</template>

<script>
export default {
    name: "header"
        };
</script>
<style>
        body {
            max-width: 1200px;
            margin: 0 auto;
        }
        .title {
            display: flex;
            padding: 10px 30px;
            background-color: #263343;
            justify-content: space-between;
            height: 80px;
            line-height: 80px;
        }
        .title h2 {
            line-height: 55px;
            color: white;
        }
        .linkbox {
            display: flex;
            width: 165px;
            justify-content: space-between;
        }
        .logo {
            font-size: 25px;
            color: rgb(255, 255, 255);
        }
        /*팝업*/
input[id*="popup"]{
    display: none;
}
input[id*="popup"] + label {
    padding: 20px;
    background: #263343;
    color: #fff;
    height: 60px;
    line-height: 60px;
}
input[id*="popup"] + label + div {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 100;
}
input[id*="popup"] + label + div > div{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 90%;
    height: 70%;
    border: 1px solid white;
    z-index: 2;
}
input[id*="popup"] + label + div > div > label {
    position: absolute;
    top: 0%;
    right: 0%;
    transform: translate(40%, -40%);
    z-index: 1;
    width: 10px;
    height: 10px;
    line-height: 10px;
}
input[id*="popup"] + label + div > div > label >h1{
    margin: 0 0 0 0;
    position: absolute;
    top: 20px;
    right: 15px;
    color: white;
    font-size: 30px;
}

input[id*="popup"] + label + div > label  {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.829);
    z-index: 1;
}
input[id*="popup"] + label + div{
    opacity: 0; 
    visibility: hidden;
    transition: all 1s;
}
input[id*="popup"]:checked + label + div {
    opacity: 1;
    visibility: visible;
}
.tas{
    position: absolute;
    top: 19%;
    left: 6%;
    color: white;
}
.tas2{
    position: absolute;
    top: 19%;
    left: 18%;
    color: white;
}
.tas3{
    position: absolute;
    top: 19%;
    left: 34%;
    color: white;
}
.tas4{
    position: absolute;
    top: 19%;
    left: 49%;
    color: white;
}
.tas5{
    position: absolute;
    top: 19%;
    left: 62%;
    color: white;
}
.tas6{
    position: absolute;
    top: 19%;
    left: 78%;
    color: white;
}
/*팝업*/
ul{
    list-style:none;
}
li{
    margin: 13px 0;
    font-size: 15px;
}
</style>