<x-admin-auth-layout title="Login">
 <!-- /Logo -->
 <h4 class="mb-2">Welcome to {{ config('app.name') }}! 👋</h4>

 <x-auth-session-status class="mb-4" :status="session('status')" />

 <form method="POST" action="{{ route('admin.login') }}">
     @csrf
     <div class="mb-3">
         <label for="email" class="form-label">Email</label>
         <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
             placeholder="Enter your email" autofocus />
         @error('email')
             <small class="text-danger">{{ $message }}</small>
         @enderror
     </div>
     <div class="mb-3 form-password-toggle">
         <div class="d-flex justify-content-between">
             <label class="form-label" for="password">Password</label>

             @if (Route::has('password.request'))
                 <a href="{{ route('password.request') }}">
                     <small>Forgot Password?</small>
                 </a>
             @endif
         </div>
         <div class="input-group input-group-merge">
             <input type="password" id="password" class="form-control" name="password"
                 placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                 aria-describedby="password" />
             <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
         </div>
     </div>

     <div class="mb-3">
         <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
     </div>
 </form>


 </div>
 </div>

</x-admin-auth-layout>
