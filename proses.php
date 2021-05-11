<?php
session_start();
if (!isset($_COOKIE['email'])){
    header("Location: index.php");
}
if ($_GET['hasil'] == $_GET['answer']){
    $_SESSION['teks'] = "Hello".$_COOKIE['nama'].", selamat jawaban anda BENAR";
    $score = $_SESSION['score'];
    $score += 10;
    $_SESSION['score'] = $score;
} else {
    $_SESSION['teks'] = "Hello".$_COOKIE['nama'].", sayang jawaban anda SALAH";
    $score = $_SESSION['score'];
    $lives = $_SESSION['lives'];
    $score -= 2;
    $lives -= 1;
    $_SESSION['score'] = $score;
    $_SESSION['lives'] = $lives;
}
header("Location: hasil.php");
?>