@extends('backend.layouts.base')

@section('title')
    Podcast
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Podcast
        <div class="mt-4">
            <a href="{{ route('admins.podcast.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                Add
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
                    <td>
                        <a href="" class="btn btn-primary btn-sm editAdvisor" >
                            <i class="fa fa-pencil"></i>
                        </a>
                        <button class="btn btn-danger btn-sm deletAdvisor" >
                            <i class="fa fa-trash txt-white"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    @endcomponent
@endsection
