<template>
<div class="postpagemainbox">
    <div class="postpagebox">
    <div class="firstbox">
        <img src="./image/ex.jpg" class="fimg">
            <p>mirai</p>
            <p>2021-09-21</p>
        </div>

        <div class="firstmain">
            <h1>Please help me with this question.</h1>
            <br>
                <p>
                    Create a blog post subtitle that summarizes your post in a few short,
                    <br>
                        punchy sentences and entices your audience to continue reading.
                    </p>
                    <img src="./image/ex.jpg" class="fmimg">
                    <p>
                        <br>
                        Welcome to your blog post. Use this space to connect with your readers and
                        potential
                        <br>
                            customers in a way that’s current and interesting. Think of it as an ongoing
                            conversation
                            <br>
                                where you can share updates about business, trends, news, and more.
                            </p>
                            <div class="codebox">
                                <p>
                                    import java.util.Scanner;
                                    <br>
                                        public class Add2 {
                                            <br>
                                             &nbsp;  &nbsp;  &nbsp;  &nbsp; 
                                             public static void main(String args[]) {
                                                <br>
                                                    
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                Scanner input = new Scanner(System.in);
                                                <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                int x;
                                                <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                int y;
                                                <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                int sum;
                                                <br>
                                                 <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                System.out.print("첫번째 숫자를 입력하시오 : ");
                                                <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                x = input.nextInt();
                                                <br>
                                                <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                System.out.print("두번째 숫자를 입력하시오 : ");
                                                <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                y = input.nextInt();
                                                <br>
                                                <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                sum = x + y;
                                                <br>
                                                <br>
                                                &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                System.out.println(sum);
                                                <br>
                                                <br>
                                                &nbsp;  &nbsp;
                                            }
                                            <br>
                                        }       
                                </p>
                                </div>
                                <br>
                                <p>
                                    You’ll be posting loads of engaging content, so be sure to keep your blog organized with 
                                    <br>
                                    Categories that also allow visitors to explore more of what interests them.
                                    <br>
                                    <br>
                                    Create Relevant Content
                                    <br>
                                    Writing a blog is a great way to position yourself as an authority in your field and 
                                    <br>
                                    captivate your readers’ attention. Do you want to improve your site’s SEO ranking? 
                                    <br>
                                    Consider topics that focus on relevant keywords and relate back to your website or business. 
                                    <br>
                                    You can also add hashtags (#vacation #dream #summer) throughout your posts to reach more people, 
                                    <br>
                                    and help visitors search for relevant content. 
                                    <br><br>

                                    Blogging gives your site a voice, so let your business’ personality shine through.
                                    <br>
                                    Choose a great image to feature in your post or add a video for extra engagement. 
                                    <br>
                                    Are you ready to get started? Simply create a new post now. 
                                 </p>
                    </div>
                    <div class="botbox">
                        <p>Facebook</p>
                        <p>Instagram</p>
                        <p>Twitter</p>
                        <p>Git</p>
                    </div>
                    <div class="botbox2">
                        <p>1,120 views</p>
                        <p>3 comments</p>
                    </div>
    </div>

    <div class="postlist">
    <div class="postlistitle">
        <p>Recent Posts</p>
        <p>See All</p>
    </div>
    </div>

</div>
</template>
<script>
    export default {
        name: "post",
        data: () => ({
         
    }),
        };
</script>
<style lang="scss" > 
.postpagemainbox{
    margin: 0 auto;
    width: 100%;
}
.postpagebox{
    border: 4px solid black;
    margin: 0 auto;
    width: 80%;
    margin-top: 50px;
    margin-bottom: 50px;
    padding: 50px;
}
.firstbox{
    display: flex;
    height: 80px;
    line-height: 80px;
    font-size: 20px;
    p{
        margin: 0 5px;
    }
    .fimg{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: rgb(179, 177, 177) 1px solid;
        margin: 20px 15px 20px 20px;
    }
    .typel{
        float: right;
        
    }
}
.firstmain{
    margin: 20px;
}
.fmimg{
    width: 100%;
    
}
.codebox{
    border-left: 2px solid black;
    padding: 10px;
}
.botbox{
    width: 100%;
    height: 50px;
    line-height: 50px;
    border-top: 2px solid black;
    border-bottom: 2px solid black;
    display: flex;
    p  {
    height: 50px;
    line-height: 50px;
    margin: 0 20px 0 20px;
    }
}
.botbox2{
    display: flex;
        p  {
    height: 50px;
    line-height: 50px;
    margin: 0 20px 0 20px;
    }
}
</style>