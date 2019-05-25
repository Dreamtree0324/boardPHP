<?php
    require("db.php");

    $sql = "SELECT id, writer, title FROM boardman ORDER BY id DESC";

	$q = $con->prepare($sql);
	$q->execute();
    $list = $q->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>게시판</title>
    <script>
        <?php
            if(isset($_SESSION['user'])){
                $u = $_SESSION['user'];
                echo "let user = {name: '" . $u->name . "', id: '" . $u->id . "'};";
            } else{
                echo "let user = null;";
            }
        ?>
    </script>
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

    <div class="board_wrapper">
        <div class="board_content">
            <h1 style="text-align:center;">게시글 목록</h1>
            <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th>글 번호</th>
                        <th>작성자</th>
                        <th width="60%">제목</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($list as $item) { ?>
						<tr>
							<td><?= $item['id'] ?></td>
							<td><?= $item['writer'] ?></td>
							<td><a href="/view.php?id=<?= $item['id'] ?>" style="color:#333;"><?= $item['title'] ?></a></td>
						</tr>
					<?php } ?>
                </tbody>
            </table>
        </div>
        <a href="write.php" class="write">글 작성</a>
    </div>
</body>
</html>