@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <app-toast
                type="danger"
                message="{{ $error }}"
                timer="5000"
            ></app-toast>
        @endforeach
    </ul>
@endif
