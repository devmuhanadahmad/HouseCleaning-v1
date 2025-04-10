@extends('dashboard.layouts.master')
@section('title', __('Orders'))
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Order /</span> Show</h4>

            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <h5 class="card-header">Book Now Details</h5>
                        <!-- Account -->

                        <hr class="my-0" />
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <!-- name -->
                                        <x-form.input lable="{{ __('Full Name') }}" type="text" name="name"
                                            :value="$order->name" readonly />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <!-- email -->
                                        <x-form.input lable="{{ __('Email') }}" type="email" name="email"
                                            :value="$order->email" readonly />
                                    </div>

                                    <div class="mb-3 col-md-6">

                                        <!-- address -->
                                        <x-form.input lable="{{ __('Address') }}" type="text" name="address"
                                            :value="$order->address" readonly />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <!-- phone -->
                                        <x-form.input lable="{{ __('Phone') }}" type="text" name="phone"
                                            :value="$order->phone" readonly />
                                    </div>

                                    <div class="mb-3 col-md-6">

                                        <!-- address -->
                                        <x-form.input lable="{{ __('Deadline') }}" type="text" name="deadline"
                                            :value="$order->deadline" readonly />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <!-- phone -->
                                        <x-form.input lable="{{ __('Serv') }}" type="text" name="category_id"
                                            :value="$order->category->name" readonly />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <!-- number_of_working_hours -->
                                        <x-form.input lable="{{ __('number_of_working_hours') }}" type="text"
                                            name="number_of_working_hours" :value="$order->number_of_working_hours" readonly />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <!-- number_of_workers_working -->
                                        <x-form.input lable="{{ __('number_of_workers_working') }}" type="text"
                                            name="number_of_workers_working" :value="$order->number_of_workers_working" readonly />
                                    </div>

                                    <div class="mb-6 col-md-12">
                                        <!-- notes -->
                                        <x-form.textarea lable="{{ __('notes') }}" name="notes" :value="$order->notes"
                                            readonly />
                                    </div>


                                </div>

                            </form>
                        </div>

                        <!-- /Account -->
                    </div>
                    <div class="card">
                        <h5 class="card-header">Images</h5>
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                @foreach ($order->images as $image)
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="user-avatar"
                                        class="d-block rounded" height="400" width="400" id="uploadedAvatar" />
                                @endforeach
                            </div>
                            <div class="mt-2">
                                <!-- Button Send Message To Email modal -->
                                <button   class="btn btn-primary" type="submit"  data-bs-toggle="modal" data-bs-target="#order{{$order->id}}">
                                    Send Email Date
                                </button>
                            @include('dashboard.order._formModal')
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
