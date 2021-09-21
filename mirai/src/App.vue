<template>
    <v-app>
        <Header/>
        <v-main>
            <router-view />
        </v-main>
        <Bottom/>
    </v-app>
</template>

<script>
    import Header from '@/components/layout/header.vue';
    import Bottom from '@/components/layout/bottom.vue';

    export default {
        name: 'App',

        components: {
            Bottom,
            Header,
        },

        data: () => ({
            //
        })
    };
</script>