import Vue from 'vue'
import App from './App.vue'
import router from './router'

Vue.config.productionTip = false;

new Vue({
  render: h => h(App),
    router,

  data: {
    format: {
        date_save: 'MM/DD/YYYY',
    }
  }
}).$mount('#app')
