<template>
  <div id="app">
    <Header></Header>
    <div class="content">

    </div>
    <note></note>
    <bottom></bottom>
  </div>
</template>

<script>
import Header from './components/layout/Header.vue'
import bottom  from './components/layout/bottom.vue'
import note  from './components/layout/note.vue'

export default {
  name: 'App',
  components: {
    Header,
    bottom,
    note,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
