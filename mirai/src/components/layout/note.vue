<template>
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
</template>
<script>
       export default {name: "note"};
</script>
<style>
.buttonbox{
    height: 280px;
    width: 100%;
    background: linear-gradient(to right, #232526,#414345); 
    color: white;
    display: flex;
    position: relative;
}    
.abcbox{
    display: flex;
    flex-wrap: wrap; 
    width: 400px;
    height: 80px;
    position: absolute;
    right: 100px;
    top: 60px;
}
.abcbox h1{
    width: 50px;
    height: 50px;
    padding: 0;
    margin: 3px;
    font-size: 40px;
    text-align: center;
    line-height: 50px;
}
.buttontitle{
    width: 30%;
    height: 80%;
    position: absolute;
    top: 40px;
    left: 30px;
    text-align: left;
}
</style>