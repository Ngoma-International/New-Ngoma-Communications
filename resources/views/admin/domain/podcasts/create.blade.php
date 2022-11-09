@extends('admin.layout.base')

@section('title')
    Create podcast
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                @component('admin.shared.content')
                    Ajouter un podcast
                @endcomponent

                @component('admin.shared.banner')
                    <div class="nk-block-head-content">
                        <a href="{{ $viewModels->indexUrl }}"
                           class="btn btn-outline-light btn-sm bg-white d-none d-sm-inline-flex">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>Back</span>
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
                        @include('admin.domain.podcasts._form', with($viewModels))
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
    <script>
        const inputElement = document.querySelector('input[id="images_video"]');
        let _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

        const pont = FilePond.create(inputElement, {
            labelFileLoading: 'Chargement ...',
            allowImageCrop: true,
            acceptedFileTypes: ['image/*'],
        });

        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginImageCrop);

        pont.setOptions({
            server: {
                url: '/admins/upload-video',
                revert: '/admins/remove-video',
                headers: {
                    'X-CSRF-Token': _token
                }
            }
        })
    </script>
@endsection

