@extends('website.layouts.master')
@section('mainPageTitle', 'Apply For Job')
@section('pageTitle', 'Apply For Job For Daily Cleaning')
@section('content')
<!--Sidebar Page Container-->
<div class="sidebar-page-container style-two">
    <div class="auto-container">
        <div class="row clearfix">


            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="department-detail">


                    <div class="lower-content">
                        <h2>Departments Of Neurology</h2>
                        <h5 class="theme_color">ResoFus Alomar Treatment for Essential Tremor and Parkinson's Disease</h5>
                        <p>Resofus combines MR imaging and focused ultrasound into MR guided Focused Ultrasound technology, and provides a transcranial, non-invasive image-guided personalized treatment modality with no incisions and with no ionizing radiation.</p>

                        <p>This combination of continuous MR imaging and very highly focused acoustic sound waves provides the ability to provide pinpoint precision treatment at the planned target, without causing damage to any of the normal surrounding tissue. This precise local lesioning stops the improper transfer of electrical signals that induce the tremor, and it stops.</p>


                    </div>
                    <div class="outer-box clearfix">
                        <div class="btn-box">
                            <a href="{{route('website.applyForJobs.create')}}" class="theme-btn btn-style-one"><span class="txt">Apply For Job Now</span></a>
                        </div>
                    </div>
                </div>
                <!-- Service Detail -->



            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">



                    <!-- Help widgets -->
                    <div class="sidebar-widget need-help">

                    </div>



                </aside>
            </div>

        </div>
    </div>
</div>
@endsection
