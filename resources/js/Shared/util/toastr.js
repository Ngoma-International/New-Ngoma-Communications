import Swal from "sweetalert2";

const toastSwalMixin = Swal.mixin({
    toast: true,
    position: "top-end",
    timer: 100000,
    icon: 'error',
    showCloseButton: true,
    timerProgressBar: true,
    showConfirmButton: false,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', swal.stopTimer)
        toast.addEventListener('mouseleave', swal.resumeTimer)
    }
})

export const toast = (type, message, timer= 3000) => {
    toastSwalMixin.fire({
        icon: true,
        html: message,
        timer: timer
    })
}
