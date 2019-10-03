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
          <li class="@yield('userManagementMenuClass')">
              <a href="javascript:;">
                  <span class="titleac">User Management</span>
              </a>
              <span class="icon-thumbnail"><i class="fas fa-chevron-right"></i></span>
              <ul class="sub-menu">
                  <li class="@yield('userManagementUserCMSMenuClass')">
                      <a href="{!! url('/user'); !!}">User CMS</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
                  <li class="@yield('userManagementRoleUserMenuClass')">
                      <a href="{!! url('/position'); !!}">Role User</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
              </ul>
          </li>
          <li class="@yield('dealerManagementMenuClass')">
              <a href="javascript:;">
                  <span class="title">Dealer Management</span>
              </a>
              <span class="icon-thumbnail"><i class="fas fa-chevron-right"></i></span>
              <ul class="sub-menu">
                  <li class="@yield('dealerManagementUserDealerMenuClass')">
                      <a href="{!! url('/dealer/user'); !!}">User Dealer</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
                  <li class="@yield('dealerManagementVerificationRequestMenuClass')">
                      <a href="{!! url('/dealer/verification/request'); !!}">Verification Request</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
              </ul>
          </li>
          <li class="@yield('ringkasanPengajuanMenuClass')">
              <a href="javascript:;">
                  <span class="title">Ringkasan Pengajuan</span>
              </a>
              <span class="icon-thumbnail"><i class="fas fa-chevron-right"></i></span>
              <ul class="sub-menu">
                  <li class="@yield('ringkasanPengajuanVerifyMenuClass')">
                      <a href="{!! url('/application/verified'); !!}">Verify</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
                  <li class="@yield('ringkasanPengajuanNotVerifyMenuClass')">
                      <a href="{!! url('/application/notverified'); !!}">Not verify</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
              </ul>
          </li>
          <li class="@yield('rewardDealerMenuClass')">
              <a href="javascript:;">
                  <span class="title">Reward Dealer</span>
              </a>
              <span class="icon-thumbnail"><i class="fas fa-chevron-right"></i></span>
              <ul class="sub-menu">
                  <li class="@yield('rewardDealerCashRewardMenuClass')">
                      <a href="{!! url('/reward/dealer'); !!}">Cash reward ,  total unit valid & level dealer</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
              </ul>
          </li>
          <li class="@yield('contentManagementMenuClass')">
              <a href="javascript:;">
                  <span class="title">Content Management</span>
              </a>
              <span class="icon-thumbnail"><i class="fas fa-chevron-right"></i></span>
              <ul class="sub-menu">
                    <li class="@yield('contentManagementMasterContentMenuClass')">
                      <a href="javascript:;">
                          <span class="title">Master Content</span>
                          <span class="arrow"></span>
                      </a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                      <ul class="@yield('contentManagementMasterContentTreeMenuClass', 'sub-menu')">
                          <li class="@yield('contentManagementMasterContentContactMenuClass')">
                              <a href="{!! url('/content/master/contact'); !!}">Contact Us</a>
                              <span class="icon-thumbnail">CU</span>
                          </li>
                          <li class="@yield('contentManagementMasterContentTermCoMenuClass')">
                              <a href="{!! url('/content/master/termco'); !!}">Term & Conditions</a>
                              <span class="icon-thumbnail">TC</span>
                          </li>
                          <li class="@yield('contentManagementMasterContentFAQMenuClass')">
                              <a href="{!! url('/content/master/faq'); !!}">Resolution Center (FAQ)</a>
                              <span class="icon-thumbnail">FAQ</span>
                          </li>
                          <li>
                              <a href="{!! url('/content/master/provision'); !!}">Term Period</a>
                              <span class="icon-thumbnail">TP</span>
                          </li>
                          <li>
                              <a href="{!! url('/content/master/cash-rewards'); !!}">Cash Rewards</a>
                              <span class="icon-thumbnail">CR</span>
                          </li>
                          <li>
                              <a href="{!! url('/content/master/info'); !!}">Info</a>
                              <span class="icon-thumbnail">IN</span>
                          </li>
                      </ul>
                    </li>
                  <li class="@yield('contentManagementFeedbackMenuClass')">
                      <a href="javascript:;">
                          <span class="title">Feedback</span>
                          <span class="arrow"></span>
                      </a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                      <ul class="sub-menu">
                          <li class="@yield('contentManagementFeedbackKritikMenuClass')">
                              <a href="{!! url('/content/feedback/critics'); !!}">Kritik</a>
                              <span class="icon-thumbnail">Kr</span>
                          </li>
                          <li class="@yield('contentManagementFeedbackSaranMenuClass')">
                              <a href="{!! url('/content/feedback/suggestion'); !!}">Saran</a>
                              <span class="icon-thumbnail">Sa</span>
                          </li>
                      </ul>
                  </li>
                  <li class="@yield('contentManagementPushNotificationMenuClass')">
                      <a href="{!! url('/content/pushnotification'); !!}">Push notifikasi</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
                  </li>
                  <li class="@yield('contentManagementNewsMenuClass')">
                      <a href="{!! url('/content/news'); !!}">Berita</a>
                      <span class="icon-thumbnail"><i class="fas fa-bezier-curve"></i></span>
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
