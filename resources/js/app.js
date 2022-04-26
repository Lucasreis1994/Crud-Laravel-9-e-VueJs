require('./bootstrap');
import { createApp } from 'vue'
import FormEletro from './components/FormEletro.vue';
import ListEletro from './components/ListEletro.vue';
import 'bootstrap/dist/css/bootstrap.min.css'

// Initialize Vue
createApp({
    components: { FormEletro, ListEletro }
}).mount('#app')