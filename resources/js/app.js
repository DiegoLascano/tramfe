/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./stylingAnimations');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

Vue.component('contact-form', require('./components/ContactForm.vue').default);
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('service-card', require('./components/ServiceCard.vue').default);
Vue.component('modal-component', require('./components/Modal.vue').default);
Vue.component('button-component', require('./components/Button.vue').default);
Vue.component('inline-svg', require('./components/InlineSvg.js').default);
Vue.component('visible-component', require('./components/Visible.vue').default);
Vue.component('stepcard-component', require('./components/StepCard.vue').default);
Vue.component('flash-message', require('./components/FlashMessage.vue').default);

// page sections
Vue.component('cover-section', require('./sections/Cover.vue').default);
Vue.component('services-section', require('./sections/Services.vue').default);
Vue.component('profile-section', require('./sections/Profile.vue').default);
Vue.component('plataforma-section', require('./sections/Plataforma.vue').default);
Vue.component('testimonial-section', require('./sections/Testimonial.vue').default);
Vue.component('footer-section', require('./sections/Footer.vue').default);

// modal sections
Vue.component('modal-cover', require('./components/modalsections/ModalCover.vue').default);
Vue.component('modal-simple', require('./components/modalsections/ModalSimple.vue').default);
Vue.component('modal-columns', require('./components/modalsections/ModalColumns.vue').default);

Vue.prototype.$eventBus = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
