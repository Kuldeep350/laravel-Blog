


require('./bootstrap');

window.Vue = require('vue');



Vue.component('posts', require('./components/posts.vue'));


const app = new Vue({
    el: '#app',

    mounted(){

	  	axios.post('/getPosts')
		  .then(function (response) {
		    console.log(response);
		  })
		  .catch(function (error) {
		    console.log(error);
		  });

    }

});