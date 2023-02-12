import './bootstrap';

import 'flowbite';
// import datepicker from flowbite
import 'flowbite/dist/datepicker.js';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus'

Alpine.plugin(focus)

window.Alpine = Alpine;

Alpine.start();
