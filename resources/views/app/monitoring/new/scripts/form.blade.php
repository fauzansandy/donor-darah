<script>
$(document).ready(function() {
    const form = document.getElementById('newMonitoringForm')
    const newUserForm = $('#newMonitoringForm').formValidation({
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Nama Wajib'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore',
                    }
                }
            },
            no_rm: {
                validators: {
                    notEmpty: {
                        message: 'No Rekam Medis Wajib'
                    }
                }
            },
            transfusion: {
                validators: {
                    notEmpty: {
                        message: 'Type Transfusi wajib diisi'
                    }
                }
            }
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap(),
            submitButton: new FormValidation.plugins.SubmitButton(),
            icon: new FormValidation.plugins.Icon({
                valid: 'fa fa-check',
                invalid: 'fa fa-times',
                validating: 'fa fa-refresh',
            })
        }
    }).data('formValidation')

    $('.saveAction').click(function() {
        const { urlNext, isRecreate } = $(this).data()
        newUserForm.validate().then(function(status) {
            if (status === 'Valid') {
                const name = $('input[name="name"]')
                const no_rm = $('input[name="no_rm"]')
                const transfusion = $('select[name="transfusion"]')

                axios.post('/patient', {
                    name: name.val(),
                    no_rm: no_rm.val(),
                    transfusion_id: transfusion.val()
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
            }
        })
    })

})
</script>
