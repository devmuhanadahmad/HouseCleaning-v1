
 <!-- Navbar -->

 <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
 id="layout-navbar">
 <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
     <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
         <i class="bx bx-menu bx-sm"></i>
     </a>
 </div>

 <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
     <!-- Search -->
     <div class="navbar-nav align-items-center">
         <div class="nav-item d-flex align-items-center">
             <i class="bx bx-search fs-4 lh-0"></i>
             <input type="text" class="form-control border-0 shadow-none"
                 placeholder="Search..." aria-label="Search..." />
         </div>
     </div>
     <!-- /Search -->

     <ul class="navbar-nav flex-row align-items-center ms-auto">


         <!-- User -->
         <li class="nav-item navbar-dropdown dropdown-user dropdown">
             <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                 data-bs-toggle="dropdown">
                 <div class="avatar avatar-online">
                   @if(Auth::guard('admin')->user()->profile->image)
                    <img src="{{ asset('storage/' . Auth::guard('admin')->user()->profile->image) }}"  alt
                    class=" h-auto rounded-circle" style="width: 40px; height:40px;" />
                   @else
                    <img src="{{asset("../dashboard/assets/img/avatars/1.png")}}" alt
                    class="w-px-40 h-auto rounded-circle" />
                   @endif
                 </div>
             </a>
             <ul class="dropdown-menu dropdown-menu-end">
                 <li>
                     <a class="dropdown-item" href="#">
                         <div class="d-flex">
                             <div class="flex-shrink-0 me-3">
                                 <div class="avatar avatar-online">
                                    @if(Auth::guard('admin')->user()->profile->image)
                                    <img src="{{ asset('storage/' . Auth::guard('admin')->user()->profile->image) }}"  alt
                                    class=" h-auto rounded-circle" style="width: 40px; height:40px;" />
                                   @else
                                    <img src="{{asset("../dashboard/assets/img/avatars/1.png")}}" alt
                                    class="w-px-40 h-auto rounded-circle" />
                                   @endif
                                 </div>
                             </div>
                             @auth('admin')
                             <div class="flex-grow-1">
                                 <span class="fw-semibold d-block">{{ Auth::guard('admin')->user()->name }}</span>
                                     <small class="text-muted">Admin</small>
                             </div>
                            @else
                             <div class="flex-grow-1">
                                 <span class="fw-semibold d-block">Guest</span>
                                 <small class="text-muted">Guest</small>
                             </div>
                          @endauth
                         </div>
                     </a>
                 </li>
                 <li>
                     <div class="dropdown-divider"></div>
                 </li>
                 <li>
                     <a class="dropdown-item" href="{{route('dashboard.profile.edit')}}">
                         <i class="bx bx-user me-2"></i>
                         <span class="align-middle">My Profile</span>
                     </a>
                 </li>
                 <li>
                     <a class="dropdown-item" href="{{route("dashboard.password.edit")}}">
                         <i class="bx bx-cog me-2"></i>
                         <span class="align-middle">Change Password</span>
                     </a>
                 </li>

                 <li>
                     <div class="dropdown-divider"></div>
                 </li>
                 <li>
                    @auth('admin')

                            <form action="{{ route('admin.logout') }}" id="logout" method="post"
                                style="display:none">
                                @csrf
                            </form>

                            <a class="dropdown-item" h
                                onclick="event.preventDefault(); document.getElementById('logout').submit()"
                                href="{{ route('admin.logout') }}">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>

                    @endauth
                </li>
             </ul>
         </li>
         <!--/ User -->
     </ul>
 </div>
</nav>

<!-- / Navbar -->
