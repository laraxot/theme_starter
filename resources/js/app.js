require('./bootstrap');
window.Vue = require('vue');

//Vue.component('vue-cookie-law', require('./components/CookieLawComponent.vue'));
import Example from './components/ExampleComponent'
//import CookieLaw from './components/CookieLawComponent'
import CookieLaw from 'vue-cookie-law'

window.Vuetify = require('vuetify');
Vue.use(Vuetify);

const opts = {}

export default new Vuetify(opts);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    components: { Example,CookieLaw }
});

