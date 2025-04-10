@extends('website.layouts.master')
@section('mainPageTitle', 'Apply For Job')
@section('pageTitle', 'Apply For Job | Daily Cleaning')
@section('content')
@push('styles')
    @livewireStyles()
@endpush


<!-- Doctor Detail Section -->
<section class="doctor-detail">
    <div class="auto-container">


        <!-- Lower Content -->
        <div class="lower-content">
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box">


                        <div class="timetable">
                            <h3><small>Check Our</small> Weekly Timetable</h3>
                            <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet nulla luctus...</p>
                            <ul>
                                <li>Monday - Friday <span>8.00 - 18.00</span></li>
                                <li>Saturday <span>9.00 - 16.00</span></li>
                                <li>Sunday <span>9.00 - 16.00</span></li>
                            </ul>

                        </div>
                    </div>
                </div>

                @livewire('apply-for-jop-form.create')

            </div>
        </div>
    </div>
</section>
<!-- End Doctor Detail Section -->

@endsection
@push('scripts')
    @livewireScripts()
@endpush
