<!--basic -->
<div class="row">
    <!-- Basic -->
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Basic</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="form-group">
                    <label>App Name</label>
                    <x-form.input name="config[app.name]" :value="config('app.name')" />
                </div>

                <div class="form-group">
                    <label>Time Zone</label>
                    <x-form.input name="config[app.timezone]" :value="config('app.timezone')" />
                </div>

            </div>
        </div>
    </div>
</div>
<!--/basic-->

<!--info -->
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Information</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="form-group">
                    <label>Address</label>
                    <x-form.input name="config[contact.address]" :value="config('contact.address')" />
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <x-form.input name="config[contact.phone]" :value="config('contact.phone')" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <x-form.input name="config[contact.email]" :value="config('contact.email')" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--/info-->

<!--Media -->
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Media</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="form-group">
                    <label>Facebook</label>
                    <x-form.input name="config[contact.facebook]" :value="config('contact.facebook')" />
                </div>

                <div class="form-group">
                    <label>Twiter</label>
                    <x-form.input name="config[contact.twiter]" :value="config('contact.twiter')" />
                </div>

                <div class="form-group">
                    <label>Instagram</label>
                    <x-form.input name="config[contact.instagram]" :value="config('contact.instagram')" />
                </div>

                <div class="form-group">
                    <label>Linkedin</label>
                    <x-form.input name="config[contact.linkedin]" :value="config('contact.linkedin')" />
                </div>

            </div>
        </div>
    </div>
</div>
<!--/media-->

<!--Email -->
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Email</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">

                <div class="form-group">
                    <label>Host</label>
                    <x-form.input  name="config[mail.mailers.smtp.host]" :value="config('mail.mailers.smtp.host')" />
                </div>

                <div class="form-group">
                    <label>Port</label>
                    <x-form.input  name="config[mail.mailers.smtp.port]" :value="config('mail.mailers.smtp.port')" />
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <x-form.input name="config[mail.mailers.smtp.username]" :value="config('mail.mailers.smtp.username')" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <x-form.input  type="password" name="config[mail.mailers.smtp.password]"
                        :value="config('mail.mailers.smtp.password')" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <x-form.input type="text" name="config[mail.from.address]"
                        :value="config('mail.from.address')" />
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <x-form.input type="text" name="config[mail.from.name]"
                        :value="config('mail.from.name')" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--/email-->

<!--app link -->
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">App Link</h5>
            <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="form-group">
                    <label>Google Play Link</label>
                    <x-form.input name="config[link.android]" :value="config('link.android')" />
                </div>

                <div class="form-group">
                    <label>Apple Store Link</label>
                    <x-form.input name="config[link.apple]" :value="config('link.apple')" />
                </div>

            </div>
        </div>
    </div>
</div>
<!--/app link-->
