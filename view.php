<?php
    require("db.php");

    $id = $_GET['id'];

	$sql = "SELECT * FROM boardman WHERE id = ?";
	$q = $con->prepare($sql);
	$q->execute([$id]);

	$data = $q->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>글 보기</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="/board.php" class="main">메인</a>

        <ul class="status">
                <li>
                    <?php if(isset($_SESSION['user'])){ ?>
                    <p><?=$_SESSION['user']->name?>님</p>
                </li>
                <li><a href="/logout.php">로그아웃</a></li>
        </ul>
        <?php }?>
    </header>

    <div class="view_wrapper">
        <h1 style="text-align:center;">글 상세 확인</h1>
        <div class="view_info">
            글 작성자 : <?= $data['writer'] ?><br>
            글 제목 : <?= $data['title'] ?><br>

            <div class="view_content">
                <?= $data['content']?>
            </div>
        </div>
    </div>
</body>
</html>