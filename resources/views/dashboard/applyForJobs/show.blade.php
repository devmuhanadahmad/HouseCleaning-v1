@extends('dashboard.layouts.master')
@section('title', __('Apply For Job'))
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Apply For Job /</span> Show</h4>

            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <h5 class="card-header">Apply For Job Details</h5>
                        <!-- Account -->

                        <hr class="my-0" />

                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <!-- first_name -->
                                        <x-form.input lable="{{ __('First Name') }}" type="text" name="first_name"
                                            :value="$applyForJob->first_name" readonly />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <!-- last_name -->
                                        <x-form.input lable="{{ __('Last Name') }}" type="text" name="last_name"
                                            :value="$applyForJob->last_name" readonly />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <!-- email -->
                                        <x-form.input lable="{{ __('Email') }}" type="email" name="email"
                                            :value="$applyForJob->email" readonly />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <!-- phone -->
                                        <x-form.input lable="{{ __('Phone') }}" type="text" name="phone"
                                            :value="$applyForJob->phone" readonly />
                                    </div>


                                    <div class="mb-6 col-md-12">
                                        <!-- notes -->
                                        <x-form.textarea lable="{{ __('notes') }}" name="notes" :value="$applyForJob->notes"
                                            readonly />
                                    </div>


                                </div>

                            </form>
                        </div>

                        <!-- /Account -->
                    </div>
                    <div class="card">
                        <h5 class="card-header">CV</h5>
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <div>
                                    <label for="cv">Your CV:</label>
                                    @if ($applyForJob->file)
                                        <!-- Check if it's a PDF, DOC, DOCX, or TXT file -->
                                        @if (strpos($applyForJob->file, '.pdf') !== false)
                                            <!-- If it's a PDF, open it in a new tab -->
                                            <a href="{{ asset('storage/' . $applyForJob->file) }}" target="_blank">View PDF CV</a>
                                        @elseif (strpos($applyForJob->file, '.doc') !== false || strpos($applyForJob->file, '.docx') !== false)
                                            <!-- If it's a DOC or DOCX, open it in a new tab -->
                                            <a href="https://view.officeapps.live.com/op/view.aspx?src={{ urlencode(asset('storage/' . $applyForJob->file)) }}" target="_blank">View DOC/DOCX CV</a>
                                        @elseif (strpos($applyForJob->file, '.txt') !== false)
                                            <!-- If it's a TXT file, open it in a new tab -->
                                            <a href="{{ asset('storage/' . $applyForJob->file) }}" target="_blank">View TXT CV</a>
                                        @else
                                            <!-- If file type is not supported -->
                                            <p>The uploaded CV is not in a supported format.</p>
                                        @endif
                                    @else
                                        <p>No CV uploaded.</p>
                                    @endif
                                </div>

                            </div>
<br>
                            <div class="mt-2">
                                <!-- Button Send Message To Email modal -->
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#basicModal{{ $applyForJob->id }}">
                                Email
                               </button>
                                @include('dashboard.applyForJobs._modal')
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- / Content -->

    @endsection
    @section('js')

        <!--Internal  Notify js -->
        <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
        <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>

    @endsection
