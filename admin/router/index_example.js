const {
    createRouter,
    createWebHistory,
    createWebHashHistory
} = VueRouter

const {
    createApp
} = Vue

const app = createApp({})

app.component('home', {
    template: '<div>home</div>',
})

const Home = app.component('home')
const Foo = {
    template: '<div>foo</div>'
}
const Bar = {
    template: '<div>bar</div>'
}

const routes = [{
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/foo',
        component: Foo
    },
    {
        path: '/bar',
        component: Bar
    },
]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes,
})

app.use(router)
app.mount('#app')