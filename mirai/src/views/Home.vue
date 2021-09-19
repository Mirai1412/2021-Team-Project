<template>
    <div class="box">
        <div class="title">
            <p>All Posts</p>
            <p>Laravel</p>
            <p>HTML&CSS</p>
            <p>JAVA</p>
        </div>
        <div class="postbox">
            <div class="homepost">
                <img src='./image/ex.jpg' class="img">
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
    height: 500px;
    margin-bottom: 50px;
    border: 1px solid black;
    img{
        width: 100%;
    }
}
</style>