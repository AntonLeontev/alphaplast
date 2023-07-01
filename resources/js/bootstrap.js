import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import * as bootstrap from "bootstrap";
window.bootstrap = bootstrap;

import Alpine from "alpinejs";
import mask from "@alpinejs/mask";
Alpine.plugin(mask);
window.Alpine = Alpine;
Alpine.start();



