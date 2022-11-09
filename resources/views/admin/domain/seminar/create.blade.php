@extends('admin.layout.base')

@section('title')
    Ajouter un event
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                @component('admin.shared.content')
                    Ajouter un event
                @endcomponent

                @component('admin.shared.banner')
                    <div class="nk-block-head-content">
                        <a class="btn btn-outline-primary btn-sm" href="{{ $viewModels->indexUrl }}">
                            <em class="icon ni ni-arrow-long-left"></em>
                            <span>Tout les events</span>
                        </a>
                    </div>
                @endcomponent
            </div>
        </div>
        @component('admin.shared.section')
            <div class="card-inner card-inner-lg">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('admin.shared._alert')
                        @include('admin.domain.seminar._form', with($viewModels))
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
@endsection

@section('styles')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet"/>
    <link
        href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet"
    />
@endsection

@section('scripts')
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/super-build/ckeditor.js"></script>
    <script>
        const inputElement = document.querySelector('input[id="images"]');
        let _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

        const pont = FilePond.create(inputElement);

        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginImageCrop);

        pont.setOptions({
            server: {
                url: '/admins/profile-upload',
                headers: {
                    'X-CSRF-Token': _token
                }
            }
        })
    </script>
    <script>
        CKEDITOR.ClassicEditor.create(document.querySelector('#description'), {
            toolbar: {
                items: [
                    'bold', 'italic', 'strikethrough', 'underline', 'bulletedList', 'numberedList','alignment', 'fontSize', 'fontFamily', 'link', 'insertImage', 'blockQuote', 'insertTable'
                ],
                shouldNotGroupWhenFull: true
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
            placeholder: 'Description utilisateur',
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [ 10, 11,'default', 12, 14, 16, 18, 20, 22 ],
                supportAllValues: true
            },
            removePlugins: [
                'CKBox',
                'CKFinder',
                'EasyImage',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType'
            ]
        });
    </script>
@endsection

