const {
    createRouter,
    createWebHistory,
    createWebHashHistory
} = VueRouter

const Home = {
    template: '<div>HOME</div>'
}
const Foo = {
    template: '<div>Foo</div>'
}
const Bar = {
    template: '<div>Bar</div>'
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

export default router