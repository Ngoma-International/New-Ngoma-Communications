import Alpine from 'alpinejs'
import Toastr from '../Shared/element/Toastr';
import {uploadAudio} from "./util/upload";
import {VideoUpload} from "./util/VideoUpload";
import {picker} from "../Shared/util/picker";
import {uploadImages} from "./util/seminar";
import {toast} from "../Shared/util/toastr";
import {time_picker} from "../Shared/util/time-picker";

Alpine.start()
customElements.define('app-toast', Toastr)

const uploadThumbnail = document.querySelector('input[name="thumbnail"]')
if (uploadThumbnail) {
    import('./util/upload')
        .then(module => uploadAudio(uploadThumbnail))
        .catch(e => console.log(e))
}

const uploadVideo = document.querySelector('input[name="images_video"]')
if (uploadVideo) {
    import('./util/VideoUpload')
        .then(module => VideoUpload(uploadVideo))
        .catch(e => console.log(e))
}

const date_time = document.querySelector('#date')
if (date_time) {
    import('../Shared/util/picker')
        .then(module => picker(date_time))
}

const start_time = document.querySelector('#start_time')
const end_time = document.querySelector('#end_time')

if (start_time) {
    import('../Shared/util/time-picker')
        .then(module => time_picker(start_time))
}

if (end_time) {
    import('../Shared/util/time-picker')
        .then(module => time_picker(end_time))
}

const images = document.querySelector('#images')
if (images) {
    import('./util/seminar')
        .then(module => uploadImages(images))
}

window.addEventListener('backend', event => {
    toast(event.detail.type, event.detail.message)
})

