<script>
$(document).ready(function() {
    $('#news-content-master-detail').summernote({
        height: 200,
        onfocus:function(e){
            $('body').addClass('overlay-disabled')
        },
        onblur:function(e){
            $('body').removeClass('overlay-disabled')
        }
    })
})
</script>
