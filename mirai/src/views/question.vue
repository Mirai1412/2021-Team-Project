<template>
<div class="questionbox">
    <div class="please">
        <h1>Please Inquiry</h1>
        <p>If you have any questions, please contact our customer service.
            <br>
                Phone number of the counseling center : 010-9115-2813
                <br>
                    Email to the counseling center : tmdwo7017@naver.com
                    <br>
                        Thank you always.
                    </p>
                </div>
                <div class="inputbox">
                    <input type="text" class="in1" placeholder="Name">
                        <input type="text" class="in1" placeholder="Email">
                            <input type="text" class="in1" placeholder="Phone">
                                <textarea class="in2" placeholder="message"></textarea>
                                <v-btn elevation="3" class="btn1">Submit</v-btn>
                            </div>

                        </div>
</template>
<script>
    export default {
        name: 'question',

    }
</script>
<style lang="scss">
.questionbox{
    width: 550px;
    margin: 0 auto;
    margin-top: 50px;
}
.please{
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
    height: 35px;
    border: 2px solid black;
    margin-left: 25px;
    margin-bottom: 5px;
    padding-left: 20px;
}
.in2{
    width: 475px;
    height: 100px;
    border: 2px solid black;
    margin-left: 25px;
    padding: 10px 0 0 20px;
}
.btn1{
    margin: 10px 0 0 407px;
}
</style>