<?php 
    session_start();
    include 'connection.php';
    if($_POST["username"] != '' && $_POST["password"] != '') {
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $sql = "SELECT * FROM Information WHERE username ='$username' and password='$password' ";
        $user = mysqli_query ($conn, $sql);
        
        if(mysqli_num_rows($user) > 0) {
            $_SESSION["Information"] = '$username';
            header("location:../Home/DaLat_Demo.HTML");
        }else {
            $_SESSION["Notice"] = "パスワード、またユーザー名前間違っています。"; 
            header("location:LogIn.php");
        }
    }else {
        $_SESSION["Notice"] = "必須項目の入力が足りません.<br>
        もう一回ログインしてください。またはアカウント登録してください。";
        header("location:LogIn.php");
    }
