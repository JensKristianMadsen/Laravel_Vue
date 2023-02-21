require('./bootstrap');
require('popper.js');

import { createApp } from 'vue'
import App from './components/App.vue';

export const eventBus = createApp(App)

createApp(App).mount('#app')

