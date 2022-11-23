import {toast} from "./Shared/util/toastr";

require('./bootstrap');

import Alpine from 'alpinejs'

Alpine.start()

window.addEventListener('booking', event => {
    toast(event.detail.type, event.detail.message)
})
