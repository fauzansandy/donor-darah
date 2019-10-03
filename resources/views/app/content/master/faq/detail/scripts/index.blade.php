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
})
</script>
