@extends('backend.layouts.master')
@section('title', __('backend.Admins'))
@section('content')
    <!-- container -->
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">{{ __('backend.Admins') }}</h4><span
                        class="text-muted mt-1 tx-13 ml-2 mb-0"></span>
                </div>
            </div>

        </div>
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
                        <div class="card-header pb-0">
                            @can('create', 'App\Models\Admin')
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('admins.create') }}">
                                        <button type="button" class="btn btn-primary">
                                            {{ __('backend.Add new') }}
                                        </button>
                                    </a>
                                </div>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table key-buttons text-md-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">{{ __('backend.ID') }}</th>
                                            <th class="border-bottom-0">{{ __('backend.Name') }}</th>
                                            <th class="border-bottom-0">{{ __('backend.Email') }}</th>
                                            <th class="border-bottom-0">{{ __('backend.Email') }}</th>
                                            <th class="border-bottom-0">{{ __('backend.Status') }}</th>
                                            <th class="border-bottom-0">{{ __('backend.Created At') }}</th>
                                            <th class="wd-20p border-bottom-0">{{ __('backend.Processes') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $admin)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>
                                                    @if (config('app.locale') == 'ar')
                                                        @if ($admin->status == 'active')
                                                            مفعل
                                                        @else
                                                            غير مفعل
                                                        @endif
                                                    @else
                                                        {{ $admin->status }}
                                                    @endif
                                                </td>
                                                <td>{{ $admin->created_at->diffForHumans() }}</td>
                                                <td>
                                                    @can('update', $admin)
                                                        <a class="dropdown-item"
                                                            href="{{ route('admins.edit', $admin->id) }}"><i
                                                                style="color: #0ba360"
                                                                class="text-success ti-user"></i>&nbsp;&nbsp;{{ __('backend.Edit') }}
                                                        </a>
                                                    @endcan
                                                    @can('editPassword', $admin)
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit{{ $admin->id }}"><i
                                                                class="text-primary ti-key"></i>&nbsp;&nbsp;
                                                            {{ __('backend.Change Password') }}</a>
                                                    @endcan
                                                    @can('delete', $admin)
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete{{ $admin->id }}"><i
                                                                class="text-danger  ti-trash"></i>&nbsp;&nbsp;{{ __('backend.Delete') }}
                                                        </a>
                                                    @endcan
                                                </td>
                                            </tr>
                                            @include('backend.admin.delete')
                                            @include('backend.admin.editPassword')
                                        @endforeach
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
    @push('js')
        <!--Internal  Notify js -->
        <!-- Internal Data tables -->
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('../../backend/assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>

        <!--Internal  Datatable js -->
        <script src="{{ asset('../../backend/assets/js/table-data.js') }}"></script>
    @endpush
