@extends('dashboard.layouts.master')
@section('title', __('Apply For Job'))
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ __('dashboard.Dashboard') }}/</span>
            {{ __('Apply For Job') }}</h4>

        <div>
            <x-messages.errors />
        </div>
        <div>
            <x-messages.flash />
        </div>
        <!-- breadcrumb -->
        <!-- row opened -->
        <div class="row row-sm">


            <!--div ok-->
            <div class="col-xl-12">
                <div class="card mg-b-20">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table key-buttons text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th class="bapplyForJob-bottom-0">{{ __('dashboard.ID') }}</th>
                                        <th class="bapplyForJob-bottom-0">{{ __('dashboard.Name') }}</th>
                                        <th class="bapplyForJob-bottom-0">{{ __('dashboard.Email') }}</th>
                                        <th class="bapplyForJob-bottom-0">{{ __('dashboard.Phone') }}</th>
                                        <th class="bapplyForJob-bottom-0">{{ __('dashboard.Notes') }}</th>
                                        <th class="bapplyForJob-bottom-0">{{ __('dashboard.Created At') }}</th>
                                        <th class="wd-20p bapplyForJob-bottom-0">{{ __('dashboard.Processes') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($applyForJobs as $applyForJob)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a
                                                href="{{route('dashboard.applyForJobs.show', $applyForJob->id) }}">{{ $applyForJob->first_name }} {{ $applyForJob->last_name }}</a>
                                            </td>
                                            <td>{{ $applyForJob->email }}</td>
                                            <td>{{ $applyForJob->phone }}</td>
                                            <td>{{ $applyForJob->notes }}</td>
                                            <td>{{ $applyForJob->created_at->diffForHumans() }}</td>
                                            <td>


                                                <div class="mt-3">
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#basicModal{{ $applyForJob->id }}">
                                                        Email
                                                    </button>
                                                    <!-- Button delete modal -->
                                                    <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#delete{{ $applyForJob->id }}">
                                                        Delete
                                                    </button>


                                                    <!-- Modal -->
                                                    @include('dashboard.applyForJobs._modal')
                                                    @include('dashboard.applyForJobs._delete-modal')
                                                </div>
                                            </td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="9">{{ __('dashboard.No data defined') }}.</td>
                                        </tr>
                                    @endforelse

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->


        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->

@endsection
@section('js')

    <!--Internal  Notify js -->
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>

@endsection
