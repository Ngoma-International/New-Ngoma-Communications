import * as FilePond from 'filepond';
import FilePondPluginImageCrop from 'filepond-plugin-image-crop';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

/**
 * @param elements
 */
export const uploadImages = (elements) => {

    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageCrop
    );

    let _token = document.querySelector('meta[name="csrf-token"]')
        .getAttribute('content')
    const pond = FilePond.create(elements, {
        labelIdle: `Glissez et déposez vos fichiers`,
        labelFileLoading: 'Chargement ...',
        allowImageCrop: true,
        acceptedFileTypes: ['image/*'],
    });

    pond.setOptions({
        server: {
            url: '/admins/upload-seminar',
            revert: '/admins/remove-seminar',
            headers: {
                'X-CSRF-Token': _token
            }
        }
    })
}
