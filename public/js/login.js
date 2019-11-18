$("#loginButton").click(function(){
    let form = $("#loginform");
    let btn = $(this);

    $.ajax({
        type: "POST",
        url: "/verifyuser",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function(){
            btn.prop("disabled", true).html('<i class="fa fa-spinner fa-spin"></i> Please wait');
            $("#msgbx").removeClass("alert alert-danger").html("");
        },
        success: function(data){
            console.log(data)
            var errorMsg= data.message;
            $("#notification").show();
            $("#error").html(errorMsg);
            //console.log("error", errorMsg)
           if(data.status == "ok"){
            //    Do something
              // window.location.href = data.redirect;
               $("#credentials").removeClass('show');
               $("#credentials").addClass('hide');
               $("#otpdiv").removeClass('hide');
               $("#otpdiv").addClass('show');
               btn.prop("disabled", false).html('log in');
            }else{
                //    Do something
                btn.prop("disabled", false).html('Log In');
                //Show error message
                // data.msg
                $("#msgbx").addClass("alert alert-danger").html(data.msg);
            }
        },
        error: function(){
            btn.prop("disabled", false).html('Log In');
            //Show error message
        }
    });
});

$("#otpsubmit").click(function(event){
    event.preventDefault();
    let email = $("#email").val();
    let password = $("#password").val();
    let otp = $("#otp").val();
    let csrf = $("#csrf").val();

    $.ajax({
        type: "POST",
        url: "/otp",
        data: {email: email, password: password, otp: otp, _token: csrf},
        dataType: "json",
        success: function(data){
            var message= data.errMsg;
            $("#notify").show();
            $("#new").html(message);

            if(data.status == "ok") {
                window.location.href = "success";
                //console.log("success", data);

            }
            },
        error: function(xhr,errmsg,err){

            //btn.prop("disabled", false).html('Log In');
            //Show error message
            console.log("error", errmsg);
        }

    });
});