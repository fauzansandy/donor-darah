<script>
$(document).ready(function() {
    $('input[name=myInput]').keyup(debounce(function(){
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
