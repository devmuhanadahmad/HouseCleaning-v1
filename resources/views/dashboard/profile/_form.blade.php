<div class="row">
    <x-form.input lable="{{ __('First Name') }}" type="text" name="first_name" :value="$user->profile->first_name" />
    <x-form.input lable="{{ __('Last Name') }}" type="text" name="last_name" :value="$user->profile->last_name" />
</div><br>

<div class="row">
    <x-form.input lable="{{ __('E-mail') }}" type="email" name="email" :value="$user->email" />
    <x-form.status lable="Gender" name="gender" :value="$user->profile->gender" :option="['male' => 'Male', 'female' => 'Female']" />
</div><br>

<div class="row">
    <x-form.input lable="{{ __('Phone') }}" type="text" name="phone" :value="$user->profile->phone" />
    <x-form.input lable="{{ __('Address') }}" type="text" name="address" :value="$user->profile->address" />
</div><br>
<div class="row">
    <x-form.input lable="{{ __('Image') }}" type="file" name="image" :value="$user->profile->image" accept="image/png, image/jpeg" />
</div><br>
