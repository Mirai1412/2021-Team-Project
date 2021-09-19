<template>
    <div class="header">      
      <router-link to="/">
      <img src='../image/cd.png' class="cd">
      </router-link>
            <div class="leftheader">
                <div class="saerch">
                    <input type="text" class="ser" placeholder="SEARCH...">
                    <button>검색</button>
                </div>
                <div class="menu">
                  <router-link to="/profile"  style="color: white;" ><p>PROFILE</p></router-link>
                  <router-link to="/create" style="color: white;"><p>CREATE</p></router-link>
                  <router-link to="/question"  style="color: white;"><p>QUESTION</p></router-link>
                  <router-link to="/login"  style="color: white;"><p>LOGIN</p></router-link>
                </div>

            </div>

    </div>

</template>

<script>
export default {
    name: "header"
        };
</script>

<style  lang="scss"> 
.header{

  background-color: black;
  height: 160px;
  display: flex;
  justify-content: space-between;
  padding: 0 80px;
}
.cd{
  height: 140px;
  margin-top: 10px;
  margin-left: 30px;
}
.saerch{
  color: white;
  float: right;
  margin-right: 20px;

  .ser{
    display: inline-block;
    width: 200px;
    border-bottom: 1px solid white;
    margin-top: 35px;
    color: white;
  }
  button{
    margin-left:  20px;
    border: 1px solid white;
    padding: 2px 10px;
  }
}
.menu{
  color: white;
  margin-top: 95px;
  p{
    display: inline-block;
    margin: 0 25px;
  }
  p:hover{
    color: rgb(23, 206, 84);
  }
}
.leftheader{
  display: block;
}

</style>