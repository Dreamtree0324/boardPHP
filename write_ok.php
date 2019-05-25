<?php
	require("db.php");

	if(!isset($_SESSION['user'])){
		msgAndBack("비정상적인 접근입니다.");
    }
    
    $writer = $_SESSION['user']->name;
	$title = $_POST['title'];
	$content = $_POST['content'];

	if($writer == "" || $title == "" || $content == ""){
		msgAndBack("필수 입력사항이 빈칸입니다.");
		exit;
	}

	$sql = "INSERT INTO boardman(writer, title, content) VALUES(?, ?, ?)";

	$q = $con->prepare($sql);
	$q->execute([$writer, $title, $content]);

	if($q->rowCount() == 1) {
		msgAndGo("성공적으로 글이 작성되었습니다.", "/board.php");
	}else{
		echo "<h1>글작성 실패</h1>";
		echo "<a href='/write.php'>다시 작성하기</a>";
	}
?>