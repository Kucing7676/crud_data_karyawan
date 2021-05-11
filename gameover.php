<?php
session_start();
if (!isset($_COOKIE['email'])){
    header("Location: index.php");
}
include_once("connect.php");
if (isset($_POST['main_lagi'])){
    $nama = $_COOKIE['nama'];
    $score = $_SESSION['score'];
    $result = mysqli_query($mysqli, "INSERT INTO player(nama, score) VALUES('$nama','$score')");
    session_destroy();
    header("Location: mulai.php");
}
?>
<html>
<head>Game Over</head>
<body>
    <h3>Hello <?= $_COOKIE['nama']; ?>, Sayang permainan sudah selesai. Semoga lain kali lebih baik.</h3>
    <h3>Score Anda: <?= $_SESSION['score']; ?></h3>
    <form method="post" action="gameover.php">
        <input type="submit" name="main_lagi" value="Main Lagi">
    </form>
</body>
</html>