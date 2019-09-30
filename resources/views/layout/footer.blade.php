    <!-- BEGIN VENDOR JS -->
    <script src="/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/assets/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/classie/classie.js" type="text/javascript"></script>
    <script src="/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    <script src="/assets/plugins/mapplic/js/hammer.min.js"></script>
    <script src="/assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    <script src="/assets/plugins/mapplic/js/mapplic.js"></script>
    <script src="/assets/plugins/rickshaw/rickshaw.min.js"></script>
    <script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/skycons/skycons.js" type="text/javascript"></script>
    <script src="/assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
    <script src="/assets/plugins/axios/dist/axios.min.js"></script>
    <script src="/assets/plugins/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="/assets/plugins/formvalidation/dist/js/plugins/J.min.js"></script>
    <script src="/assets/plugins/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>
    <script src="/assets/plugins/formvalidation/dist/js/plugins/Tachyons.min.js"></script>
    <script src="/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qs/6.8.0/qs.min.js" type="text/javascript"></script>
    <script src="/assets/js/pusher.min.js"></script>

    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/pages/js/pages.js"></script>
    {{-- <script src="/pages/js/pages.email.js"></script> --}}
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="/assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script>
        Dropzone.autoDiscover = false;
        window.getCookie = function(cname) {
            var name = cname + '='
            var decodedCookie = decodeURIComponent(document.cookie)
            var ca = decodedCookie.split(';')
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i]
                while (c.charAt(0) == ' ') {
                    c = c.substring(1)
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length)
                }
            }
            return ''
        }
        window.appUrl = `${window.location.protocol}//${window.location.host}`
        window.apiUrl = `${window.location.protocol}//satellite.${window.location.host}`
        window.axios = axios.create({
            baseURL: window.apiUrl,
            timeout: 600000,
            headers: {}
        })
        @if(config('app.debug'))Pusher.logToConsole = true;@endif

        const pusher = new Pusher('{{ App\Support\Realtime\Realtime::GetPusherKey() }}', {
            cluster: 'ap1',
            forceTLS: true
        })
        window.pusher

        if (getCookie('TokenType') != "" && getCookie('AccessToken')) {
            window.axios.defaults.headers['Authorization'] = `${getCookie('TokenType')} ${getCookie('AccessToken')}`
        }
        $(document).ready(function() {
            $.fn.datepicker.defaults.format = 'yyyy-mm-dd'
        })
    </script>
    @yield('script')
    @yield('formValidationScript')
    <!-- END PAGE LEVEL JS -->
</body>
</html>
