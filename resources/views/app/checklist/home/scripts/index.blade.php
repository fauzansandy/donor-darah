<script>

$('#modalDelete').on('show.bs.modal', function(e) {
    const { recordId, recordName } = $(e.relatedTarget).data()
    $('#deleteAction').click(function() {
        axios.delete('/user/'+recordId).then((response) => {
            const { data } = response.data
            $('#modalDelete').modal('hide')
            window.location.reload()
        }).catch((error) => {
            if (Boolean(error) && Boolean(error.response) && Boolean(error.response.data) && Boolean(error.response.data.exception) && Boolean(error.response.data.exception.message)) {
                Swal.fire({ title: 'Opps!', text: error.response.data.exception.message, type: 'error', confirmButtonText: 'Ok' })
            }
        })
    })
})

// filter
$('#filterAction').click(function() {
    const filter_search = $('input[name="filter_search"]').val()
    const query = {}
    if (filter_search) {
        query.filter_search = filter_search
    }
    const href = '{{ url('/user') }}'
    const queryString = Qs.stringify(query)
    if (queryString) {
        window.location = href + '?' + queryString
    } else {
        window.location = href
    }
    console.log(queryString);
})

// show entries
// var selected = localStorage.getItem('selected');
//     if (selected) {
//         $("#filterEntries").val(selected);
//         localStorage.removeItem('selected')
// }
// $('#filterEntries').change(function(e) {
//     const filter_entries = $(this).val();
//     console.log(filter_entries);
//     const query = {}
//     if (filter_entries) {
//         query.filter_entries = filter_entries
//     }
//     const href = '{{ url('/user') }}'
//     const queryString = Qs.stringify(query)
//     if (queryString) {
//         localStorage.setItem('selected', $(this).val());
//         window.location = href + '?' + queryString
//     } else {
//         window.location = href
//     }
//     console.log(queryString);
//     })
</script>
