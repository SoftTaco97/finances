/**
 * Project: Finance App
 * File Name: app.js
 * @author: Jared Martinez
 * @version: 3/20/2019
 */

/* Variables */
window.data = {};

/* Functions */
window.methods = {};

// TODO: move these into their own .vue files
/* Templates */
Vue.component('app-main', {
    data: function(){
        return data;
    },
    template:  '<h1>Hello: </h1>'
});

/* Application */
window.app = new Vue({
    el: '#app',
    data: window.data,
    methods: window.methods,
});