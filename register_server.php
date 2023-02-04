<?php

include('db.php');

if(isset($_POST['user_id']) && isset($_POST['user_birth']) &&isset($_POST['user_pass1']) && isset($_POST['user_pass2']) && isset($_POST['user_nick']) && isset($_POST['user_email']))
{
    //보안 강화
    $user_id = mysqli_real_escape_string($connect,$_POST['user_id']);
    $user_birth = mysqli_real_escape_string($connect,$_POST['user_birth']);
    $user_pass1 = mysqli_real_escape_string($connect,$_POST['user_pass1']);
    $user_pass2 = mysqli_real_escape_string($connect,$_POST['user_pass2']);
    $user_nick = mysqli_real_escape_string($connect,$_POST['user_nick']);
    $user_email = mysqli_real_escape_string($connect,$_POST['user_email']);
    session_start();
    $_SESSION['user_id'] = $_POST['user_id'];


    //주소창 get
    $user_info = "user_id=".$user_id."&user_nick=".$user_nick;
   
    //에러 체크


    if(empty($user_id))
    {
        header("location: register_view.php?error=아이디가 비어있어요&$user_info");
        exit();
    }
    else if(empty($user_pass1))
    {
        header("location: register_view.php?error=비밀번호가 비어있어요&$user_info");
        exit();
    }
    else if(empty($user_pass2))
    {
        header("location: register_view.php?error=비밀번호확인이 비어있어요&$user_info");
        exit();
    }
    else if(empty($user_nick))
    {
        header("location: register_view.php?error=닉네임이 비어있어요&$user_info");
        exit();
    }
    else if($user_pass1 !== $user_pass2 )
    {
        header("location: register_view.php?error=비밀번호가 일치하지 않습니다.&$user_info");
        exit();
    }
    else if(empty($user_birth))
    {
        header("location: register_view.php?error=생년월일이 비어있어요&$user_info");
        exit();
    }

    else if(empty($user_email))
    {
        header("location: register_view.php?error=이메일이 비어있어요&$user_info");
        exit();
    }
    else
    {
        //암호화
        $user_pass1 = password_hash($user_pass1, PASSWORD_DEFAULT);
        echo $user_pass1;

        //중복 체크
        $sql_same = "SELECT * FROM member where mb_id= '$user_id' and mb_id= '$user_nick'";
        $order = mysqli_query($connect, $sql_same);


        if(mysqli_num_rows($order) > 0)
        {
            header("location: register_view.php?error=이미 있는 아이디 또는 닉네임 입니다.&$user_info");
            exit();
        }
        else
        {
            $sql_save = "insert into member(mb_id,mb_nick,password) values('$user_id','$user_nick','$user_pass1')";
            $result = mysqli_query($connect, $sql_save);

            if($result)
            {
                header("location: register_view.php?success=성공적으로 가입 되었습니다.");
                exit();
            }
            else
            {
                header("location: register_view.php?error=가입에 실패 하였습니다.&$user_info");
                exit();
            }
        }

    }

    $to = trim($_POST['user_email']); // 받는사람 메일주소 
    $subject = '메일 인증';
    $message = '메일 인증되셨습니다! 로그인 후 서비스를 이용해주시길 바랍니다.';


    // html 메일을 보낼 때 꼭 이헤더가 붙어야한다.
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';

    // Additional headers
    //$headers[] = 'To: Kim<받는사람@gmail.com>';
    $headers[] = 'From: webmaster<받는사람@gmail.com>';
    //$headers[] = 'Cc: Kim1<참조인1@naver.com>,Kim2<참조인2@gmail.com>';
    //$headers[] = 'Bcc: 숨은참조인3@gmail.com';


    mail($to, $subject, $message, implode("\r\n", $headers));
    echo "편지를 보냈습니다.";
        echo "<script language=javascript> alert('메일인증성공!'); location.replace('register_view.php'); </script>";


}
else
{
    header("location: register_view.php?error=알수없는 오류가 발생하였습니다.&$user_info");
    exit();
}

?>