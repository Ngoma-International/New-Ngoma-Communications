import Editor from '@toast-ui/editor';

export default class EditorMarkdown extends HTMLElement {
    connectedCallback() {
        new Editor({
            el: document.querySelector('#description'),
            height: '500px',
            initialEditType: 'wysiwyg',
            previewStyle: "vertical"
        }).getMarkdown()
    }
}
