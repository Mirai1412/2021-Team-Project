import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '@/components/Home.vue'
import creat from '@/components/creat.vue'
import post from '@/components/post.vue'

Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',
    routes:[
        {path:'/',components:Home},
        {path:'/creat',components:creat},
        {path:'/post',components:post}
        
    ]
});