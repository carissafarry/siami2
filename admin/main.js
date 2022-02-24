const {
    createApp
} = Vue

import router from './router/index.js'
// import SoftUIDashboard from "./soft-ui-dashboard.js";

const app = createApp({})

app.component('home', {
    template: '<div>Component Home nich</div>',
})
const Home = app.component('home')

app.use(router)
// app.use(SoftUIDashboard);
app.mount('#app')