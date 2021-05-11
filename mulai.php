<?php
    session_start();
    if (!isset($_COOKIE['email'])){
        header("Location: index.php");
    }
    if (isset($_POST['start'])){
        $_SESSION['score'] = 0;
        $_SESSION['lives'] = 5;
        header("Location: game.php");
    }
    if (isset($_POST['relog'])){
        setcookie("nama", null, -1, '/');
        setcookie("email", null, -1, '/');
        header("Location: index.php");
    }
    if (isset($_POST['leaderboard'])){
        header("Location: leaderboard.php");
    }
?>
<html>
    <body>
        <h3>Hello <?php echo $_COOKIE['nama'];?>, selamat datang kembali di permainan ini!!!</h3>
        <form method="post" action="mulai.php">
		<p>
			<input type="submit" name="start" value="Start Game">
		</p>
		<p>
			<input type="submit" name="leaderboard" value="Leaderboard">
		</p>
		<p>
			<label>Bukan Anda?</label> 
			<input type="submit" name="relog" value="(klik disini)">
		</p>
	</form>	
    </body>
</html>