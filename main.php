<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>강아지,고양이 모여라</title>
    <style>
        body{
            background-image: url(dogcat.jpg);
            background-size: 100% 1000px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: 0px 40%;
        }
        ol>li{list-style: none;}
    </style>
</head>
<body>
    <h1>강아지,고양이 모여라</h1>
    <form class="login100-form validate-form" action="logout.php" method="post">
        <div class="container-login100-form-btn">
		    				<button class="login100-form-btn">로그아웃</button>
	    </div>
        <hr>
        <ol>
            <li>
                <h2>강아지</h2>
                <ul>
                    <li> <a href="dogkind.php">품종</a></li>
                
                </ul>
            </li>
            <li>
                <h2>고양이</h2>
                <ul> 
                    <li> <a href="catkind.php">품종</a></li>
                
                </ul>
            </li>
            <li>
                <h2>게시판</h2>
                <ul> 
                    <li> <a href="index.php">자유게시판</a></li>
                    <li><a href="often.html">자주하는 질문</a></li>
                    <li> <a href="QnA.html">Q&A</a></li>
                    <li> <a href="imformation.html">정보게시판</a></li>
                </ul>
            </li>
            <li>
                <h2>회원</h2>
                <ul> 
                    <li> <a href="register_view.php">회원가입</a></li>
                    <li><a href="login_view.php">로그인,아이디/비밀번호 찾기</a></li>
                </ul>
            </li>
        
        </ol>
    </form>
</body>
</html>