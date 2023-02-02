
// bootstrap 4
require('./bootstrap');



// require vue
window.Vue = require('vue');


// Importiamo con il nome App ciò che trovi in views app, file principale di Vue

import App from './views/App.vue';
import router from './routes.js';



// Inizializziamo istanza vue

const app = new Vue({
    el: '#root',
    router,
    render: h => h(App),
});