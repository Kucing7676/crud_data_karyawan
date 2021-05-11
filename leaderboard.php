<?php
if (!isset($_COOKIE['email'])){
    header("Location: index.php");
}
include_once("connect.php");
$result = mysqli_query($mysqli, "SELECT * FROM player ORDER BY score DESC LIMIT 10");
$i = 1;
?>
<html>
<body>
    <h1>Leaderboard</h1>
    <br>
    <table border=1>
        <tr>
            <th>No</th> <th>Nama Player</th> <th>Score</th>
        </tr>
        <?php
        while ($player = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$player['nama']."</td>";
            echo "<td>".$player['score']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="mulai.php">Kembali</a>
</body>
</html>