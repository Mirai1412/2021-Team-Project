<template>
    <div class="endbox">
        <p class="endp">
            © 2021 Team Project. All the chords in the world CodeFinder</p>
        <div class="link">
            <p>Facebook</p>
            <p>Instagram</p>
            <p>Twitter</p>
        </div>
    </div>
</template>
<script>
    export default {name: "bottom"};
</script>
<style lang="scss" > 
.endbox{
    background-color: black;
    height: 113px;
    display: flex;
    width: 100%;
    justify-content: space-between;
    padding: 0 80px;
}
.endp{
    color: white;
    line-height: 113px;
    margin-left: 30px;
}
.link{
    line-height: 113px;
    display: flex;
    color: white;
    p{
    margin: 0 20px;
    }
    p:hover{
        color: rgb(66, 145, 235);
    }
}
</style>