
// bootstrap 4
require('./bootstrap');



// require vue
window.Vue = require('vue');


// Importiamo con il nome App ciò che trovi in views app, file principale di Vue

import App from './views/App.vue';



// Inizializziamo istanza vue

const app = new Vue({
    el: '#root',
    render: h => h(App),
});