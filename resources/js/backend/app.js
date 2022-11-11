import Alpine from 'alpinejs'
import Toastr from "../Shared/element /Toastr"
import {uploadAudio} from "./util/upload";
import {VideoUpload} from "./util/VideoUpload";

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
