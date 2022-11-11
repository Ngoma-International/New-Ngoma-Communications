@extends('admin.layout.base')

@section('title')
    Detail utilisateur {{ $postViewModel->podcast->title }}
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    @component('admin.shared.content')
                        Detail Podcast
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a class="btn btn-outline-primary btn-sm" href="{{ $postViewModel->indexUrl }}">
                                <em class="icon ni ni-arrow-long-left"></em>
                                <span>Tout les podcasts</span>
                            </a>
                        </li>
                            <li class="preview-item">
                                <div class="custom-control custom-control-md custom-switch">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        name="activated"
                                        data-id="{{ $postViewModel->podcast->id }}"
                                        @checked($postViewModel->podcast->status )
                                        onclick="changePodcastStatus(event.target, {{ $postViewModel->podcast->id }});"
                                        id="activated">
                                    <label class="custom-control-label" for="activated"></label>
                                </div>
                            </li>
                        <li class="preview-item">
                            <a
                                    href="{{ $postViewModel->editUrl }}"
                                    class="btn btn-outline-primary btn-sm">
                                <em class="icon ni ni-edit mr-1"></em>
                                Editer
                            </a>
                        </li>
                        <li class="preview-item">
                            <form
                                    action="{{ $postViewModel->deleteUrl }}"
                                    method="POST"
                                    class="d-inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this item?');"
                            >
                                @method('DELETE')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    <em class="icon ni ni-trash-empty-fill"></em>
                                    Supprimer le Podcast
                                </button>
                            </form>
                        </li>
                    @endcomponent
                </div>
            </div>
            @component('admin.shared.section')
                <div class="card-inner">
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title">Informations du podcast</span>
                        </div>
                        <div class="profile-ud-list">
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Title podcast</span>
                                    <span class="profile-ud-value">{{ ucfirst($postViewModel->podcast->title) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Authors</span>
                                    <span class="profile-ud-value">{{ ucfirst($postViewModel->getAuthor()->name) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Firstname Authors</span>
                                    <span class="profile-ud-value">{{ $postViewModel->getAuthor()->firstname ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Type podcast</span>
                                    <span class="profile-ud-value">{{ ucfirst($postViewModel->getTypePodcast()->name) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Address manager</span>
                                    <span class="profile-ud-value">{{ ucfirst($postViewModel->getPodcastOffering()->name) ?? "" }}</span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Status Podcast</span>
                                    <span class="profile-ud-value">
                                        @if($postViewModel->podcast()->status)
                                            <span class="badge badge-success ms-0">Activée</span>
                                        @else
                                            <span class="badge badge-danger ms-0">Désactivée</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title"></span>
                        </div>
                        @if($postViewModel->getTypePodcast()->id === 1)
                            <div class="col-lg-5 justify-content-center">
                                <div class="video text-center">
                                    <audio controls>
                                        <source
                                            src="{{ asset('storage/'.$postViewModel->podcast->images_video) }}"
                                            type="audio/ogg">
                                        <source
                                            src="{{ asset('storage/'.$postViewModel->podcast->images_video) }}"
                                            type="audio/mpeg">
                                    </audio>
                                </div>
                            </div>

                        @else
                            <div class="col-lg-5 justify-content-center">
                                <div class="video text-center">
                                    <video
                                        width="350"
                                        height="270"
                                        controls
                                        poster="{{ asset('storage/'.$postViewModel->podcast->thumbnail) }}">
                                        <source
                                            src="{{ asset('storage/'.$postViewModel->podcast->images_video) }}"
                                            type="video/mp4">
                                        <source
                                            src="{{ asset('storage/'.$postViewModel->podcast->images_video) }}"
                                            type="video/ogg">
                                    </video>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title">Informations supplémentaires</span>
                        </div>
                        <div class="profile-ud-list">
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Date de creation</span>
                                    <span
                                            class="profile-ud-value">{{ $postViewModel->podcast->created_at->format('Y-m-d') }}
                                    </span>
                                </div>
                            </div>
                            <div class="profile-ud-item">
                                <div class="profile-ud wider">
                                    <span class="profile-ud-label">Dernière mise à jour</span>
                                    <span
                                            class="profile-ud-value">{{ $postViewModel->podcast->updated_at->format('Y-m-d') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        window.changePodcastStatus = async (_this, id) => {
            const status = $(_this).prop('checked') === true ? 1 : 0;
            let _token = $('meta[name="csrf-token"]').attr('content');
            let data = {
                status: status,
                podcast: id
            }
            let headers = {
                'Content-type': 'application/json; charset=UTF-8',
                'x-csrf-token': _token,
            }

            await fetch('/admins/podcast-status', {
                method: "POST",
                body: JSON.stringify(data),
                headers: headers
            })
                .then(response => response.json())
                .then((data) => {
                    var result = Object.values(data)

                    Swal.fire(`Status ${result[1].title}`, `${result[0]}`, 'success')
                })
                .catch((error) => {
                    Swal.fire("Erreur ", "Une erreur a ete observer lors de l'execution de cette tache", "error")
                })
        }
    </script>
@endsection
