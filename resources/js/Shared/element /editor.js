import Quill from "quill/quill";
export const editor = () => {
    var toolbarOptions = ['bold', 'italic', 'underline', 'strike'];
    var options = {
        debug: 'info',
        modules: {
            toolbar: toolbarOptions
        },
        placeholder: 'Compose an epic...',
        readOnly: true,
        theme: 'snow'
    };
    new Quill(document.querySelector('#description'), options)
}
