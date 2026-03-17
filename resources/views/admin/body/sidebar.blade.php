 <div class="app-sidebar-menu">
     <div class="h-100" data-simplebar>

         <!--- Sidemenu -->
         <div id="sidebar-menu">

             <div class="logo-box">
                 <a href="index.html" class="logo logo-light">
                     <span class="logo-sm">
                         <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                     </span>
                     <span class="logo-lg">
                         <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="24">
                     </span>
                 </a>
                 <a href="{{ asset('dashboard') }}" class="logo logo-dark">
                     <span class="logo-sm">
                         <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                     </span>
                     <span class="logo-lg">
                         <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="24">
                     </span>
                 </a>
             </div>

             <ul id="side-menu">

                 <li class="menu-title">Menu</li>

                 <li>
                     <a href="{{ asset('dashboard') }}" class="tp-link">
                         <i data-feather="home"></i>
                         <span> Dashboard </span>
                     </a>
                 </li>

                 <li class="menu-title">Pages</li>

                 <li>
                     <a href="#sidebarExpages" data-bs-toggle="collapse">
                         <i data-feather="file-text"></i>
                         <span> Utility </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="sidebarExpages">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="pages-starter.html" class="tp-link">Starter</a>
                             </li>
                             <li>
                                 <a href="pages-profile.html" class="tp-link">Profile</a>
                             </li>

                         </ul>
                     </div>
                 </li>

                 <li class="menu-title mt-2">General</li>

                 <li>
                     <a href="#sidebarBaseui" data-bs-toggle="collapse">
                         <i data-feather="package"></i>
                         <span> Components </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse" id="sidebarBaseui">
                         <ul class="nav-second-level">
                             <li>
                                 <a href="ui-accordions.html" class="tp-link">Accordions</a>
                             </li>
                             <li>
                                 <a href="ui-alerts.html" class="tp-link">Alerts</a>
                             </li>
                             <li>
                                 <a href="ui-badges.html" class="tp-link">Badges</a>
                             </li>

                         </ul>
                     </div>
                 </li>

                 <li>
                     <a href="widgets.html" class="tp-link">
                         <i data-feather="aperture"></i>
                         <span> Widgets </span>
                     </a>
                 </li>

                 <li>
                     <a href="#sidebarAdvancedUI" data-bs-toggle="collapse">
                         <i data-feather="cpu"></i>
                         <span> Extended UI </span>
                         <span class="menu-arrow"></span>
                     </a>
                 </li>
             </ul>
         </div>
         <!-- End Sidebar -->
         <div class="clearfix"></div>
     </div>
 </div>
