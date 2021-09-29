import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '@/views/home.vue'
import create from '@/views/create.vue'
import question from '@/views/question.vue'
import login from '@/views/login.vue'
import profile from '@/views/profile.vue'
import post from '@/views/post.vue'

Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',
    routes:[
        {path:'/',component:Home},
        {path:'/create',component:create},
        {path:'/question',component:question},
        {path:'/login',component:login},
        {path:'/post',component:post},
        {path:'/profile',component:profile}
    ]
});