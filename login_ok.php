<?php
    require("db.php");

    $uid = $_POST['uid'];
    $upwd = $_POST['upwd'];

    $sql = "SELECT * FROM userman WHERE uid = ? AND upwd = PASSWORD(?)";
    $user = fetch($con, $sql, [$uid, $upwd]);

    if($user){
        $_SESSION['user'] = $user;
        msgAndGo("로그인 성공", "/board.php");
    }else{
        msgAndGo("로그인 실패", "/index.php");
    }