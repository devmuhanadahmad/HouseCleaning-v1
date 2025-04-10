@extends('dashboard.layouts.master')
@section('title', __('Orders'))
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{__("dashboard.Dashboard")}}/</span> {{__("Pending Orders")}}</h4>

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
                            <div class="d-flex justify-content-between">
                                {{--
                                @can('create','App\\Models\Section')
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add"
                                        data-whatever="@mdo">{{ __('dashboard.Add new') }}</button>
                                    @include('dashboard.section.create')
                                @endcan
                                 --}}



                            </div>
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
                                        <th class="border-bottom-0">{{ __('dashboard.Address') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Deadline') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Service') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Status') }}</th>
                                        <th class="border-bottom-0">{{ __('dashboard.Created At') }}</th>
                                        <th class="wd-20p border-bottom-0">{{ __('dashboard.Processes') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a
                                                    href="{{route('dashboard.orders.show', $order->id) }}">{{ $order->name }}</a>
                                            </td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->deadline }}</td>
                                            <td>{{ $order->category->name }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>{{ $order->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="mt-3">
                                                    <!-- Button trigger modal -->
                                                    <button   class="btn btn-primary" type="button"  data-bs-toggle="modal" data-bs-target="#order{{$order->id}}">
                                                         Email
                                                    </button>
                                                    <button   class="btn btn-danger" type="button"  data-bs-toggle="modal" data-bs-target="#delete{{$order->id}}">
                                                        Delete
                                                    </button>

                                                    @include('dashboard.order.delete')
                                                    @include('dashboard.order._formModal')
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
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection
