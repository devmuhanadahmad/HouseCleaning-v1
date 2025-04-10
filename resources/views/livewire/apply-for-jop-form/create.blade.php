 <!-- Form Column -->
 <div class="form-column col-lg-8 col-md-12 col-sm-12">
    <div class="inner-box">
        <div class="appointment-form">
            <div class="sec-title centered">
                <h2>Apply For Job</h2>
                <p>Get to Job Now</p>
            </div>
            @if (session()->has('success'))
            <div class="alert alert-success mmb-2" role="alert">
                {{ session('success') }}

            </div>
            @endif


            <form wire:submit.prevent="store">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <input type="text" wire:model="first_name" placeholder="First Name" required="">
                        <span class="icon fa fa-user"></span>
                        @error('first_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <input type="text" wire:model="last_name" placeholder="Last Name" required="">
                        <span class="icon fa fa-user"></span>
                        @error('last_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <input type="email" wire:model="email" placeholder="Email" required="">
                        <span class="icon fa fa-envelope"></span>
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <input type="tel" wire:model="phone" placeholder="Phone No" required="">
                        <span class="icon fas fa-phone"></span>
                        @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12  form-group form-group">
                        <textarea wire:model="notes" placeholder="Message"></textarea>
                        @error('notes')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12 " >
                        <input type="file" wire:model="file" placeholder="File" required="" class="form-control  dropify"
                        accept=".pdf, .doc, .docx, .txt" data-height="80">
                        @error('file')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                        <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Save Data</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
