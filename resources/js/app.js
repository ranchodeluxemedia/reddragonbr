
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});


// ScrollReveal.js
import ScrollReveal from 'scrollreveal';
window.sr = ScrollReveal({
    reset: true
});

sr.reveal('.revealFadeIn', {
    duration: 2500,
});

// slickSlider setup
import 'slick-slider';
$('#slick-slider').slick();

// anime.js
import anime from 'animejs';
anime({

});

// flatpickr
import flatpickr from 'flatpickr';
flatpickr('#flatpickr', {
    enableTime: true,
    dateFormat: "Y-m-d H:i:S",
    altInput: true,
    altFormat: "F j, Y h:iK",
});

// CKEditor Classic
ClassicEditor.create(document.querySelector('#editor'), {
    toolbar: ['bold', 'italic', 'link', 'blockQuote']
});



// Image upload preview
function preview(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) { $('#img').attr('src', e.target.result);  }
      reader.readAsDataURL(input.files[0]);     }   }

  $("#upload").change(function(){
    $("#img").css({top: 0, left: 0});
      preview(this);
      $("#img").draggable({ containment: 'parent',scroll: false });
  });
