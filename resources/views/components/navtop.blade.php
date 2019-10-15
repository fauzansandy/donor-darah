<div class="page-container">
    <!-- START HEADER -->
    <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
            <div class="brand inline  m-l-10 ">
                <img src="/assets/img/logo.png" alt="logo" data-src="/assets/img/logo.png" data-src-retina="/assets/img/logo_2x.png" width="150" height="50">
            </div>
        </div>
        <div id="refresh">
          <div id="time">
            <?php echo date('H:i:s');?>
          </div>
        </div>
        <div class="d-flex align-items-center">
            <!-- START User Info-->
            <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                <span class="semi-bold">{{ MyAccount()->name }}</span>
            </div>
            <div class="dropdown pull-right d-lg-block d-none">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="thumbnail-wrapper d32 circular inline">
                        <img src="/assets/img/profiles/avatar.jpg" alt="" data-src="/assets/img/profiles/avatar.jpg" data-src-retina="/assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                    <a href="{!! url('/logout'); !!}" class="clearfix bg-master-lighter dropdown-item">
                        <span class="pull-left">Logout</span>
                        <span class="pull-right"><i class="pg-power"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper">
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>

<script type="text/javascript">
setInterval("my_function();",100);
function my_function(){
    $('#refresh').load(location.href + ' #time');
}
</script>
