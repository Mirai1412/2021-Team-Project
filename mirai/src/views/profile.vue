<template>
    <div class="profilebox">
      <div class="userbox">
          <img src='./image/ex.jpg' class="i1">
      </div>
      <div class="statusbox">
        <div class="s1">
            <h1>Post</h1>
            <br>
            <p>{{ 변수명 }}</p>
        </div>
        <div class="s1">
            <h1>Followers</h1>
            <br>
            <p>129</p>
        </div>
        <div class="s1">
            <h1>Comments</h1>
            <br>
            <p>58</p>
        </div>
      </div>
      <div class="chartbox">
          
      </div>
    </div>
</template>
<script>

    export default {
        name: 'profile',

    }
</script>
<style lang="scss">
.profilebox{
    margin: 0 auto;
    position: relative;
    height: 700px;
}
.userbox{
    width: 300px;
    height: 600px;
    border: 2px solid black;
    top: 50px;
    left: 115px;
    position: absolute;
    .i1{
        width: 240px;
        padding: 0;
        margin: 30px;
        border: rgb(179, 177, 177) 2px solid;
    }
}
.statusbox{
    width: 990px;
    height: 200px;
    border: 2px solid black;
    top: 50px;
    left: 430px;
    position: absolute;
    display: flex;
    .s1{
        width: 300px;
        margin: 0 30px;
        text-align: center;
        padding-top: 40px;
        p{
            font-size: 25px;
        }
        h1{
            border-bottom: rgb(179, 177, 177) 2px solid;
        }
    }
}
.chartbox{
    width: 990px;
    height: 385px;
    border: 2px solid black;
    top: 265px;
    left: 430px;
    position: absolute;
}
</style>