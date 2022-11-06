import Swal from "sweetalert2";
import {createButtonLoader} from "./dom";

const toastSwalMixin = Swal.mixin({
    toast: true,
    position: "top-end",
    timer: 5000,
    icon: 'error',
    showCloseButton: true,
    timerProgressBar: true,
    showConfirmButton: false,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', swal.stopTimer)
        toast.addEventListener('mouseleave', swal.resumeTimer)
    }
})

export const toast = async(type, message, timer= 1500) => {
    await toastSwalMixin.fire({
        icon: true,
        html: message,
        timer: timer
    })
}
