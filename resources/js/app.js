require('./bootstrap');

import Vue from "vue"
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios'
import VueSocialauth from 'vue-social-auth'
import VueSweetalert2 from 'vue-sweetalert2';

// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueRouter);


Vue.use(VueSweetalert2);
Vue.use(VueAxios, axios)
Vue.use(VueSocialauth, {

  providers: {
    google: {
      clientId: "984962151356-hjoqk9120bbgp6ll4lvmed6nt2tf8srb.apps.googleusercontent.com",
      redirectUri: "http://127.0.0.1:8000/auth/google/callback" // Your client app URL
    }
  }
})

import routes from "./router/index";

const router = new VueRouter(routes);


axios.defaults.baseURL = 'http://127.0.0.1:8000/api';


const app = new Vue({
    el: '#app',
    router: router,
});