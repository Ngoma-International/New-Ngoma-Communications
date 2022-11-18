require('./bootstrap');

import './frontend/js/scripts'
import {toast} from "./Shared/util/toastr";
import Alpine from 'alpinejs'

window.addEventListener('booking-store', ({event:{type, message}}) => {
    toast(type, message)
})

Alpine.start()
