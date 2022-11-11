require('./bootstrap');

import './frontend/selectize.min'
import './frontend/main'
import './frontend/vendor/modernizr-2.6.2.min'
import {toast} from "./Shared/util/toastr";
import Alpine from 'alpinejs'

window.addEventListener('booking-store', ({event:{type, message}}) => {
    toast(type, message)
})

Alpine.start()
