<form action="{{ $route }}" method="POST" class="d-inline">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn {{ $button ?? "" }} d-none d-sm-inline-flex">
        <em class="icon ni {{ $icon ?? "" }}"></em>
        <span>{{ $title ?? "" }}</span>
    </button>
</form>
