import debounce from '../util/timer'

export default class AutoGrown extends HTMLTextAreaElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.addEventListener('focus', this.onFocus)
    }

    disconnectedCallback() {
        window.removeEventListener('resize', this.onResize)
    }

    onFocus = () => {
        this.style.overflow = 'hidden';
        this.style.resize = 'none';
        this.style.boxSizing = 'border-box'

        this.autogrow()
        window.addEventListener('resize', this.onResize)
        this.addEventListener('input', this.autogrow)
        this.removeEventListener('focus', this.onFocus)
    }

    onResize = () => debounce(() => this.autogrow(), 300)

    autogrow = () => {
        this.style.height = 'auto'; // repaint
        this.style.height = this.scrollHeight + 'px';
    }
}
