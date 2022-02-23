/* alert('test');*/

$(document)
    .on("submit", "form.js-register", function(event) {
    event.preventDefault();
    // alert('form was submitted');
        const _form = $(this);
        const _error = $(".js-error", _form);

        const dataObj = {
            email: $("input[type='email']", _form).val(),
            password: $("input[type='password']", _form).val()
        };

        if(dataObj.email.length < 16) {
            _error
                .text("Please enter a valid email address")
                .show();
            return false;
        } else if(dataObj.password.length < 10) {
            _error
                .text("Please enter a valid number at least 10 characters long")
                .show();
            return false;
        }
        // Assume the code this far, we can start the Ajax process
        _error.hide();

        $.ajax({
            type: 'POST',
            url: '/ajax/register.php',
            data: dataObj,
            dataType: 'json',
            async: true,
        })
            .done(function ajaxDone(data){
                // whatever data is
                console.log(data);
                if(data.redirect !== undefined) {
                    window.location = data.redirect;
                }
                alert(data.name);
            })
            .fail(function ajaxFailed(e) {
                // failed
                console.log(e);
            })
            .always(function ajaxAlwaysDoThis(data) {
                // Do it Always
                console.log('Always');
            })

        // console.log(data);
        return false;

});