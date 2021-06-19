require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('app-component', require('./components/App.vue').default);
Vue.component('body-component', require('./components/Body.vue').default);
Vue.component('post-component', require('./components/Post.vue').default);

Vue.use(require('vue-moment'));

const app = new Vue({
    el: '#app',
});
