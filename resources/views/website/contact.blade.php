@extends('website.layouts.master')
@section('mainPageTitle', 'Contact')
@section('pageTitle', 'Contact For Daily Cleaning')
@section('content')
    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Now Contact With Us</h2>
                <div class="separator"></div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">

                <!--Contact Form-->
                <form method="post" action="{{ route('website.contact.store') }}" id="contact-form">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <x-messages.errors />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <x-messages.flash />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <!-- name -->
                            <x-form.input lable="{{ __('Name') }}" type="text" name="name" :value="$contact->name"
                                required />
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <!-- email -->
                            <x-form.input lable="{{ __('dashboard.Email') }}" type="email" name="email"
                                :value="$contact->email" required />
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <!-- phone -->
                            <x-form.input lable="{{ __('Phone') }}" type="text" name="phone" :value="$contact->phone"
                                required />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <!-- question -->
                            <x-form.textarea lable="{{ __('question') }}" name="question" :value="$contact->question" required />
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                            <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span
                                    class="txt">Contact Us</span></button>
                        </div>

                    </div>
                </form>

                <!--End Contact Form -->
            </div>
    </section>
    <!-- End Contact Page Section -->

@endsection
