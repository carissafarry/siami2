const {
    createApp
} = Vue

import router from './router/index.js'
import SoftUIDashboard from "./assets/js/my_soft-ui-dashboard.js";
// ! error
// import App from './App.vue'

// ! error
// const app = createApp(App)
const app = createApp({})

app.component('home', {
    template: '<div>Component Home nich</div>',
})
const Home = app.component('home')

app.use(router)
app.use(SoftUIDashboard);
app.mount('#app')