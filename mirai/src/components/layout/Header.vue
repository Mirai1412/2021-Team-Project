<template>
<div class="mainlan">
    <div class="toptitle">
        <p>로그인</p>
        <p>회원가입</p>
        <p>후원</p>
        <p>도움말</p>
    </div>

    <div class="topbar">
  <v-toolbar
    color="blue"
    dark
  >
    <v-toolbar-title><router-link to="/creat" style="text-decoration: none; color: White">HOME</router-link></v-toolbar-title>

    <v-divider
      class="mx-4"
      vertical
    ></v-divider>

    <span class="subheading" style="font-size: 28px;"  >CodeFinder</span>

    <v-spacer></v-spacer>

    <v-toolbar-items class="hidden-sm-and-down">
      <v-btn text>
        Profile
      </v-btn>

      <v-divider vertical></v-divider>

      <v-btn text>
        post
      </v-btn>

      <v-divider vertical></v-divider>

      <v-btn text>
        creat
      </v-btn>

      <v-divider vertical></v-divider>
    </v-toolbar-items>

    <v-app-bar-nav-icon></v-app-bar-nav-icon>
  </v-toolbar>
</div>

</div>

</template>

<script>
export default {
    name: "header"
        };
</script>
<style  lang="scss"> 
body {
    max-width: 1200px;
    margin: 0 auto;
}
.mainlan {
    margin: 0;
    width: 100%;
}
.titleh1 {
    margin: 10px 0 10px 35px;
    font-size: 37px;
}

.toptitle {
    display: flex;
    width: 300px;
    margin-left: auto;
    p {
        margin: 8px 13px;
        
    }

}

</style>