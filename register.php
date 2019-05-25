<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>회원가입</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="indexbody">
    <div class="register_wrapper">
        <div class="register_box">
        <h1>회원가입</h1>
            <form action="register_ok.php" method="post">
                <div class="register_input">
                    <input type="text" name="uid" placeholder="아이디">
                    <input type="password" name="upwd" placeholder="비밀번호">
                    <input type="text" name="name" placeholder="닉네임">

                    <input type="submit" value="회원가입" class="register_btn">
                </div>
            </form>
        </div>
    </div>
</body>
</html>