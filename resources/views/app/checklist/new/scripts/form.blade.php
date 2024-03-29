<script>
$(document).ready(function() {
    const form = document.getElementById('newUserForm')
    const newUserForm = $('#newUserForm').formValidation({
        fields: {
            // name: {
            //     validators: {
            //         notEmpty: {
            //             message: 'The user name is required'
            //         },
            //         stringLength: {
            //             min: 3,
            //             max: 191,
            //             message: 'The user name must be more than 3 and less than 131 characters long',
            //         }
            //     }
            // },
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
            // email: {
            //     validators: {
            //         notEmpty: {
            //             message: 'The email is required'
            //         },
            //         emailAddress: {
            //             message: 'The email is not a valid email address'
            //         }
            //     }
            // },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The password must have at least 6 characters',
                    },
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
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
        newUserForm.revalidateField('confirmPassword')
    })

    $('.saveAction').click(function() {
        const { urlNext, isRecreate } = $(this).data()
        newUserForm.validate().then(function(status) {
            if (status === 'Valid') {
                const name = $('input[name="name"]')
                const username = $('input[name="username"]')
                const email = $('input[name="email"]')
                const password = $('input[name="password"]')
                const position = $('select[name="position"]')
                const gender = $('select[name="gender"]')

                axios.post('/user', {
                    name: name.val(),
                    username: username.val(),
                    email: email.val(),
                    password: password.val(),
                    position_id: position.val(),
                    gender: gender.val()
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
