import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '@/views/Home.vue'
import create from '@/views/create.vue'
import post from '@/views/post.vue'

Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',
    routes:[
        {path:'/',component:Home},
        {path:'/create',component:create},
        {path:'/post',component:post}
        
    ]
});