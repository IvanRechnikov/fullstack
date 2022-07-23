$(document).ready(function() {

    validateFields();

    function validateFields() {
        let firstName = $("#firstName");
        let secondName = $("#secondName");
        let lastName = $("#lastName");

        firstName.on('input', function() {
            $(this).val($(this).val().replace(/[^А-Яа-яЁё\']/g,''));
        });

        secondName.on('input', function() {
            $(this).val($(this).val().replace(/[^А-Яа-яЁё\']/g,''));
        });
        lastName.on('input', function() {
            $(this).val($(this).val().replace(/[^А-Яа-яЁё\']/g,''));
        });
    }
    
    function checkFields() {

        let check = true;

        if (($('#password').val() !== $('#confirm-password').val()) || $('#password').val().length == 0) {
            errorStyle('password', 'error');
            errorStyle('confirm-password', 'error');
            check = false;
        } else {
            errorStyle('password', 'success');
            errorStyle('confirm-password', 'success');
        }

        if ($('#lastName').val().length == 0) {
            errorStyle('lastName', 'error');
            check = false;
        } else {
            errorStyle('lastName', 'success');
        }

        if ($('#firstName').val().length == 0) {
            errorStyle('firstName', 'error');
            check = false;
        } else {
            errorStyle('firstName', 'success');
        }

        if ($('#secondName').val().length == 0) {
            errorStyle('secondName', 'error');
            check = false;
        } else {
            errorStyle('secondName', 'success');
        }

        var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
	    var mail = $('#email');

        if(mail.val() != ''){
            if(mail.val().search(pattern) == 0){
                errorStyle('email', 'success');
            }else{
                errorStyle('email', 'error');
                check = false;
            }
        }else{
            errorStyle('email', 'error');
            check = false;
        }

        if (check) {
            document.getElementById('checkFields').setAttribute('type', 'submit');
        }

    }

    function errorStyle(field, style) {
        
        if (style == 'error') {
            $('#' + field).css('border', '1px solid rgb(198, 2, 2)');
        }

        if (style == 'success') {
            $('#' + field).css('border', 'none');
        }
    }

    $('#checkFields').on('click', checkFields);
});
