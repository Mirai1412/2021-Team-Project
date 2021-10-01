<template>
    <div class="homebox">

        <div class="homeimgbox">
            <img src='./image/123.jpg' class="mainimg">
            <div class="homeimgtitle">
            <h1>To create a new world</h1> 
            <p>The Village of Programmers.</p>
            </div>
        </div>

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
                         <router-link to="/post"  style="color: black; text-decoration: none;" class="readto">
                        <p class="read" >read more</p>
                         </router-link>
                    </div>
                </div>
            </div>



        </div>

        <div class="homeline">

        </div>

        <div class="homebox2">
            <h1>“Don’t worry if it doesn’t work right.
                <br>
                If everything did, you’d be out of a job.”</h1>
            <p>Mosher’s Law</p>
        </div>

        <div class="homeline">

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
.homebox{
    width: 100%;
    margin: 0 auto;
}
.mainpostbox{
    width: 80%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
}
.read:hover{
    color: green;

}

.title{
    width: 80%;
    display: flex;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 30px;
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
    justify-content: space-between;
    p{
        margin: 20px 0 20px 0;

    }
}
.homeimgbox {
    width: 100%;
    height: 500px;
    position: relative;
    
    .mainimg {
        width: 100%;
        height: 500px;
        position: absolute;
    }
    .homeimgtitle{
        position: absolute;
        color: white;
        border: 2px white solid;
        width: 40%;
        height: 130px;
        padding-top: 30px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
        top: 30%;
        left: 30%;
    }

}
.homeline{
    width: 80%;
    height:  1px;
    border: 1px solid rgba(192, 191, 191, 0.424);
    margin: 0 auto;
    margin-bottom: 50px;
    background-color: rgba(192, 191, 191, 0.424);
}
.homebox2{
    margin: 0 auto;
    width: 80%;
    text-align: center;
    padding-top: 0;
    margin-bottom: 50px;
    color:  rgb(105, 105, 105);
    font-family: 'Bonheur Royale', cursive;
    h1{
        padding: 20px;
    }
}
</style>