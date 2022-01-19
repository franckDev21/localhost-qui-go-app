require('./bootstrap');

require('./custom_js/toggle-menu')

import {createApp} from 'vue'
import router from './router/index.js'


import Identification from './components/Identification.vue'
import Dashboard from './pages/Dashboard.vue'

createApp({
  components : {
    Dashboard,
    Identification,
  }
}).use(router).mount("#app")