<script>
$(document).ready(function() {
    $('#news-content-master-new').summernote({
        height: 200,
        onfocus:function(e){
            $('body').addClass('overlay-disabled')
        },
        onblur:function(e){
            $('body').removeClass('overlay-disabled')
        }
    })
    const myDropzone = $('div#news-content-master-upload-banner').dropzone({
        url: window.apiUrl+'/upload/excel',
        uploadMultiple: false,
        maxFiles: 1,
        headers: {
            'Authorization': window.axios.defaults.headers['Authorization']
        },
        init: function() {
            this.on('addedfile', function() {
            })
            this.on('success', function(file, response) {
            })
        }
    })
})
</script>
