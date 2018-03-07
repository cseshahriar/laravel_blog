
require('./bootstrap'); // bootstrap means geating stearted  

window.Vue = require('vue');

Vue.component('posts', require('./components/posts.vue')); //posts is component  

const app = new Vue({
    el: '#app',
});
