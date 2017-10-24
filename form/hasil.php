<html>
<head>
	<title>Untitled Document</title>
</head>

<body>
	<center>Akun Anda Berhasil Dibuat<br>
		<table>
			<?php
			$nama=$_POST["nama"];
			$user=$_POST["user"];
			$email=$_POST["email"];
			$notelepon=$_POST["notelepon"];
			$password=$_POST["password"];
			$password=str_repeat("*",strlen("password"));
			$DBServer = "localhost";
			$DBUser = "root";
			$DBPass = "";
			$DBName ="instagram";
			$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

			if ($conn) {
				trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
			}
			echo"<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
			echo"<tr><td>Nama Pengguna</td><td>:</td><td>$user</td></tr>";
			echo"<tr><td>Email</td><td>:</td><td>$email</td></tr>";
			echo"<tr><td>No Telepon</td><td>:</td><td>$notelepon</td></tr>";
			echo"<tr><td>Password</td><td>:</td><td>$password</td></tr>";

			?>
		</table>
	</body>
	</html>
