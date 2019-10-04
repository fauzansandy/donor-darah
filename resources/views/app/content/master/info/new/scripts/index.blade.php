<script>
$(document).ready(function() {
    $('#faq-content-master-new').summernote({
        height: 200,
        onfocus:function(e){
            $('body').addClass('overlay-disabled')
        },
        onblur:function(e){
            $('body').removeClass('overlay-disabled')
        }
    })
    const myDropzone = $('div#info-content-master-upload-photo, div#info-content-master-upload-thumbnail').dropzone({
        url: window.apiUrl+'/upload/pdf',
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
