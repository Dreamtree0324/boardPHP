<?php 
    require("db.php");

    $uid = $_POST['uid'];
    $upwd = $_POST['upwd'];
	$name = $_POST['name'];

	if($uid == "" || $upwd == "" || $name == ""){
		msgAndBack("필수 값이 누락되었습니다.");
	}

	$sql = "SELECT * FROM userman WHERE uid = ?";
	$q = $con->prepare($sql);
	$q->execute([$uid]);
	$arr = $q->fetchAll();
	if(count($arr) > 0){
		msgAndBack("중복된 아이디가 있습니다.");
	}

	$sql = "INSERT INTO userman (uid, upwd, name ) VALUES(?, PASSWORD(?),?  )";

	$q = $con->prepare($sql);
	$q->execute([$uid, $upwd, $name ]);

	msgAndGo("성공적으로 가입되었습니다.", "/");
?>