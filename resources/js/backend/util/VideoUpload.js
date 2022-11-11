import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

/**
 * @param elements
 */
export const VideoUpload = async (elements) => {

    FilePond.registerPlugin(
        FilePondPluginImagePreview,
    );

    let _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

    const pont = FilePond.create(elements);

    pont.setOptions({
        server: {
            url: '/admins/upload-video',
            revert: '/admins/remove-video',
            headers: {
                'X-CSRF-Token': _token
            }
        }
    })
}
