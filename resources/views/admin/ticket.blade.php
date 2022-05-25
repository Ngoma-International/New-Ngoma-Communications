@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="main-header">
            <h4>Scanner</h4>
        </div>
        <div class="col-lg-6">
            <div class="card">

                <div class="modal fade modal-flex" id="horizontal-form-Modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h5 class="modal-title">Code Explanation for Horizontal Form</h5>
                            </div>
                            <!-- end of modal-header -->
                            <div class="modal-body">
                                <div>
                                    <div id="highlighter_964965" class="syntaxhighlighter  html">
                                        <div class="toolbar"><span><a href="#"
                                                    class="toolbar_item command_help help">?</a></span></div>
                                        <table cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>


                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end of modal body                    -->
                        </div>
                        <!-- end of modal-content -->
                    </div>
                    <!-- end of modal-dialog -->
                </div>
                <!-- end of modal -->

                <div class="card-block">



                    <form>

                        <label for="first_name">Enter Ticket Code below</label>
                        <label for="number" class="col-md-2 col-form-label form-control-label"></label>
                        <div class="col-md-10" class="centered">
                            <input type="text" class="form-control input-lg" id="val" name="val" required="">

                        </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-30">Verify Ticket</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
