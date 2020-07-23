
import Router from 'vue-router'
import Vue from 'vue'
Vue.use(Router)
import firstPage from './components/pages/myFirstVuePage'
import newRoutePage from './components/pages/newRoutePage'
import hooks from './components/pages/basic/hooks.vue'
import methods from './components/pages/basic/methods.vue'
import usecom from './vuex/usecom'
// admin project pages
import home from './components/pages/home'

import adminusers from './admin/pages/adminusers'
import login from './admin/pages/login'
import role from './admin/pages/role'
import assignRole from './admin/pages/assignRole'
import notfound from './admin/pages/notfound'


const routes = [
    //projects routes....


    {
        path: '/',
        component: home,
        name: 'home'

    },

    {
        path: '*',
        component: notfound,
        name: 'notfound'

    },







    {
        path: '/adminusers',
        component: adminusers,
        name: 'adminusers'

    },
    {
        path: '/login',
        component: login,
        name: 'login'


    },
    {
        path: '/role',
        component: role,
        name: 'role'
    },
    {
        path: '/assignRole',
        component: assignRole,
        name: 'assignRole'
    },


]



export default new Router({
    mode: 'history',
    routes

})
