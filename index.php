<?php
// bagian yang dieksekusi ketika pengunjung submit nama
if (isset($_POST['submit'])){
	// mengeset cookie nama, lama cookie 3 bulan
	setcookie("nama", $_POST['nama'], time()+3*30*24*3600,"/");
	// mengeset cookie email, lama cookie 3 bulan
	setcookie("email", $_POST['email'], time()+3*30*24*3600,"/");
	// setelah mengeset cookie awal di atas, redirect ke halaman depan index.php
	header("Location: index.php");
}

// jika sudah ada cookie nama
if (isset($_COOKIE['email'])){
	header("Location: mulai.php");
} else {
	// jika cookie username belum ada, munculkan form
?>
	<h1>Welcome to Math Games</h1>
	<p>Ini kunjungan Anda pertama kali di situs ini ya?</p>
	<p>Kita kenalan dulu ya, silakan masukkan nama & email Anda</p>
	<form method="post" action="index.php">
		<p>
			<label>Nama : </label>
			<input type="text" name="nama" placeholder="Masukkan Nama Anda...">
		</p>
		<p>
			<label>Email : </label> 
			<input type="email" name="email" placeholder="Masukkan Email Anda...">
		</p>
		<p>
			<input type="submit" name="submit" value="Submit">
		</p>
	</form>	
<?php	
}

?>