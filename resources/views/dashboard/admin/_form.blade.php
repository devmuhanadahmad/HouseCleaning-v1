<div class="row">
    <!--name-->
    <x-form.input lable="{{ __('backend.Name') }}" type="text" name="name" :value="$admin->name" />

</div><br>

<div class="row">
    <!--email-->
    <x-form.input lable="{{ __('backend.Email') }}" type="email" name="email" :value="$admin->email" />
</div><br>

<div class="row">
    <!--Password-->
    <x-form.input lable="{{ __('backend.Password') }}" type="password" name="password" :value="$admin->password" />
</div><br>

<div class="row">
    <!--Status-->
    <x-form.status lable="{{ __('backend.Status') }}" name="status" :value="$admin->status" :option="['active' => 'Active', 'inactive' => 'Inactive']" />
    />
</div><br>

