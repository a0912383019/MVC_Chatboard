function add_comments() {

    var Uid = $("#param").val();
    var comments = $("#textbox").val().trim();
    if (comments != "") {

        // 取得url後面的parameter(參數)
        // const queryString = window.location.search;

        // // 因為是給 ?id= 所以從參數的第四位開始取
        // var mid = parseInt(queryString.substr(4));

        $.ajax({
            type: 'post',
            url: '../controllers/addController.php',
            data: {
                add_comments: "add_comments",
                comments: comments,
                URLparam: Uid,
                isFrom: "reply"
            },
            success: function (response) {

                if (response == true) {
                    window.location.reload();
                } 
                else {
                    var wrong = response;
                    $("#msg").html(wrong);
                }
            }
        });
    } else {
        alert("Please Fill All The Details");
    }

    return false;
}