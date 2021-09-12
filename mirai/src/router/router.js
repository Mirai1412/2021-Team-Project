import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '@/components/Home.vue'
import create from '@/components/create.vue'
import post from '@/components/post.vue'

Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',
    routes:[
        {path:'/',component:Home},
        {path:'/create',component:create},
        {path:'/post',component:post}
        
    ]
});