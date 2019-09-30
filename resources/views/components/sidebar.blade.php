<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
  <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
  <div class="sidebar-overlay-slide from-top" id="appMenu">
      <div class="row">
          <div class="col-xs-6 no-padding">
              <a href="#" class="p-l-40"><img src="/assets/img/demo/social_app.svg" alt="socail"></a>
          </div>
          <div class="col-xs-6 no-padding">
              <a href="#" class="p-l-10"><img src="/assets/img/demo/email_app.svg" alt="socail"></a>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
              <a href="#" class="p-l-40"><img src="/assets/img/demo/calendar_app.svg" alt="socail"></a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
              <a href="#" class="p-l-10"><img src="/assets/img/demo/add_more.svg" alt="socail"></a>
          </div>
      </div>
  </div>
  <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
  <!-- BEGIN SIDEBAR MENU HEADER-->
  <div class="sidebar-header">
      <img src="/assets/img/logo_white.png" alt="logo" class="brand" data-src="/assets/img/logo_white.png" data-src-retina="/assets/img/logo_white_2x.png" width="78" height="22">
      <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
      </div>
  </div>
  <!-- END SIDEBAR MENU HEADER-->
  <!-- START SIDEBAR MENU -->
  <div class="sidebar-menu">
      <!-- BEGIN SIDEBAR MENU ITEMS-->
      <ul class="menu-items">
          <li class="m-t-30 ">
              <a href="{!! url('/'); !!}" class="detailed">
                  <span class="title">Dashboard</span>
                  <span class="details">12 New Updates</span>
              </a>
              <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
          </li>
          <li>
              <a href="{!! url('/user'); !!}" class="detailed">
                  <span class="title">Users</span>
                  <span class="details">list of users</span>
              </a>
              <span class="icon-thumbnail"><i class="fas fa-users"></i></span>
          </li>
          <li>
              <a href="javascript:;">
                  <span class="title">WhatsApp</span>
                  <span class="arrow"></span>
              </a>
              <span class="icon-thumbnail"><i class="fab fa-whatsapp"></i></span>
              <ul class="sub-menu">
                  <li class="">
                      <a href="{!! url('/blast/whatsapp/source'); !!}">Source</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
                  <li class="">
                      <a href="{!! url('/blast/whatsapp/category'); !!}">Category</a>
                      <span class="icon-thumbnail"><i class="fas fa-list-ol"></i></span>
                  </li>
                  <li class="">
                      <a href="{!! url('/blast/whatsapp/phone_number'); !!}">Phone Number</a>
                      <span class="icon-thumbnail"><i class="fas fa-mobile"></i></span>
                  </li>
                  <li class="">
                      <a href="{!! url('/blast/whatsapp/import'); !!}">Import</a>
                      <span class="icon-thumbnail"><i class="fas fa-upload"></i></span>
                  </li>
                  <li class="">
                      <a href="{!! url('/blast/whatsapp/assign'); !!}">Assign</a>
                      <span class="icon-thumbnail"><i class="fas fa-file-signature"></i></span>
                  </li>
                  <li class="">
                      <a href="{!! url('/blast/whatsapp/reply'); !!}">Replies</a>
                      <span class="icon-thumbnail"><i class="fas fa-comment-dots"></i></span>
                  </li>
                  <li class="">
                      <a href="{!! url('/blast/whatsapp/user_phone_number'); !!}">User Phone Number</a>
                      <span class="icon-thumbnail"><i class="fas fa-mobile"></i></span>
                  </li>
                  <li class="">
                      <a href="{!! url('/blast/whatsapp/user_notes_phone_number'); !!}">User Notes Phone Number</a>
                      <span class="icon-thumbnail"><i class="fas fa-mobile"></i></span>
                  </li>
              </ul>
          </li>
          <li class="">
              <a href="{!! url('/logout'); !!}" class="detailed">
                  <span class="title">Logout</span>
                  <span class="details">Exit from the app</span>
              </a>
              <span class="icon-thumbnail"><i class="fas fa-sign-out-alt"></i></span>
          </li>
      </ul>
      <div class="clearfix"></div>
  </div>
  <!-- END SIDEBAR MENU -->
</nav>
<!-- END SIDEBAR -->
