jQuery(document).ready(function() {

    (function($) {
        "use strict";

        // validate contactForm form
        $(function() {
            $('#contactForm').validate({
                rules: {
                    contact_fname: {
                        required: true,
                        minlength: 2
                    },
                    contact_lname: {
                        required: true,
                        minlength: 2
                    },
                    contact_femail: {
                        required: true,
                        email: true
                    },
                    contact_fmsg: {
                        required: true,
                        minlength: 10
                    },
                    contact_fsc_hidden: {
                        required: true
                    },
                    contact_fsc: {
                        required: true,
                        equalTo: "#contact_fsc_hidden"
                    }
                },
                messages: {
                    contact_fname: {
                        required: "Please enter your name",
                        minlength: "your name must consist of at least 2 characters"
                    },
                    contact_lname: {
                        required: "Please enter your last name",
                        minlength: "your name must consist of at least 2 characters"
                    },
                    contact_femail: {
                        required: "You need to enter your email address"
                    },
                    contact_fmsg: {
                        required: "We will be glad to have more details",
                        minlength: "Please add more details"
                    }
                },
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "assets/php/contact.php",
                        success: function() {
                            $('#contactForm :input').attr('disabled', 'disabled');
                            $('#contactForm').fadeTo("slow", 0.15, function() {
                                $(this).find(':input').attr('disabled', 'disabled');
                                $(this).find('label').css('cursor', 'default');
                                $('#success').fadeIn();
                            })
                        },
                        error: function() {
                            $('#contactForm').fadeTo("slow", 0.15, function() {
                                $('#error').fadeIn();
                            })
                        }
                    })
                }
            })
        })

    })(jQuery)
});