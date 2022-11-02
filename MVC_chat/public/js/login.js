function do_login() {
    var account = $("#sAccount").val();
    var password = $("#sPassword").val();
    if (account != "" && password != "") {
        $.ajax
            ({
                type: 'post',
                url: '../controllers/loginController.php',
                data: {
                    do_login: "do_login",
                    account: account,
                    password: password
                },
                success: function (response) {
                    console.log(response);
                    if (response == true) {
                        
                        $("#loading_spinner").html("登入成功,即將跳轉");
                        setInterval(function(){
                            window.location.href = "./member.php";
                        },1000)
                    }
                    else {
                        var wrong = response;
                        $("#loading_spinner").html(wrong);
                    }
                }
            });
    }

    else {
        alert("Please Fill All The Details");
    }

    return false;
}