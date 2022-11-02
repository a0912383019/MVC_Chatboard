// var ele = document.getElementById("chatbox");
// ele.scrollTop = ele.scrollHeight;

function add_comments() {

    //input前後空白去除
    var comments = $("#textbox").val().trim();

    if (comments != "") {
        $.ajax({
            type: 'post',
            url: '../controllers/addController.php',

            data: {
                add_comments: "add_comments",
                comments: comments,
                mid: "",                        //回覆頁才有，這頁給空字串
                isFrom: "comment"
            },
            success: function (response) {

                if (response == true) {
                    window.location.href = "chatboard.php";
                }else {
                    var wrong = response;
                    $("#msg").html(wrong);
                }
            }
        });
    }
    else {
        alert("Please Fill All The Details");
    }
}