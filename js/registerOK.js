$(document).ready(function(){

    $("input").focus(function(){
        $(this).css("background-color","#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color","#ffffff");
    });

        
    $("#registerBtn").click(function(){
        $(".error").hide();
        var hasError = false;
        
        // Username check
        var userName = $("#chooseUsername").val();
        if (userName == '') {
            $("#chooseUsername").after('<span class="error">Please enter a username.</span>');
            hasError = true;
        }

        // Email checks / validation
        var emailAddy = $("#inputEmail").val();
        var confirmEmail = $("#confirmEmail").val();
        if(emailAddy == '') {
            $("#inputEmail").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }
        else if(confirmEmail == '') {
            $("#confirmEmail").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }
        else if(emailAddy != confirmEmail){
            $("#confirmEmail").after('<span class="error">Email addresses do not match.</span>');
            hasError = true;
        }
        
        // Password checking / validation
        var passwordVal = $("#inputPassword").val();
        var checkVal = $("#conFirmPassword").val();
        if (passwordVal == '') {
            $("#inputPassword").after('<span class="error">Please enter a password.</span>');
            hasError = true;
        } else if (checkVal == '') {
            $("#conFirmPassword").after('<span class="error">Please re-enter your password.</span>');
            hasError = true;
        } else if (passwordVal != checkVal ) {
            $("#conFirmPassword").after('<span class="error">Passwords do not match.</span>');
            hasError = true;
        }
        
        // End result
        if(hasError == true)
            {return false;}
        else{
            alert("Information complete. Thank you.");
        }
    });

});