<?php
session_start();
if (!isset($_COOKIE['email'])){
    header("Location: index.php");
}
if ($_SESSION['lives'] == 0){
    header("Location: gameover.php?");
}
?>
<html>
<head>Hasil Game Matematika</head>
<body>
    <h3><?= $_SESSION['teks']; ?></h3>
    <h3>Lives: <?= $_SESSION['lives']; ?> | Score: <?= $_SESSION['score']; ?></h3>
    <a href="game.php">Soal Selanjutnya --></a>>
</body>
</html>