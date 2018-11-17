
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');

import Vue from 'vue';

import Vuetify from 'vuetify';
Vue.use(Vuetify);

import colors from 'vuetify/es5/util/colors';
Vue.use(Vuetify, {
    theme: {
        primary: colors.purple,
        secondary: colors.grey.darken1,
        accent: colors.shades.black,
        error: colors.red.accent3
    }
});

require('../summernote/dist/summernote');
require('../summernote/dist/lang/summernote-ru-RU');

//
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('create-article-component', require('./components/CreateArticleComponent.vue'));

const app = new Vue({
    el: '#app',
    data() {
        return {
            visible: false,
            }
    },
    methods: {
        openSidebar() {
           this.visible = true;
        },
        closeSidebar() {
            this.visible = false;
        }
    }
});

$(function () {
    $('#myTab li:last-child a').tab('show');
    $('a.link').click(function(){window.open($(this).attr("rel"));return false;});
});

$(document).ready(function() {
    $('#summernote').summernote({
        lang: 'ru-Ru',
    });
});
