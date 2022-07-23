$(document).ready(function() {
    function checkFields() {

        let check = true;

        if ($('#password').val().length == 0) {
            errorStyle('password', 'error');
            check = false;
        } else {
            errorStyle('password', 'success');
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