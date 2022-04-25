require('./bootstrap');
import { createApp } from 'vue'
import FormEletro from './components/FormEletro.vue';
import 'bootstrap/dist/css/bootstrap.min.css'

// Initialize Vue
createApp({
    components: { FormEletro }
}).mount('#app')