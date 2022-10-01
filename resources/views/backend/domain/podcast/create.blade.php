@extends('backend.layouts.base')

@section('title')
    Ajoutez un podcast
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Ajouter un podcast
    @endcomponent
    @component('backend.shared.content')
        <div class="card-block">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label
                            for="exampleInputEmail1"
                            class="form-control-label">Email address</label>
                    <input
                            type="email"
                            class="form-control"
                            id="exampleInputEmail1"
                            name="exampleInputEmail1"
                            value="{{ old('exampleTextarea') }}"
                            aria-describedby="emailHelp"
                            placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleSelect1" class="form-control-label">Example select</label>
                    <select class="form-control" name="exampleSelect1" id="exampleSelect1">
                        <option>1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label
                            for="exampleTextarea"
                            class="form-control-label">Example textarea</label>
                    <textarea
                            class="form-control"
                            id="exampleTextarea"
                            name="exampleTextarea"
                            rows="4">{{ old('exampleTextarea') ?? "" }}</textarea>
                </div>
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Submit</button>
            </form>
        </div>
    @endcomponent
@endsection
