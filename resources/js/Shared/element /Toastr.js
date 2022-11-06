import {toast} from "../util/toastr";

export default class Toastr extends HTMLElement {
    async connectedCallback() {
        await toast(
            this.getAttribute('type'),
            this.getAttribute('message'),
            this.getAttribute('timer')
        )
    }
}
