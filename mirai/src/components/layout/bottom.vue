<template>
            <div class="endbox">
                <div class="endtitle">
                    <div class="endp">
                        <p>Code Finder소개</p>
                        <p>인재채용</p>
                        <p>자주묻는 질문</p>
                        <p>이용약관</p>
                        <p
                        style="color: red;">개인정보처리방침</p>
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
                        <br>
                    </ul>
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
<style>
.endbox{
    border: 1px solid black;
    background: rgba(214, 214, 214, 0.438);
}
.endbox{
    width: 100%;
    display: flex;
    flex-wrap: wrap; 
    text-align: left;
}
.endtitle{
    width: 100%;
    height: 100px;
    display: flex;
    flex-wrap: wrap; 
    margin-top: 20px;
    margin-left: 10px;
}
.endtitle p{
    display: inline;
    width: 150px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    font-size: 16px;
    padding: 5px 5px 0 0;
}
.endp{
    width: 59%;

}
.endp p{
    font-weight:bold;
    margin: 0 5px;
}
.endmain{
    width: 680px;
    margin: 0 0 0 10px;
}
.endtime{
    width: 500px;
}

ul{
    list-style:none;
    padding: 0;
}
.endlink{
    width: 40%;
    text-align: left;
    line-height: 60px;
    display: flex;
}
.endlink p {
    width: 30%;
    padding:  0 30px 0  5px;
}
h2{
    padding: 0 0 0 20px;
    margin:  0 0 10px 0;
}
</style>