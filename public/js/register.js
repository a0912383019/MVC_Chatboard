function do_register() {
    var nickname = $("#sNickname").val().trim();
    var account = $("#sAccount").val();
    var password = $("#sPassword").val();
    var password2 = $("#sPassword2").val();
    if (nickname != "" && account != "" && password != "" && password2 != "") {
        if (password != password2) {
            $("#password").html("密碼錯誤");
        } else {
            $.ajax({
                type: 'post',
                url: '../controllers/registerController.php',
                data: {
                    do_register: "do_register",
                    nickname: nickname,
                    account: account,
                    password: password
                },
                success: function (response) {
                    console.log(response == true);
                    if (response == true) {
                        $("#password").html("註冊成功，即將返回登入！");
                        setInterval(function () {
                            window.location.href = "login.php";
                        }, 1500)
                    } else {
                        var wrong = response;
                        $("#password").html(wrong);
                    }
                }
            });
        }
    } else {
        alert("Please Fill All The Details");
    }

    return false;
}