@extends('dashboard.layouts.master')
@section('title', __('dashboard.Contact'))
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{__("dashboard.Dashboard")}}/</span> {{__("dashboard.Contact")}}</h4>

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
                                        <th class="border-bottom-0">{{ __('dashboard.ID') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Name') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Email') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Phone') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Question') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Created At') }}</th>
                                        <th class="wd-20p border-bottom-0">{{ __('dashboard.Processes') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($contacts as $contact)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ Str::limit($contact->question, 40) }}</td>
                                            <td>{{ $contact->created_at->diffForHumans() }}</td>
                                            <td>


                                                <div class="mt-3">
                                                    <!-- Button Send Message To Email modal -->
                                                    <button   class="btn btn-primary" type="submit"  data-bs-toggle="modal" data-bs-target="#basicModal{{$contact->id}}">
                                                        Send Email
                                                    </button>
                                                     <!-- Button delete modal -->
                                                    <button   class="btn btn-danger" type="button"  data-bs-toggle="modal" data-bs-target="#delete{{$contact->id}}">
                                                        Delete
                                                    </button>

                                                    <!-- Modal -->
                                                    @include('dashboard.contact._modal')
                                                    <!-- Delete Modal -->
                                                    @include('dashboard.contact._delete-modal')
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
                            <br>
                            {{$contacts->withQueryString()->links('vendor.pagination.bootstrap-5')}}
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
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection
