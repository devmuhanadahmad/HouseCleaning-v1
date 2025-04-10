
@extends('backend.layouts.master')
@section('title', __('backend.Admins'))

@section('content')
	  <!-- container opened -->
      <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">{{__('backend.Admins')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{__('backend.Add admin')}}</span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <!-- row -->
        <div class="row row-sm">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">{{__('backend.Add admin')}}</h4>

                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('admins.store') }}" method="post" autocomplete="off">
                            @csrf
                            @include('backend.admin._form')
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">{{ __('backend.Save Date') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- row -->


    </div>
    <!-- Container closed -->
@endsection
@push('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('backend/assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('backend/assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('backend/assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('backend/assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
@endpush

@push('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('backend/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('backend/assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('backend/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Internal Fancy uploader js-->
<script src="{{URL::asset('backend/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!--Internal  Form-elements js-->
<script src="{{URL::asset('backend/assets/js/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('backend/assets/js/select2.js')}}"></script>
<!--Internal Sumoselect js-->
<script src="{{URL::asset('backend/assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!-- Internal TelephoneInput js-->
<script src="{{URL::asset('backend/assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endpush

