<?php
session_start();
if (!isset($_COOKIE['email'])){
    header("Location: index.php");
}
if (isset($_POST['jawab'])){
    $answer = $_POST['answer'];
    $hasil = $_SESSION['hasil'];
    header("Location: proses.php?answer=$answer&hasil=$hasil");
}
if (isset($_POST['kembali'])){
    session_abort();
    header("Location: mulai.php");
}
$bilA = random_int(0,20);
$bilB = random_int(0,20);
$_SESSION['hasil'] = $bilA + $bilB;

?>
<html>
<head>Game Matematika</head>
<body>
    <h3>Hello <?php echo $_COOKIE['nama'] ?>, tetap semangat ya... you can do the best!!</h3>
    <h3>Lives: <?= $_SESSION['lives']; ?> | Score: <?= $_SESSION['score']; ?></h3>
    <br>
    <br>
    <form method="post" action="game.php">
        <h3>
            <label>Berapakah <?= $bilA; ?> + <?= $bilB; ?> =</label>
            <input type="number" name="answer">
        </h3>
        <p><input type="submit" name="jawab" value="Jawab"></p>
        <p><input type="submit" name="kembali" value="Kembali"></p>
    </form>
</body>
</html>