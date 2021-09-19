<template>
    <div class="loginbox">
        <div class="login">
            <h1>LOGIN</h1>
            <p>
                All the chords in the world
                <br>
                Welcome to CodeFinder!</p>
        </div>
        <div class="inputbox">
                <input type="text" class="in1" placeholder="ID">
                <input type="password" class="in1" placeholder="Password">
                <div class="btnbox">
                <v-btn elevation="3" class="btn3">REGISTER</v-btn>
                <v-btn elevation="3" class="btn2">LOGIN</v-btn>
                </div>

        </div>

    </div>
</template>
<script>
    export default {
        name: 'question',

    }
</script>
<style lang="scss">
.loginbox{
    width: 550px;
    margin: 0 auto;
    margin-top: 80px;
}
.login{
    margin: 25px;
    h1{
        width: 250px;
        border-bottom: 3px solid black;
        border-left: 3px solid black;
        padding-left: 10px;
    }
    p{
        margin-top: 10px;
    }
}
.inputbox{
    display: flex;
    flex-wrap: wrap;
    width: 500px;
    margin-bottom: 50px;
}
.in1{
    width: 500px;
    height: 35px;
    border: 2px solid black;
    margin-left: 25px;
    margin-bottom: 5px;
    padding-left: 20px;
}

.btn2{
    margin: 10px 0 0 10px;
}
.btn3{
    margin: 10px 0 0 303px;
}
.btnbox{
    display: flex;
}
</style>