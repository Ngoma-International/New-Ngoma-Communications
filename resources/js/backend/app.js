import Alpine from 'alpinejs'
import Toastr from "../Shared/element /Toastr"
import {uploadAudio} from "./util/upload";

uploadAudio(
    document.querySelector('#thumbnail')
)

Alpine.start()

customElements.define('app-toast', Toastr)

