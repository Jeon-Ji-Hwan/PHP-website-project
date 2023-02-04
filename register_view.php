<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css"> 
        a { text-decoration:none } 
    </style>
    <style>
        body{
            background-image: url(pooding2.png);
            background-size: 50% 700px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: 0px 100%;
        }
        
    </style> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <form action="register_server.php" method="post">
    <h1><a href="main.php">강아지,고양이 모여라</a></h1>
    <hr>
    <form>
        <h2>회원가입</h2>

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

                    <td>
                        <?php if(isset($_GET['user_id']))
                        { ?>
                            <input type="text" name="user_id" value="<?php echo $_GET['user_id'] ?>">
                        <?php } 
                        else
                        { ?>
                            <input type="text" name="user_id">
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">비밀번호</label></td>
                    <td><input type="password" name="user_pass1"></td>
                </tr>
                <tr>
                    <td><label for="password">비밀번호 확인</label></td>
                    <td><input type="password" name="user_pass2"></td>
                </tr>
                <tr>
                    <td><label for="id">닉네임</label></td>

                    <td>
                        
                        <?php if(isset($_GET['user_nick']))
                        { ?>
                            <input type="text" name="user_nick" value="<?php echo $_GET['user_nick'] ?>">
                        <?php } 
                        else
                        { ?>
                            <input type="text" name="user_nick">
                        <?php } ?>
                    
                    </td>
                </tr>
                <tr>
                    <td><label for="id">생년월일(ex 001107)</label></td>

                    <td>
                        
                        <?php if(isset($_GET['user_birth']))
                        { ?>
                            <input type="text" name="user_birth" value="<?php echo $_GET['user_birth'] ?>">
                        <?php } 
                        else
                        { ?>
                            <input type="text" name="user_birth">
                        <?php } ?>
                        
                    </td>
                </tr>
                <tr>
                    <td><label for="email">이메일</label></td>
                    <td><input type="email" name="user_email"></td>
                    <td><input type="submit" value="이메일 인증"></td>
                </tr>
            </table>
            <button type="submit" name="save">회원가입</button>
            <br>
            <a href="login_view.php" class="save">이미 회원이신가요? (로그인 페이지)</a>
        </fieldset>
    </form>
    </form>
</body>
</html>