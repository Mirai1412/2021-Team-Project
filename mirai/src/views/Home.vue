<template>
    <div class="box">
        <div class="title">
            <p>All Posts</p>
            <p>Laravel</p>
            <p>HTML&CSS</p>
            <p>JAVA</p>
        </div>

        <div class="mainpostbox">

            <div class="postbox">
                <div class="homepost">
                    <img src='./image/ex.jpg' class="img">
                    <div class="tiltebox">
                        <img src="./image/ex.jpg" class="profileimg">
                        <p class="pname">mirai</p>
                        <p class="pl">Laravel</p>
                        <p class="pday">2021-09-21</p>
                    </div>
                    <div class="contentbox">
                        <p class="ptitle">Please help me with this question.</p>
                        <p class="pcontent">User user ID cannot be generated. What should I do?</p>
                    </div>
                    <div class="contentbuttom">
                        <p class="pviews">12 views</p>
                        <p class="pcomment">4 comments</p>
                    </div>
                </div>
            </div>

            <div class="postbox">
                <div class="homepost">
                    <img src='./image/ex.jpg' class="img">
                    <div class="tiltebox">
                        <img src="./image/ex.jpg" class="profileimg">
                        <p class="pname">mirai</p>
                        <p class="pl">Laravel</p>
                        <p class="pday">2021-09-21</p>
                    </div>
                    <div class="contentbox">
                        <p class="ptitle">Please help me with this question.</p>
                        <p class="pcontent">User user ID cannot be generated. What should I do?</p>
                    </div>
                    <div class="contentbuttom">
                        <p class="pviews">12 views</p>
                        <p class="pcomment">4 comments</p>
                    </div>
                </div>
            </div>

            <div class="postbox">
                <div class="homepost">
                    <img src='./image/ex.jpg' class="img">
                    <div class="tiltebox">
                        <img src="./image/ex.jpg" class="profileimg">
                        <p class="pname">mirai</p>
                        <p class="pl">Laravel</p>
                        <p class="pday">2021-09-21</p>
                    </div>
                    <div class="contentbox">
                        <p class="ptitle">Please help me with this question.</p>
                        <p class="pcontent">User user ID cannot be generated. What should I do?</p>
                    </div>
                    <div class="contentbuttom">
                        <p class="pviews">12 views</p>
                        <p class="pcomment">4 comments</p>
                    </div>
                </div>
            </div>

                        <div class="postbox">
                <div class="homepost">
                    <img src='./image/ex.jpg' class="img">
                    <div class="tiltebox">
                        <img src="./image/ex.jpg" class="profileimg">
                        <p class="pname">mirai</p>
                        <p class="pl">Laravel</p>
                        <p class="pday">2021-09-21</p>
                    </div>
                    <div class="contentbox">
                        <p class="ptitle">Please help me with this question.</p>
                        <p class="pcontent">User user ID cannot be generated. What should I do?</p>
                    </div>
                    <div class="contentbuttom">
                        <p class="pviews">12 views</p>
                        <p class="pcomment">4 comments</p>
                    </div>
                </div>
            </div>
                        <div class="postbox">
                <div class="homepost">
                    <img src='./image/ex.jpg' class="img">
                    <div class="tiltebox">
                        <img src="./image/ex.jpg" class="profileimg">
                        <p class="pname">mirai</p>
                        <p class="pl">Laravel</p>
                        <p class="pday">2021-09-21</p>
                    </div>
                    <div class="contentbox">
                        <p class="ptitle">Please help me with this question.</p>
                        <p class="pcontent">User user ID cannot be generated. What should I do?</p>
                    </div>
                    <div class="contentbuttom">
                        <p class="pviews">12 views</p>
                        <p class="pcomment">4 comments</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
    export default {
        name: "home",
        data: () => ({
         show: false,
    }),
        };
</script>
<style lang="scss" > 
.box{
    width: 1350px;
    margin: 0 auto;
}
.mainpostbox{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}
.title{
    width: 100%;
    display: flex;
    margin: 30px 0;
    p{
    margin: 0 20px;
    color: rgb(116, 115, 115);
    }
    p:hover{
        color: rgb(0, 0, 0);
    }
}

.homepost{
    width: 300px;
    margin-bottom: 50px;
    border: rgb(179, 177, 177) 1px solid;
    img{
        width: 100%;
    }
}
.postbox{
    margin: 0 18.750px;
}
.tiltebox{
    position: relative;
    height: 70px;
    
    .profileimg{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: rgb(179, 177, 177) 1px solid;
        position: absolute;
        top: 10px;
        left: 23px;
    }

    .pname{
        width: 200px;
        height: 25px;
        position: absolute;
        top: 10px;
        left: 90px;
    }
    .pl{
        width: 50px;
        position: absolute;
        top: 33px;
        left: 90px;
        color: rgba(93, 91, 91, 0.746);
    }
    .pday{
        width: 90px;
        position: absolute;
        top: 33px;
        right: 15px;
        color: rgba(93, 91, 91, 0.746);
    }
}

.contentbox{
    border-bottom: black 1px solid;
    width: 250px;
    margin: 0 auto;
    color: rgba(93, 91, 91, 0.746);
    .ptitle{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        font-size: 20px;
        color: black;
    }
    .pcontent{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        color: rgba(93, 91, 91, 0.746);
    }
}

.contentbuttom{
    width: 250px;
    margin: 0 auto;
    display: flex;
    p{
        margin: 20px 20px 20px 0;
    }
}
</style>