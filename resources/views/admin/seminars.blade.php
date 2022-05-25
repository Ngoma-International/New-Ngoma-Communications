@extends('admin.layouts.master')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text m-b-5">Upcoming Seminars</h5>
                <p>
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip"
                        data-placement="top" title="" data-original-title=".btn-primary">Create an event
                    </button>
                </p>
            </div>
            <div class="card-block">
                <table class="table table-striped table-bordered table-responsive" id="example-2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Seminars Name</th>
                            <th>Seminars Date</th>
                            <th>Seminars Price</th>
                            <th>Seminars Type</th>
                            <th>Seminars Offering</th>
                            <th>Seminars Status</th>
                            <th>View/Edit</th>

                            <th class="tabledit-toolbar-column"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="tabledit-view-mode"><span class="tabledit-span">Mark</span><input
                                    class="tabledit-input form-control input-sm" type="text" name="First Name" value="Mark"
                                    style="display: none;" disabled=""></td>
                            <td class="tabledit-view-mode"><span class="tabledit-span">Otto</span><input
                                    class="tabledit-input form-control input-sm" type="text" name="Last Name" value="Otto"
                                    style="display: none;" disabled=""></td>
                            <td class="tabledit-view-mode"><span class="tabledit-span">@mdo</span><select
                                    class="tabledit-input form-control input-sm" name="Nickname" disabled=""
                                    style="display:none;">
                                    <option value="1">@mdo</option>
                                    <option value="2">@fat</option>
                                    <option value="3">@twitter</option>
                                </select></td>
                            <td class="tabledit-view-mode"><span class="tabledit-span">@mdo</span><select
                                    class="tabledit-input form-control input-sm" name="Nickname" disabled=""
                                    style="display:none;">
                                    <option value="1">@mdo</option>
                                    <option value="2">@fat</option>
                                    <option value="3">@twitter</option>
                                </select></td>
                            <td class="tabledit-view-mode"><span class="tabledit-span">@mdo</span><select
                                    class="tabledit-input form-control input-sm" name="Nickname" disabled=""
                                    style="display:none;">
                                    <option value="1">@mdo</option>
                                    <option value="2">@fat</option>
                                    <option value="3">@twitter</option>
                                </select></td>
                            <td><a class="btn btn-success">Active</a></td>
                            <td style="white-space: nowrap; width: 1%;">
                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                    <div class="btn-group btn-group-sm" style="float: none;"><button type="button"
                                            class="tabledit-edit-button btn btn-primary waves-effect waves-light"
                                            style="float: none;margin: 5px;"><span
                                                class="icofont icofont-ui-edit"></span></button><button type="button"
                                            class="tabledit-delete-button btn btn-danger waves-effect waves-light"
                                            style="float: none;margin: 5px;"><span
                                                class="icofont icofont-ui-delete"></span></button></div>

                                </div>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
