@extends('backend.layouts.base')

@section('title')
    room
@endsection

@section('content')
    @component('backend.component.brandcrump')
        room
        <div class="mt-4">
            <a href="{{ route('admins.class-room.create') }}" class="btn btn-primary mt-3">
                <i class="fa fa-plus"></i>
                Back
            </a>
        </div>
    @endcomponent
    @component('backend.shared.content')
        <div class="card-block">
            <table id="simpletable" class="table dt-responsive table-striped table-bordered nowrap">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>Tiger Nixon</td>
                </tr>
                </tbody>
            </table>
        </div>
    @endcomponent
@endsection
