<script>
$(document).ready(function() {
    $('input[name=b30m_td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        axios.put('/patient_transfusions/', {
            name: name.val(),
            b30m_td: no_rm.val(),
            transfusion_id: transfusion.val(),
            transfusion_date: transfusion_date.val(),
            transfusion_time: transfusion_time.val()
        }).then((response) => {
            const { data } = response.data
            if (!isRecreate) {
                window.location = urlNext
            } else {
                window.location.reload()
            }
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
        //done
    },500));

    $('input[name=b30m_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=b30m_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=b30m_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=b30m_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=b30m_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=b30m_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=b30m_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a15m_td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a15m_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a15m_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a15m_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a15m_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a15m_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a15m_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a15m_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a1h_td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a1h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a1h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a1h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a1h_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a1h_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a1h_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a1h_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a2h_td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a2h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a2h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a2h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a2h_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a2h_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a2h_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a2h_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a3h_td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a3h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a3h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a3h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a3h_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a3h_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a3h_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a3h_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_tgl_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_jam_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=a4h_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_tgl_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_jam_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=d_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_tgl_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_jam_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_td]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    $('input[name=pt4_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var n1 = $this.val();
        alert(n1);
        //done
    },500));

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };
})
</script>
