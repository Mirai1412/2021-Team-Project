<template>
    <div class="main">

        <v-card class="overflow-hidden">
   
            <v-app-bar
                absolute="absolute"
                color="#6A76AB"
                dark="dark"
                height="20px"
                shrink-on-scroll="shrink-on-scroll"
                prominent="prominent"
                src="https://picsum.photos/1920/1080?random"
                fade-img-on-scroll="fade-img-on-scroll"
                scroll-target="#scrolling-techniques-3">
                <template v-slot:img="{ props }">
                    <v-img
                        v-bind="props"
                        gradient="to top right, rgba(100,115,201,.7), rgba(25,32,72,.7)"></v-img>
                </template>

                <h1 class="titleh1">Post</h1>

                <template v-slot:extension>
                    <v-tabs align-with-title="align-with-title">
                        <v-tab>HTML&CSS</v-tab>
                        <v-tab>Laravel</v-tab>
                        <v-tab>JAVA</v-tab>
                        <v-tab>PHP</v-tab>
                    </v-tabs>
                </template>
            </v-app-bar>


            <v-sheet id="scrolling-techniques-3" class="overflow-y-auto" max-height="600">
                <v-container style="height: 116px;"></v-container>
            </v-sheet>

        </v-card>

        <div class="post">
            <v-simple-table>
                <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left" style="padding:  0 0 0 50px;">
                                제목
                            </th>
                            <th class="text-left" style="padding:  0 0 0 10px;">
                                작성자
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in desserts" :key="item.name">
                            <td style="padding:  0 0 0 50px;">{{ item.name }}</td>
                            <td>{{ item.calories }}</td>
                        </tr>
                    </tbody>
                </template>
            </v-simple-table>
        </div>

        <div class="img"  style="height: 300px;">
            <v-carousel hide-delimiters="hide-delimiters"  style="height: 300px;">
                <v-carousel-item  v-for="(item,i) in items" :key="i" :src="item.src"></v-carousel-item>
            </v-carousel>
        </div>

    </div>
</template>
<script>
    export default {
        name: 'Home',
        data: () => ({
       items: [
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
          },
        ],
                desserts: [
          {
            name: 'Frozen Yogurt',
            calories: 159,
          },
          {
            name: 'Ice cream sandwich',
            calories: 237,
          },
          {
            name: 'Eclair',
            calories: 262,
          },
          {
            name: 'Cupcake',
            calories: 305,
          },
          {
            name: 'Gingerbread',
            calories: 356,
          },
          {
            name: 'Jelly bean',
            calories: 375,
          },
          {
            name: 'Lollipop',
            calories: 392,
          },
          {
            name: 'Honeycomb',
            calories: 408,
          },
          {
            name: 'Donut',
            calories: 452,
          },

        ],
            }),

        methods: {
            reserve() {
                this.loading = true

                setTimeout(() => (this.loading = false), 2000)
            }
        }
    }
</script>
<style lang="scss">
    .post {
        border: 1px solid rgba(179, 179, 179, 0.657);
        border-top : none;

    }
</style>