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
        <h2>登入</h2>
        <form method="post" action="" onsubmit="return do_login()">
            <p>帳號 <input type="text" name="sAccount" id="sAccount"></p>
            <p>密碼 <input type="password" name="sPassword" id="sPassword"></p>
            <input type="submit" value="登入" name="btn">
            <a href="./register.php" style="text-decoration:none; color:black"><button type="button">註冊</button></a>
        </form>
        <h3><a href="./chatboard.php">留言板</a></h3>
        <br>
        <p id="loading_spinner"></p>
    </div>
</body>
</html>

<script type="text/javascript" src="../public/js/jquery.min.js"></script>
<script src="../public/js/login.js"></script>
