<aside class="main-sidebar elevation-4  sidebar-dark-primary">
   <div class="row">
      <a href="{{url('/')}}" target="_blank" class="brand-link">
      @php
         $settings = DB::table('settings')->first();
      @endphp
      <img src="{{url('public/'.$settings->logo)}}" alt="Logo" class="brand-image" style="box-shadow: none;border-radius: 0;padding:10px">
      </a>
   </div>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 mb-3 ">
         <div class="image">
         </div>
         <h3 class="info" style="font-size:20px">
            <a href="#" class="">
            {{strtoupper(config('app.name'))}}
            </a>
         </h3>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
               <button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button>
            </div>
         </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
               <a href="{{url('superadmin/')}}" class="nav-link <?php if(Request::segment(1)=="superadmin"){ echo 'active'; } ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link <?php if(Request::segment(2)=="brand"){ echo 'active'; } ?>">
                  <i class="nav-icon fas fa-print"></i>
                  <p>Brands<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" <?php if(Request::segment(2)=="service"){ echo 'style="display:block;"'; } ?>>
                  <li class="nav-item">
                     <a href="{{url('/admin/brand')}}" class="nav-link  <?php if(Request::segment(2)=="brand" &&  Request::segment(3)==""){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Brands List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('admin/brand/create')}}" class="nav-link  <?php if(Request::segment(2)=="brand" &&  Request::segment(3)=="create"){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Brands</p>
                     </a>
                  </li>
                  
               </ul>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link <?php if(Request::segment(2)=="brand"){ echo 'active'; } ?>">
                  <i class="nav-icon fas fa-print"></i>
                  <p>Brands Issues<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" <?php if(Request::segment(2)=="service"){ echo 'style="display:block;"'; } ?>>
                  <li class="nav-item">
                     <a href="{{url('/admin/brand/issues')}}" class="nav-link  <?php if(Request::segment(2)=="brand" &&  Request::segment(3)=="issues"){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Brands Issues List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('admin/brand/issuecreate')}}" class="nav-link  <?php if(Request::segment(2)=="brand" &&  Request::segment(3)=="issuecreate"){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Brands Issues</p>
                     </a>
                  </li>
                  
               </ul>
            </li>
             <li class="nav-item">
               <a href="#" class="nav-link <?php if(Request::segment(2)=="printer"){ echo 'active'; } ?>">
                  <i class="nav-icon fas fa-blog"></i>
                  <p>Printers<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" <?php if(Request::segment(2)=="printer"){ echo 'style="display:block;"'; } ?>>
                  <li class="nav-item">
                     <a href="{{url('/admin/printer')}}" class="nav-link  <?php if(Request::segment(2)=="printer" &&  Request::segment(3)==""){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Printers List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('admin/printer/create')}}" class="nav-link  <?php if(Request::segment(2)=="printer" &&  Request::segment(3)=="create"){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Printers</p>
                     </a>
                  </li>
                  
               </ul>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link <?php if(Request::segment(2)=="blog"){ echo 'active'; } ?>">
                  <i class="nav-icon fas fa-blog"></i>
                  <p>Blog<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" <?php if(Request::segment(2)=="service"){ echo 'style="display:block;"'; } ?>>
                  <li class="nav-item">
                     <a href="{{url('/admin/blog')}}" class="nav-link  <?php if(Request::segment(2)=="blog" &&  Request::segment(3)==""){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Blog List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('admin/blog/create')}}" class="nav-link  <?php if(Request::segment(2)=="blog" &&  Request::segment(3)=="create"){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Blog</p>
                     </a>
                  </li>
                  
               </ul>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link <?php if(Request::segment(2)=="testimonials"){ echo 'active'; } ?>">
                  <i class="nav-icon fas fa-comments"></i>
                  <p>Testimonials<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" <?php if(Request::segment(2)=="testimonials"){ echo 'style="display:block;"'; } ?>>
                  <li class="nav-item">
                     <a href="{{url('/admin/testimonials')}}" class="nav-link  <?php if(Request::segment(2)=="testimonials" &&  Request::segment(3)==""){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Testimonials List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('admin/testimonials/create')}}" class="nav-link  <?php if(Request::segment(2)=="testimonials" &&  Request::segment(3)=="create"){ echo 'active'; } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Testimonials</p>
                     </a>
                  </li>
                  
               </ul>
            </li>
          

            <li class="nav-item">
               <a href="#" class="nav-link <?php if(Request::segment(2)=="settings"){ echo 'active'; } ?>">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>Web Settings<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" <?php if(Request::segment(2)=="newsletter"){ echo 'style="display:block;"'; } ?>>
                  <li class="nav-item">
                     <a href="{{url('admin/settings')}}" class="nav-link <?php if(Request::segment(2)=="settings" &&  Request::segment(3)=="") { echo 'active'; } ?> ">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Settings</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('admin/sociallinks')}}" class="nav-link <?php if(Request::segment(2)=="settings" &&  Request::segment(3)=="sociallinks") { echo 'active'; } ?> ">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Social Links</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="{{url('admin/header')}}" class="nav-link">
                  <i class="nav-icon fas fa-code"></i>
                  <p>Head Section</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{url('logout')}}" class="nav-link text-danger">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>