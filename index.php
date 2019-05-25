<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="indexbody">
    <div class="wrapper">
        <div class="content">
            <h1>로그인 후 이용할 수 있는 서비스 입니다.</h1>
            <div class="login_box">
                <form action="login_ok.php" method="post">
                    <div class="input_div">
                        <div class="text_input">
                            <input type="text" name="uid" placeholder="아이디"><br>
                            <input type="password" name="upwd" placeholder="비밀번호">
                        </div>
                        <div class="btn_input">
                            <input type="submit" class="submit_btn" value="로그인"><br>
                        </div>
                    </div>
                    <a href="/register.php">회원가입</a>
                    
                </form>
            </div>
        </div>

    </div>
</body>
</html>