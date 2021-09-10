<template>
    <div class="main">

<div class="mainlan">
    <v-card class="overflow-hidden">
        <v-app-bar
            absolute="absolute"
            color="#6A76AB"
            dark="dark"
            height="0px"
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

                <template v-slot:extension>
                <v-tabs align-with-title="align-with-title">
                    <v-tab>HTML&CSS</v-tab>
                    <v-tab>Laravel</v-tab>
                    <v-tab>JAVA</v-tab>
                </v-tabs>
            </template>
        </v-app-bar>
        <v-sheet id="scrolling-techniques-3" class="overflow-y-auto" max-height="600">
            <v-container style="height: 1000px;"></v-container>
        </v-sheet>
    </v-card>
</div>


        <div class="con1">
            <v-card :loading="loading" class="mx-auto my-12" max-width="374">
                <template slot="progress">
                    <v-progress-linear
                        color="deep-purple"
                        height="10"
                        indeterminate="indeterminate"></v-progress-linear>
                </template>

                <v-img height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png"></v-img>

                <v-card-title>오류해결해주세요!!</v-card-title>

                <v-card-text>
                    <v-row align="center" class="mx-0">
                        <v-rating
                            :value="2.5"
                            color="amber"
                            dense="dense"
                            half-increments="half-increments"
                            readonly="readonly"
                            size="14"></v-rating>

                        <div class="grey--text ms-4">
                            50% (3명 응답)
                        </div>
                    </v-row>

                    <div class="my-4 text-subtitle-1">
                        임채환
                    </div>

                    <div>서버에서 자꾸 충돌이 일어나서 VsCode가 켜지지 않습니다.ㅠㅅㅠ.</div>
                </v-card-text>

                <v-divider class="mx-4"></v-divider>

                <v-card-title>HTML&CSS</v-card-title>
                <v-card-actions>
                    <v-btn color="deep-purple lighten-2" text="text" @click="reserve">
                        해결해주기
                    </v-btn>
                </v-card-actions>
            </v-card>
        </div>
        <div class="con1">
            <v-card :loading="loading" class="mx-auto my-12" max-width="374">
                <template slot="progress">
                    <v-progress-linear
                        color="deep-purple"
                        height="10"
                        indeterminate="indeterminate"></v-progress-linear>
                </template>

                <v-img height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png"></v-img>

                <v-card-title>오류해결해주세요!!</v-card-title>

                <v-card-text>
                    <v-row align="center" class="mx-0">
                        <v-rating
                            :value="4.5"
                            color="amber"
                            dense="dense"
                            half-increments="half-increments"
                            readonly="readonly"
                            size="14"></v-rating>

                        <div class="grey--text ms-4">
                            4.5 (413)
                        </div>
                    </v-row>

                    <div class="my-4 text-subtitle-1">
                        임채환
                    </div>

                    <div>서버에서 자꾸 충돌이 일어나서 VsCode가 켜지지 않습니다.ㅠㅅㅠ.</div>
                </v-card-text>

                <v-divider class="mx-4"></v-divider>

                <v-card-title>HTML&CSS</v-card-title>
                <v-card-actions>
                    <v-btn color="deep-purple lighten-2" text="text" @click="reserve">
                        해결해주기
                    </v-btn>
                </v-card-actions>
            </v-card>
        </div>
        <div class="con1">
            <v-card :loading="loading" class="mx-auto my-12" max-width="374">
                <template slot="progress">
                    <v-progress-linear
                        color="deep-purple"
                        height="10"
                        indeterminate="indeterminate"></v-progress-linear>
                </template>

                <v-img height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png"></v-img>

                <v-card-title>오류해결해주세요!!</v-card-title>

                <v-card-text>
                    <v-row align="center" class="mx-0">
                        <v-rating
                            :value="4.5"
                            color="amber"
                            dense="dense"
                            half-increments="half-increments"
                            readonly="readonly"
                            size="14"></v-rating>

                        <div class="grey--text ms-4">
                            4.5 (413)
                        </div>
                    </v-row>

                    <div class="my-4 text-subtitle-1">
                        임채환
                    </div>

                    <div>서버에서 자꾸 충돌이 일어나서 VsCode가 켜지지 않습니다.ㅠㅅㅠ.</div>
                </v-card-text>

                <v-divider class="mx-4"></v-divider>

                <v-card-title>HTML&CSS</v-card-title>
                <v-card-actions>
                    <v-btn color="deep-purple lighten-2" text="text" @click="reserve">
                        해결해주기
                    </v-btn>
                </v-card-actions>
            </v-card>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Home',
        data: () => ({loading: false, selection: 1}),

        methods: {
            reserve() {
                this.loading = true

                setTimeout(() => (this.loading = false), 2000)
            }
        }
    }
</script>
<style>
    .main {
        border: 1px solid black;
        height: 750px;
        display: flex;
        flex-wrap: wrap;
    }
    .mainlan{
    border: 1px solid black;
    width: 100%;
    height: 100px;
    }
    .con1{
      width: 25%;
      margin: 10px;
    }
</style>