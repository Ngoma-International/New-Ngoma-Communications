@extends('backend.layouts.base')

@section('title')
    Partners
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Partners
        <div class="mt-4">
            <a href="{{ route('admins.users.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                Add
            </a>
        </div>
    @endcomponent

    @component('backend.shared.content')
        <div class="card-block">
            <table id="simpletable" class="table dt-responsive table-striped table-bordered nowrap">
                <thead>
                <tr class="text-center">
                    <th>Images</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phones</th>
                    <th>Profession</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="text-center">
                        <td>
                            <img
                                class="img-circle img-fluid text-center"
                                height="40"
                                width="40"
                                src="{{ asset('storage/'.$user->images) }}"
                                alt="Profile">
                        </td>
                        <td>{{ ucfirst($user->name) ?? "" }}</td>
                        <td>{{ $user->email ?? "" }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ ucfirst($user->profession) ?? "" }}</td>
                        <td>{{ ucfirst($user->profession) ?? "" }}</td>
                        <td>{{ ucfirst($user->profession) ?? "" }}</td>
                        <td class="text-center">
                            <a href="{{ route('admins.users.edit', $user->id) }}" class="btn btn-primary btn-sm editAdvisor" >
                                <i class="fa fa-pencil"></i>
                            </a>
                            <button class="btn btn-danger btn-sm deletAdvisor" >
                                <i class="fa fa-trash txt-white"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endcomponent
@endsection
