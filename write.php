<?php
    require("db.php");

    if(!isset($_SESSION['user'])){
		msgAndBack("비정상적인 접근입니다.");
	}
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
<body>
    <header>
        <ul class="status">
                <li>
                    <?php if(isset($_SESSION['user'])){ ?>
                    <p><?=$_SESSION['user']->name?>님</p>
                </li>
                <li><a href="/logout.php">로그아웃</a></li>
        </ul>

        <?php }?>
    </header>

    <div class="write_wrapper">
        <h1 style="text-align:center;">글 작성</h1>

        <div class="write_form">
            <form action="/write_ok.php" method="post">
                글쓴이<br>
                <input type="text" id="writer" name="writer" class="readonly" value="<?=$_SESSION['user']->name ?>" readonly><br>
                제목<br>
                <input type="text" id="title" name="title"><br>
                <textarea name="content" id="content" cols="60" rows="20" placeholder="글 내용을 작성해주세요"></textarea>

                <button type="submit" class="send">전송</button>
            </form>
        </div>
    </div>
</body>
</html>