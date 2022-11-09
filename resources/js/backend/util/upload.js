import * as FilePond from 'filepond';
import FilePondPluginImageCrop from 'filepond-plugin-image-crop';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginImageResize from 'filepond-plugin-image-resize';
import FilePondPluginImageEdit from 'filepond-plugin-image-edit';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

/**
 * @param elements
 */
export const uploadAudio = async (elements) => {

    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageCrop,
        FilePondPluginImageResize,
        FilePondPluginImageEdit,
        FilePondPluginFileValidateType
    );

    let _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    const pond = FilePond.create(elements, {
        labelIdle: `Glissez et déposez vos fichiers`,
        labelFileLoading: 'Chargement ...',
        allowImageCrop: true,
        acceptedFileTypes: ['image/*'],
    });

    await pond.setOptions({
        server: {
            url: '/admins/upload-thumbnail',
            revert: '/admins/remove-images',
            headers: {
                'X-CSRF-Token': _token
            }
        }
    })

}
