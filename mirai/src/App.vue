<template>
    <v-app>
        <Header/>
        <v-main>
            <router-view />
        </v-main>
        <bottom/>
    </v-app>
</template>

<script>
    import Header from '@/components/layout/Header.vue';
    import Bottom from './components/layout/bottom.vue';


    export default {

        name: 'App',

        components: {
            
            Header,
            Bottom
      
        },

        data: () => ({
            //
        })
    };
</script>