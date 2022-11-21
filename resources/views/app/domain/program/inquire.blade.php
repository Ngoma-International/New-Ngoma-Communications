@extends('app.layouts.base')

@section('title')
    inquire
@endsection

@section('content')
    <div class="card-inner blogs active" id="blog-card">
        <div class="row card-container" data-simplebar="init">
            <div class="simplebar-track vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 43px;"></div>
            </div>
            <div class="simplebar-track horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar"></div>
            </div>
            <div class="simplebar-scroll-content" style="padding-right: 12px; margin-bottom: -24px;">
                <div class="simplebar-content" style="padding-bottom: 12px; margin-right: -12px;">
                    <div class="card-wrap blogs-content col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="content inner-top">
                            <div class="row">
                                <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                    <div class="title-bg">Enquiry Form</div>
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
                            <div class="row" >
                                <form method="POST" action="" id="contactForm">
                                    <div class="col col-m-11 col-t-11 col-d-10 col-d-lg-10" style="margin-left:5%; margin-right:5%;">
                                        <input type="text" class="formgroup fiftyPercent" name="firstName" placeholder="First Name" required>
                                        <input type="text" class="formgroup fiftyPercent" name="lastName" placeholder="Last Name" required>
                                        <input type="email" class="formgroup fiftyPercent" name="email" placeholder="Email" required>
                                        <input type="text" class="formgroup fiftyPercent" name="company" placeholder="Company" required>
                                        <input type="text" class="formgroup fiftyPercent" name="jobTitle" placeholder="Job Title" required>
                                        <input type="tel" class="formgroup fiftyPercent" name="phone" placeholder="Phone" required>
                                        <input type="hidden" value="inquiry" name="action"  required/>
                                        <input type="text" class="formgroup fiftyPercent" name="city" placeholder="City / Town" required>
                                        <select class="formgroup fiftyPercent" name="category" style="background: transparent; border:none !important; border-bottom: 1px solid #777777 !important; color:#697161;">
                                            <option value="">Please Select Category</option>
                                            <option value="Leading Yourself"> Leading Yourself</option>
                                            <option value="Leading People"> Leading People</option>
                                            <option value="Leading Organisations"> Leading Organisations</option>
                                            <option value="Life Skills"> Life Skills</option>
                                        </select>

                                        <textarea  placeholder="Your Message" name="comments" cols="4" style="width: 98%; margin:2%;" required></textarea>
                                        <input type="submit" value="submit" class="btn2" name="btn btn2" />
                                        <div class="col-md-12" style="text-align: center; padding-bottom: 0;   padding-top: 1%">
                                            <div class="spinner-border text-muted"style="margin: auto; text-align: center !important; display: none;"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="pager">
                                <input type="hidden" id="next_content" value="2">
                                <a href="#" class="button">
                                    <span class="icon"></span>
                                </a>
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
