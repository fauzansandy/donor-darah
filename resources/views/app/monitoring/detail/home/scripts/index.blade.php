<script>
$(document).ready(function() {
    $('input[name=b30m_td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
        //done
    },500));

    $('input[name=b30m_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=b30m_suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=b30m_respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=b30m_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=b30m_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=b30m_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=b30m_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=b30m_tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            b30m_tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a15m_tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a15m_tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a1h_tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a1h_tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a2h_tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a2h_tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a3h_tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a3h_tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_tgl_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_tgl_pemberian: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_jam_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_jam_pemberian: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=a4h_tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            a4h_tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_tgl_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_tgl_pemberian: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_jam_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_jam_pemberian: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=d_tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            d_tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_tgl_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_tgl_pemberian: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_jam_pemberian]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_jam_pemberian: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_td]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_td: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_nadi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_nadi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_suhu]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_suhu: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_respirasi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_respirasi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_jml_cairan_masuk]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_jml_cairan_masuk: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_jml_cairan_keluar]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_jml_cairan_keluar: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_tidak_ada_reaksi]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_tidak_ada_reaksi: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=pt4_tanda_tangan]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            pt4_tanda_tangan: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=dokter]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            dokter: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=diagnosis]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            diagnosis: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=ruang]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            ruang: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=colf]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            colf: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    },500));

    $('input[name=no_batch]').keyup(debounce(function(){
        var $this=$(this);
        var id = $('input[name=transfusion_id]').val();
        axios.put('/patient_transfusions/'+id, {
            no_batch: $this.val()
        }).then((response) => {
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
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
