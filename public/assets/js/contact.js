
$(document).ready(function(){
    $("#submitButton").click(function(){
        event.preventDefault();
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()},
            type: 'POST',
            url: 'contact',
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                phone_number: $('#phone').val(),
                message: $('#message').val(),
                contactflag: 1
            },
            success: function(response) {
                if (response == 'ok'){
                    $('#resultMsg').text('Successfully submitted!');
                } else{
                    $('#resultMsg').text('Submission Failed!');
                }
            }
        });
    });
  
    

});

