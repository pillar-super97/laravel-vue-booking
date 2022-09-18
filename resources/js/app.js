require('./bootstrap');

import {createApp} from 'vue';
import BookingsIndex from './vue/BookingsIndex';
import BookingsCreate from './vue/BookingsCreate';

createApp(BookingsCreate).mount('#appc');

createApp(BookingsIndex).mount('#appi');

