<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/textAlign.css">
    <title>Document</title>

</head>

<body>
    <div class="textAlign">
        <h2>註冊</h2>

        <form method="post" action="" onsubmit="return do_register()">
            <p>暱稱 <input type="text" name="sNickname" id="sNickname" value=""></p>
            <p>帳號 <input type="text" placeholder="只能輸入英文跟數字" name="sAccount" id="sAccount" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" value=""></p>
            <p>密碼 <input type="password" placeholder="只能輸入英文跟數字" name="sPassword" id="sPassword" onkeyup="value=value.replace(/[^\w=@#]|_/ig,'')" value=""></p>
            <p>請再輸入一次密碼 <input type="password" placeholder="只能輸入英文跟數字" name="Password2" id="sPassword2"></p>
            <span style="color: red;" id="password">
            </span>
            <input type="submit" value="註冊" name="SubmitButton">
            <a href="./login.php">返回登入</a>
        </form>
    </div>

</body>

</html>

<script type="text/javascript" src="../public/js/jquery.min.js"></script>
<script src="../public/js/register.js"></script>