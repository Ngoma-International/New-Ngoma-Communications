@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="user-block-2">
                <img class="img-circle" src="{{ asset('admin/assets/images/widget/user-1.png') }}" alt="user-header" style="width: 140px; height: 120px; margin-left: 20px;">
            </div>

        </div>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-block">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-control-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-control-label">Phone</label>
                        <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-control-label">Full name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">


                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea" class="form-control-label">Bio</label>
                        <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Submit</button>
                </form>
                <div class="card-block accordion-block">
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="accordion-panel">
                            <div class="accordion-heading" role="tab" id="headingOne">
                                <h3 class="card-title accordion-title">
                                    <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Update Password
                </a>
                                </h3>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="accordion-content accordion-desc">
                                    <form>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="form-control-label">Password</label>
                                            <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="form-control-label">Verify</label>
                                            <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>




                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection