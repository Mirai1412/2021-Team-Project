<template>
<div class="questionbox">
    <div class="please">
        <h1>CREATE POST</h1>
        <p>Welcome to codefinder!
            <br>
            Choose the language you want and write down the code
            <br>
               you don't know and ask other users at any time.
            </p>
        </div>
        <div class="inputbox">
            <input type="text" class="in1" placeholder="title">

                <select class="lchoose">
                    <option value="">---------------------------Please choose an
                        Language------------------------------</option>
                    <option value="laravel">Laravel</option>
                    <option value="java">JAVA</option>
                    <option value="html">HTML&CSS</option>
                </select>

                <textarea class="in2" placeholder="code"></textarea>
                <textarea class="in2" placeholder="message"></textarea>
                <v-btn elevation="3" class="btn1">CREATE</v-btn>
            </div>

        </div>
</template>
<script>
    export default {
        name: 'create',

    }
</script>
<style lang="scss" > 
.lchoose {
    border: 2px black solid;
    margin: 0 0 5px 26px;
    width: 473px;
    padding: 0 20px;
}

.questionbox {
    width: 550px;
    margin: 50px auto 0;
}
.please {
    margin: 25px;
    h1 {
        width: 250px;
        border-bottom: 3px solid black;
        border-left: 3px solid black;
        padding-left: 10px;
    }
    p {
        margin-top: 10px;
    }
}
.inputbox {
    display: flex;
    flex-wrap: wrap;
    width: 500px;
    margin-bottom: 50px;
}
.in1 {
    width: 500px;
    height: 35px;
    border: 2px solid black;
    margin-left: 25px;
    margin-bottom: 5px;
    padding-left: 20px;
}
.in2 {
    width: 475px;
    height: 100px;
    border: 2px solid black;
    margin: 0 0 5px 25px;
    padding: 10px 0 0 20px;
}
.btn1 {
    margin: 10px 0 0 407px;
}
</style>