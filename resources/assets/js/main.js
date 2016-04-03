(function ($) {
    $(function () {

        // INITIALIZE


        $(document).ready(function () {
            $('.book-image').materialbox();
        });


        $(document).ready(function () {
            $('.materialboxed').materialbox();
        });



        $('.dropdown-button').dropdown();


        $("#progress").hide();
        //show when loading database info before show info-modal

        $("#date-picker").hide();

        $("#sort-order").hide();

        $("#sort-button").hide();

        $('.button-collapse').sideNav();


        $('.modal-trigger').leanModal({
            dismissible: false
        });

        $('.modal-confirm-trigger').leanModal({
            dismissible: false
        });

        $('.return-info-modal-trigger').leanModal({
            // dismissible: false
        });

        $('.add-book-modal-trigger').leanModal({
            dismissible: false
        });

        $('.edit-book-modal-trigger').leanModal({
            dismissible: false
        });

        $('.detail-book-modal-trigger').leanModal();

        // SELECT FORM
        $('select').material_select();
        // ------------
        //////

        // EDIT BOOK BUTTON FUNC
        if ($('#edit-book-detail-button').length) {
            var edit_toggle = false;

            $(document).ready(function () {
                $('.select-dropdown').attr("disabled", "disabled");
            });

            $('#edit-book-detail-button').click(function () {
                edit_toggle = !edit_toggle;
                if (edit_toggle) {
                    $('#edit-book-detail-button-icon').removeClass('fa-pencil-square-o');
                    $('#edit-book-detail-button-icon').addClass('fa-check');
                    $('#book-title-detail').removeAttr("disabled");
                    $('.select-dropdown').removeAttr("disabled");
                    $('#book-des-detail').removeAttr("disabled");
                } else {
                    $('#edit-book-detail-button-icon').removeClass('fa-check');
                    $('#edit-book-detail-button-icon').addClass('fa-pencil-square-o');
                    $('#book-title-detail').attr("disabled", "disabled");
                    $('.select-dropdown').attr("disabled", "disabled");
                    $('#book-des-detail').attr("disabled", "disabled");
                }
            });
        }
        ///////////////////////


        // EDIT AUTHOR BUTTON FUNC
        $('#author-dob-add').pickadate();
        if ($('#edit-author-detail-button').length) {
            var $input = $('#author-dob').pickadate();
            var picker = $input.pickadate('picker');
            var now = new Date();
            picker.set('select', now);
            var author_edit_toggle = false;
            $('#edit-author-detail-button').click(function () {
                author_edit_toggle = !author_edit_toggle;
                if (author_edit_toggle) {
                    $('#edit-author-detail-button-icon').removeClass('fa-pencil-square-o');
                    $('#edit-author-detail-button-icon').addClass('fa-check');
                    $('#author-dob').removeAttr("disabled");
                    $('#author-name-detail').removeAttr("disabled");
                } else {
                    $('#edit-author-detail-button-icon').removeClass('fa-check');
                    $('#edit-author-detail-button-icon').addClass('fa-pencil-square-o');
                    $('#author-dob').attr("disabled", "disabled");
                    $('#author-name-detail').attr("disabled", "disabled");
                }

            });
        }
        /////////////

        // EDIT PUBLISHER BUTTON FUNC
        if ($('#edit-publisher-detail-button').length) {
            var publisher_edit_toggle = false;
            $('#edit-publisher-detail-button').click(function () {
                publisher_edit_toggle = !publisher_edit_toggle;
                if (publisher_edit_toggle) {
                    $('#edit-publisher-detail-button-icon').removeClass('fa-pencil-square-o');
                    $('#edit-publisher-detail-button-icon').addClass('fa-check');
                    $('#publisher-name-detail').removeAttr("disabled");
                } else {
                    $('#edit-publisher-detail-button-icon').removeClass('fa-check');
                    $('#edit-publisher-detail-button-icon').addClass('fa-pencil-square-o');
                    $('#publisher-name-detail').attr("disabled", "disabled");
                }

            });
        }
        /////////////


        // EDIT MEMBER BUTTON FUNC
        if ($('#register-date').length) {

            $(document).ready(function () {
                $('.select-dropdown').attr("disabled", "disabled");
                if ($('#member-type-add').length) {
                    $('.select-dropdown').removeAttr("disabled");
                }
            });
            var $input = $('#register-date').pickadate();
            var picker = $input.pickadate('picker');
            var now = new Date();
            picker.set('select', now);

            var $input2 = $('#expired-date').pickadate();
            picker = $input2.pickadate('picker');
            picker.set('select', now);

            $('#edit-member-detail-button').click(function () {
                edit_toggle = !edit_toggle;
                if (edit_toggle) {
                    $('#edit-member-detail-button-icon').removeClass('fa-pencil-square-o');
                    $('#edit-member-detail-button-icon').addClass('fa-check');
                    $('#member-name-detail').removeAttr("disabled");
                    $('#member-cmnd-detail').removeAttr("disabled");
                    $('#expired-date').removeAttr("disabled");
                    $('.select-dropdown').removeAttr("disabled");
                } else {
                    $('#edit-member-detail-button-icon').removeClass('fa-check');
                    $('#edit-member-detail-button-icon').addClass('fa-pencil-square-o');

                    $('#member-name-detail').attr("disabled", "disabled");
                    $('#member-cmnd-detail').attr("disabled", "disabled");
                    $('#expired-date').attr("disabled", "disabled");
                    $('.select-dropdown').attr("disabled", "disabled");
                }
            });
        }
        ///////////

        if ($('#return-date').length > 0) { //check if #return-date exits

            var defaultDate = 7;
            var $input = $('#return-date').pickadate();
            var picker = $input.pickadate('picker');
            var now = new Date();
            var newDate = new Date(now.setTime(now.getTime() + defaultDate * 86400000));
            picker.set('select', newDate);


            $("#date-slider").on("change", function () {
                defaultDate = this.value;
                $("#return-days").attr("value", this.value);
                now = new Date();
                var newDate = new Date(now.setTime(now.getTime() + defaultDate * 86400000));
                picker.set('select', newDate);
            });

            $("#return-days").on("change", function () {
                $("#date-slider").attr("value", this.value);
            });
            // Use the picker object directly.
            //ADD DAYS

        }
        //--------------------


        //select changes event
        $("#reader-choose").change(function () {
            var choose = $("#reader-choose option:selected").val();
            if (choose == 2)
                $("#date-picker").show();
            else
                $("#date-picker").hide();

        });

        $("#sort-field").change(function () {
            var choose = $("#sort-field option:selected").val();
            $("#sort-order").show();
            // $("#sort-button").show();
        });

        $("#sort-order").change(function () {
            var choose = $("#sort-order option:selected").val();
            $("#sort-button").show();
        });


        // VALIDATOR
        // $("#login-form").validate({
        //   rules: {
        //     ID: {
        //       required: true,
        //     },
        //     password: {
        //       required: true,
        //     }
        //   },
        //   //For custom messages
        //   // messages: {
        //   //   ID: {
        //   //     required: "Enter a username",
        //   //     minlength: "Enter at least 5 characters"
        //   //   },
        //   //   password: {
        //   //     required: "Enter your password",
        //   //     minlength: "Enter at least 5 characters"
        //   //   }
        //   // },
        //   errorElement: 'div',
        //   errorPlacement: function(error, element) {
        //     var placement = $(element).data('error');
        //     if (placement) {
        //       $(placement).append(error);
        //     } else {
        //       error.insertAfter(element);
        //     }
        //   }
        // });


        $.validator.setDefaults({
            errorClass: 'invalid',
            errorPlacement: function (error, element) {
                element.next("label").css("width", "100%");
            }
        });
        $('#login-form').validate();
        // $('#login-form').on('submit', function (e) {
        //     // validation code here
        //     e.preventDefault();
        // });


    }); // end of document ready
})(jQuery); // end of jQuery name space
