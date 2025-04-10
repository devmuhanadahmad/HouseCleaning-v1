<div class="row">
    <!--name-->
    <x-form.input lable="{{ __('dashboard.Name') }}" type="text" name="name" :value="$user->name" required/>
</div><br>

<div class="row">
    <!--email-->
    <x-form.input lable="{{ __('dashboard.Email') }}" type="email" name="email" :value="$user->email" required/>
</div><br>

<div class="row">
    <!--Password-->
    <x-form.input lable="{{ __('dashboard.Password') }}" type="password" name="password" :value="$user->password" required/>
</div><br>

<div class="row">
    <!--Confirm Password-->
    <x-form.input lable="{{ __('Confirm Password') }}" type="password" name="password_confirmation" :value="$user->password" required/>
</div><br>
