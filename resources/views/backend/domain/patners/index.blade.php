@extends('backend.layouts.base')

@section('title')
    Partners
@endsection

@section('content')
    @component('backend.component.brandcrump')
        Partners
    @endcomponent
    @component('backend.shared.content')
        <div class="card-block">
            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">
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
