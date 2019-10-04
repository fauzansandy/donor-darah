<script>
$(document).ready(function() {
    $('#faq-content-master-edit').summernote({
        height: 200,
        onfocus:function(e){
            $('body').addClass('overlay-disabled')
        },
        onblur:function(e){
            $('body').removeClass('overlay-disabled')
        }
    })
    const myDropzone = $('div#faq-content-master-upload-photo').dropzone({
        url: window.apiUrl+'/upload/photo',
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
