<head>
    <meta charset="UTF-8">
    <title>Vue.js in PHP</title>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://unpkg.com/vue-router@4"></script>

    <!-- <script src="assets/js/vue-3.2.31/dist/vue.global.js"></script> -->
    <!-- <script src="assets/js/vue-router-4.0.12/dist/vue-router.global.js"></script> -->
    <!-- <script type="importmap">
        {
            "imports": {
                "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
            }
        }
    </script> -->
</head>

<body>
    <div id="app"></div>

    <!-- <script type="module" src="./admin/router/index.js"></script> -->
    <!-- <script src="./admin/router/index.js"></script> -->

    <script type="module">
    // import {
    //     createApp
    // } from 'vue'

    import App from './admin/App.vue'
    import {
        createRouter,
        createWebHistory
    } from "./admin/assets/js/vue-router-4.0.12/dist/vue-router.global.js"

    const Home = {
        template: '<div>Home</div>'
    }
    const About = {
        template: '<div>About</div>'
    }

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

    const router = VueRouter.createRouter({
        history: VueRouter.createWebHistory(),
        routes,
    })

    const app = Vue.createApp(App)
    app.use(router)
    app.mount('#app')
    </script>
</body>