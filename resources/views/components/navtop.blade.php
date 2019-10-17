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
            <div style="width: 100%; background-color: #cc4949; color: white; text-align: center;" >
                <h3 class="alert-text" style="color: white"></h3>
            </div>
            @yield('content')
        </div>
    </div>
</div>

<script type="text/javascript">
setInterval("my_function();",1000);
function my_function(){
    axios.get('/notification/is_read/n/time_notification/1').then((response) => {
        var alldata = ''
        for (var i = 0; i < response.data.data.records.length; i++) {
            alldata += '<br>'
            alldata += '<button type="button" onclick="deleteNotif('+response.data.data.records[i].id+')">Hapus</button>'+response.data.data.records[i].name
        }

        $('.alert-text').html(alldata);
    }).catch((error) => {
        if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
            Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
        }
    })
    $('#refresh').load(location.href + ' #time');
}
function deleteNotif(a){
    const data = {
        is_read: '1'
    }
    axios.put('/notification/'+a, data).then((response) => {
        my_function()
    }).catch((error) => {
        if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
            Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
        }
    })
}
</script>
