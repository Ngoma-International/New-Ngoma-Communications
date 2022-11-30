@extends('app.layouts.base')

@section('title')
    Membre collectif
@endsection

@section('content')
    <div class="card-inner blogs active" id="blog">
        <div class="row card-container" data-simplebar="init">
            <div class="simplebar-scroll-content" style="padding-right: 12px; margin-bottom: -24px;">
                <div class="simplebar-content" style="padding-bottom: 12px; margin-right: -12px;">
                    <div class="card-wrap blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">Collectif Member</div>
                                </div>
                            </div>
                        </div>
                        <div class="content blog">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="row">
                                        <p style="margin-top:40px; text-align:center; font-size: 20px;">
                                            Our team will take contact you within 24 hours to discuss with you about your leadership training needs.<br>
                                            This is free of charge and without any commitments.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <livewire:frontend.store-collectif-member />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lines-grid loaded">
        <div class="row">
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
            <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3"></div>
        </div>
    </div>
@endsection
