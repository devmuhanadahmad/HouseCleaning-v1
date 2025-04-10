@extends('dashboard.layouts.master')
@section('title', __('Profile'))
@section('content')
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
      <div class="col-md-12">

        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->

          <hr class="my-0" />
          <div class="card-body">
            <div>
                <x-messages.flash />
            </div>
            <form action="{{route("dashboard.profile.edit")}}" id="formAccountSettings" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
              <div class="row">

              @include('dashboard.profile._form')

              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
              </div>
            </form>
          </div>
          <!-- /Account -->
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
