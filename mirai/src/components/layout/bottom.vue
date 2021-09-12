<template>
    <div class="endbox">
        <div class="buttonbox">
            <div class="buttontitle">
                <h1>DOCUMENT FINDER</h1>
                <p>여러가지 언어문서들을 한번에!</p>
                <p>여러분의 편리한 학습을위한</p>
                <p>Document Finder!!</p>
            </div>
            <div class="abcbox">
                <h1 style="
                    border: solid 1px white;
                    ">A</h1>
                <h1>L</h1>
                <h1>H</h1>
                <h1>C</h1>
                <h1>J</h1>
                <h1>Js</h1>
                <h1>C+</h1>
                <h1>N</h1>
                <h1>Pc</h1>
                <h1>L</h1>
                <h1>P</h1>
                <h1>U</h1>
                <h1>A</h1>
                <h1>T</h1>
            </div>
        </div>
        <div class="endtitle">
            <div class="endp">
                <p>Code Finder소개</p>
                <p>인재채용</p>
                <p>자주묻는 질문</p>
                <p>이용약관</p>
                <p style="color: red;">개인정보처리방침</p>
                <p>사업자정보확인</p>
            </div>
            <div class="endlink">
                <div class="face">
                    <i class="fab fa-facebook-square"></i>
                    <p>페이스북</p>
                </div>
                <div class="in">
                    <i class="fab fa-instagram-square"></i>
                    <p>인스타그램</p>
                </div>
                <div class="tw">
                    <i class="fab fa-twitter-square"></i>
                    <p>트위터</p>
                </div>
            </div>
        </div>
        <div class="endmain">
            <h2>Code Finder</h2>
            <ul>
                <li>
                    <p>대표자 : 임채환 | 등록번호 : 1801233 | 주소 : 대구광역시 북구 복현로 35(복현동)</p>
                </li>
                <li>
                    <p>개인정보관리책임자 : 예승재(tmdwo7017@naver.com)</p>
                </li>
                <br>
                    <li>
                        <p>관리자는 절대 개인정보 및 전화번호를 개인적으로 묻지 않습니다.
                        </p>
                        <p>개인의 부주의로 발생하는 사고에 대해서는 CodeFinder는 책임지지 않습니다.
                        </p>
                    </li>
                    <br></ul>
                </div>

                <div class="endtime">
                    <h2>고객센터 1692-0825</h2>
                    <ul>
                        <li>
                            <p>영업시간 AM 10:00 ~ PM 17:00 (주말 및 공휴일 휴무)</p>
                        </li>
                        <li>
                            <p>점심시간 PM 12:30 ~ PM 13:30</p>
                        </li>
                        <div class="link"></div>
                    </ul>
                </div>
            </div>
</template>
<script>
    export default {name: "bottom"};
</script>
<style lang="scss" > 
.endbox {
    background: rgba(255, 255, 255, 0.753);
    margin: 0 0 50px;
}
.endbox {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    text-align: left;
}
.endtitle {
    width: 100%;
    height: 100px;
    display: flex;
    flex-wrap: wrap;
    margin-top: 20px;
    margin-left: 10px;
    p {
        display: inline;
        width: 150px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        font-size: 16px;
        padding: 5px 5px 0 0;
    }
}

.endp {
    width: 59%;
    p {
        font-weight: bold;
        margin: 0 5px;
    }
}

.endmain {
    width: 680px;
    margin: 0 0 0 0px;
}
.endtime {
    width: 500px;
    margin: 0 0 0 15px;
}

ul {
    list-style: none;
    padding: 0;
}
.endlink {
    width: 40%;
    text-align: left;
    line-height: 50px;
    display: flex;
    p {
        width: 30%;
        padding: 0 30px 0 5px;
    }
}

h2 {
    padding: 0 0 0 20px;
    margin: 0 0 10px;
}
.buttonbox {
    height: 280px;
    width: 100%;
    background: linear-gradient(to right, #232526,#414345);
    color: white;
    display: flex;
    position: relative;
}
.buttontitle {
    width: 30%;
    height: 80%;
    position: absolute;
    top: 40px;
    left: 30px;
}
.abcbox {
    display: flex;
    flex-wrap: wrap;
    width: 370px;
    height: 80px;
    position: absolute;
    right: 50px;
    top: 60px;
    h1 {
        width: 50px;
        height: 50px;
        padding: 0;
        margin: 0;
        font-size: 40px;
        text-align: center;
        line-height: 50px;
    }
}

</style>