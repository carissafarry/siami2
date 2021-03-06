<head>
    <meta charset="UTF-8">
    <title>Vue.js in PHP</title>
    <!-- <script src="https://unpkg.com/vue@3"></script>
    <script src="https://unpkg.com/vue-router@4"></script> -->

    <base href="/">
    <link href="assets/vendor/bootstrap-5.0.2/css/bootstrap.css" rel="stylesheet">
    <link href="assets/scss/soft-ui-dashboard.scss">

    <script src="assets/js/vue-3.2.31/dist/vue.global.js"></script>
    <script src="assets/js/vue-router-4.0.12/dist/vue-router.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/vue3-sfc-loader/dist/vue3-sfc-loader.js"></script> -->
    <!-- <script src="https://unpkg.com/http-vue-loader"></script> -->

</head>

<body>
    <div id="app">
        <li>
            <router-link to="/">Home</router-link>
        </li>
        <li>
            <router-link to="/foo">Foo</router-link>
        </li>
        <li>
            <router-link to="/bar">Bar</router-link>
        </li>
        </ul>
        <home></home>
        <router-view></router-view>
    </div>

    <script type="text/javascript">
    // new Vue({
    //     el: '#app',
    //     components: {
    //         'my-component': httpVueLoader('App3.vue')
    //     }
    // });

    // new window.Vue({
    //     el: '#app',
    //     components: {
    //         'app-world': window.httpVueLoader('App3.vue')
    //     },
    // })

    // new Vue({
    //     components: {
    //         'my-component': httpVueLoader('App3.vue')
    //     }
    // });
    </script>
    <script src="assets/vendor/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
    <script type='module' src="./main.js"></script>
</body>