@extends('dashboard.layouts.master')
@section('title', __('Settings'))
@section('content')
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Settings /</span> Edit</h4>

    <div class="row">
      <div class="col-md-12">


        <div class="card">
          <h5 class="card-header">Settings</h5>
          <div class="card-body">
            <div>
                <x-messages.flash />
            </div>
            <form action="{{route("dashboard.settings")}}" method="POST" id="formAccountDeactivation" enctype="multipart/form-data" >
                @csrf
              <div class="form-check mb-3">
               @include('dashboard.setting._form')
              </div>
              <button type="submit" class="btn btn-primary deactivate-account">Save Change</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->

@endsection
@section('js')

    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection
