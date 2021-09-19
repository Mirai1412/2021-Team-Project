import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '@/views/Home.vue'
import create from '@/views/create.vue'
import question from '@/views/question.vue'
import login from '@/views/login.vue'
import profile from '@/views/profile.vue'


Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',
    routes:[
        {path:'/',component:Home},
        {path:'/create',component:create},
        {path:'/question',component:question},
        {path:'/login',component:login},
        {path:'/profile',component:profile}
    ]
});