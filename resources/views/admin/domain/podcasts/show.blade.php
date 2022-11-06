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
                        {{ ucfirst($postViewModel->podcast->title) ?? "" }}
                    @endcomponent

                    @component('admin.shared.banner')
                        <li class="preview-item">
                            <a class="btn btn-primary btn-dim btn-sm" href="{{ $postViewModel->indexUrl }}">
                                <em class="icon ni ni-arrow-long-left"></em>
                                <span>Tout les podcasts</span>
                            </a>
                        </li>
                        <li class="preview-item">
                            <a
                                    href="{{ $postViewModel->editUrl }}"
                                    class="btn btn-dim btn-primary btn-sm">
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
                                <button type="submit" class="btn btn-dim btn-danger btn-sm">
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
                        </div>
                    </div>
                    <div class="nk-divider divider md"></div>
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <span class="title"></span>
                        </div>
                        @if($postViewModel->getTypePodcast() === 1)
                            <div class="col-lg-5 justify-content-center">
                                <div class="video text-center">
                                    <audio controls>
                                        <source src="{{ asset('storage/'.$postViewModel->podcast->images_video) }}"
                                                type="audio/ogg">
                                        <source src="{{ asset('storage/'.$postViewModel->podcast->images_video) }}"
                                                type="audio/mpeg">
                                    </audio>
                                </div>
                            </div>

                        @else
                            <div class="col-lg-5 justify-content-center">
                                <div class="video text-center">
                                    <video width="320" height="260" controls
                                           poster="{{ asset('storage/'.$postViewModel->podcast->thumbnail) }}">
                                        <source src="{{ asset('storage/'.$postViewModel->podcast->images_video) }}"
                                                type="video/mp4">
                                        <source src="{{ asset('storage/'.$postViewModel->podcast->images_video) }}"
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
