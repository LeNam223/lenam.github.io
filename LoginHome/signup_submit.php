<?php
session_start();
include 'connection.php';
if($_POST["username"] != '' && $_POST["email"] != '' && $_POST["password"] != '') {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $email = $_POST["email"];
    $sql ="SELECT * FROM Information WHERE username = '$username' ";
    $old = mysqli_query($conn, $sql);

    if(mysqli_num_rows($old) > 0) {
        $_SESSION["Notice"] = "既に使用されてユーザーネーム<br>
        ログインしてください。";
        header("location:LogIn.php");
    }else {
        $_SESSION["Notice"] = "登録完成の為、ログインしてください。";
        $sql = "INSERT INTO Information(username, password, email) VALUES('$username', '$password', '$email') ";
        mysqli_query($conn, $sql);
        header("location:SignUp.php");
    }
}else {
    $_SESSION["Notice"] = "必須項目の入力が足りません。";
    header("location:SignUp.php");
}
?>