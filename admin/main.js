import { createApp } from "vue";
import App from "./App.vue";
import router from "./router/index.js";
import SoftUIDashboard from "./soft-ui-dashboard.js";

const app = createApp(App)
app.use(router)
app.use(SoftUIDashboard);
app.mount('#app')

