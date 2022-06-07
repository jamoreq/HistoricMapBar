require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/typeahead.js';
$('.typeahead').typeahead();