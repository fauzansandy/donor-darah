<script>
$(document).ready(function() {
    const form = document.getElementById('editUserForm')
    const editUserForm = $('#editUserForm').formValidation({
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 191,
                        message: 'The username must be more than 3 and less than 131 characters long',
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore',
                    }
                }
            },
            password: {
                validators: {
                    stringLength: {
                        min: 6,
                        message: 'The password must have at least 6 characters',
                    }
                }
            },
            confirmPassword: {
                validators: {
                    identical: {
                        compare: function() {
                            return form.querySelector('input[name="password"]').value
                        },
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            position: {
                validators: {
                    notEmpty: {
                        message: 'The position name is required'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender name is required'
                    }
                }
            },
            category:{
                validators: {
                    notEmpty: {
                        message: 'The category name is required'
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

    form.querySelector('input[name="password"]').addEventListener('input', function() {
        editUserForm.revalidateField('confirmPassword')
    })

    $('#saveAction').click(function() {
        editUserForm.validate().then(function(status) {
            if (status === 'Valid') {
                const username = $('input[name="username"]')
                const password = $('input[name="password"]')
                const position = $('select[name="position"]')
                const gender = $('select[name="gender"]')
                const category = $('select[name="category"]')
                const status = $('select[name="status"]')

                const data = {
                    username: username.val(),
                    position_id: position.val(),
                    gender: gender.val(),
                    category_id: category.val().toString(),
                    status: status.val()
                }
                if (password.val()) {
                    data.password = password.val()
                }
                axios.put('/user/{{$data['id']}}', data).then((response) => {
                    const { data } = response.data
                    window.location = '{{ UrlPrevious(url('/user')) }}'
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
