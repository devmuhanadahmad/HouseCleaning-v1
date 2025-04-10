@extends('dashboard.layouts.master')
@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">

      <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="../dashboard/assets/img/icons/unicons/user-regular-24.png"
                      alt="chart success"
                      class="rounded"
                    />
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Users</span>
                <h3 class="card-title mb-2">{{App\Models\User::count()}}</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="../dashboard/assets/img/icons/unicons/border-all-regular-24 (1).png"
                      alt="Credit Card"
                      class="rounded"
                    />
                  </div>

                </div>
                <span>Orders</span>
                <h3 class="card-title text-nowrap mb-1">{{App\Models\Order::where('status', 'pending')->count()}}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--/ Total Revenue -->
      <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../dashboard/assets/img/icons/unicons/chat-regular-24.png" alt="Credit Card" class="rounded" />
                  </div>
                </div>
                <span class="d-block mb-1">Contact Us</span>
                <h3 class="card-title text-nowrap mb-2">{{App\Models\Contact::count()}}</h3>
              </div>
            </div>
          </div>
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../dashboard/assets/img/icons/unicons/group-solid-24 (1).png" alt="Credit Card" class="rounded" />
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">ِApply For Job</span>
                <h3 class="card-title mb-2">{{App\Models\ApplyForJob::count()}}</h3>
              </div>
            </div>
          </div>

         
          <!-- </div>
<div class="row"> -->

        </div>
      </div>
    </div>
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
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0"> <strong>Last 5 orders</strong> </h5>
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
  <!-- / Content -->
  @endsection
