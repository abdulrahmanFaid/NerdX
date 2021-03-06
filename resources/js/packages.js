// Require Vue js
window.Vue = require('vue');

// require V-Form for handling errors and requests

import { Form, HasError, AlertError } from 'vform'
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
window.Form = Form

// require V-Validate for form validation

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

// require Sweet fire for alarming

window.Swal = require('sweetalert2');