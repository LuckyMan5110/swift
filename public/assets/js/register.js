
$(document).ready(function(){
    // Regular expression for email validation
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    // Function to validate email
    function isValidEmail(email) {
        return emailPattern.test(email);
    }

    $('#secondSignup').hide();
    $(".firstNext").click(function(){
        const registeremail = $('#registerEmail').val();
        if (registeremail){
            if (isValidEmail(registeremail)) {
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()},
                    type: 'POST',
                    url: 'checkemail',
                    data: {
                        checkemail: registeremail
                    },
                    success: function(response) {
                        if (response == 'ok'){
                            $('#errorMsg').hide();
                            $('#firstSignup').hide();
                            $('#secondSignup').show();
                        } else{
                            $('#errorMsg').text(response);
                            $('#errorMsg').show();
                        }
                    }
                });
            } else{
                $('#errorMsg').text('The email field must be a valid email address.');
                $('#errorMsg').show();
            }
        } else {
            $('#errorMsg').hide();
        }
    });
  
    $(".prev-1").click(function(){
      $('#firstSignup').show();
      $('#secondSignup').hide();
    });

});

