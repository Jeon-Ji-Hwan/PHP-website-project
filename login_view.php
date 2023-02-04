<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url(pooding.jpg);
            background-size: 100% 800px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: 0px 100%;
        }
        ol>li{list-style: none;}
    </style>
    <style type="text/css"> 
        a { text-decoration:none } 
    </style> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <form action="login_server.php" method="post">
    <h1><a href="main.php">강아지,고양이 모여라</a></h1>
    <hr>
    <form>
        <h2>로그인</h2>

        <?php if(isset($_GET['error']))
        { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <?php if(isset($_GET['success']))
        { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <fieldset>
            <table>
                <tr>
                    <td><label for="id">아이디</label></td>
                    <td><input type="text" name="user_id"></td>
                </tr>
                <tr>
                    <td><label for="password">비밀번호</label></td>
                    <td><input type="password" name="user_pass1"></td>
                </tr>
            </table>
            <button type="submit" name="login_btn">로그인</button>
            <br>
            <a href="register_view.php" class="save">아직 회원이 아니신가요? (회원가입 페이지)</a>
        </fieldset>
    </form>
    </form>
</body>
</html>