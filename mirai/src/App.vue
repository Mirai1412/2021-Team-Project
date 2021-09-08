<template>
    <v-app>
        <Header/>

        <v-main>
            <Home/>
        </v-main>

        <bottom/>
    </v-app>
</template>

<script>
    import Home from './components/Home.vue';
    import Header from '@/components/layout/Header.vue';
    import Bottom from './components/layout/bottom.vue';
    
    export default {

        name: 'App',

        components: {
            Home,
            Header,
            Bottom
      
        },

        data: () => ({
            //
        })
    };
</script>