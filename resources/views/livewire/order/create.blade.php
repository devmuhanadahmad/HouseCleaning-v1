

<!-- Form Column -->
<div class="form-column col-lg-6 col-md-12 col-sm-12" id="bookNow">
    <div class="inner-column">
        <!-- Sec Title -->
        <div class="sec-title">
            <h2>Book Now</h2>
            <div class="separator"></div>

            <x-messages.flash />
        </div>

        <!-- Order Form -->
        <div class="appointment-form">
            <div>
                <form wire:submit.prevent="store">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control"  wire:model="name" placeholder="Enter Full Name" required="">
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" wire:model="email" placeholder="Enter Email" required="">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Phone No</label>
                            <input type="tel" wire:model="phone" placeholder="Enter Phone No" required="">
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Address</label>
                            <input type="text" wire:model="address" placeholder="Enter Address" required="">
                            @error('address')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Deadline</label>
                            <input type="date" class="form-control p-2"  wire:model="deadline" placeholder="Deadline" >
                            @error('deadline')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Service</label>
                            <select  wire:model="category_id" class="custom-select-box">
                                <option selected>Select Service</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Number of workers </label>
                            <input type="text" name="number_of_workers_working" wire:model="number_of_workers_working" placeholder="-- Option to business --">
                            @error('number_of_workers_working')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label for="images">Number of Working Hours</label>
                            <input type="text" name="number_of_working_hours" wire:model="number_of_working_hours" placeholder=" -- Option to business --" class="">
                            @error('number_of_working_hours')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="images">Upload Images (Max 3)</label>
                            <input type="file"  wire:model="images" placeholder="Max 3 Images" multiple required="" class="form-control  dropify"
                            accept=".pdf,.jpg, .png, image/jpeg, image/png" data-height="80">
                            @error('images.*') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>



                        @if (count($images) > 0)
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <h5>Uploaded Images:</h5>
                                @foreach ($images as $image)
                                    <img src="{{ $image->temporaryUrl() }}" width="80" class="mr-2">
                                @endforeach
                            </div>
                        @endif


                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea wire:model="notes" placeholder="Notes Option "></textarea>
                            @error('notes') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>



                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="theme-btn btn-style-two" type="submit" name="submit-form" ><span class="txt">Reservation</span></button>
                        </div>

                    </div>
                </form>
            </div>


        </div>

    </div>
</div>
