<script>
$(document).ready(function() {
    const myDropzone = $('div#term-co-content-master-upload-pdf').dropzone({
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
