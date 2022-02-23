import { createApp } from 'vue'
import App from '../App.vue'
import { createRouter, createWebHistory } from "../assets/js/vue-router-4.0.12/dist/vue-router.global.js"

const Home = { template: '<div>Home</div>' }
const About = { template: '<div>About</div>' }

const routes = [{
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

// const app = createApp(App)
// app.use(router)
// app.mount('#app')

export default router



// const router = VueRouter.createRouter({
//     history: VueRouter.createWebHashHistory(),
//     routes,
// })

// const app = Vue.createApp(App)
// app.use(router)
// app.mount('#app')