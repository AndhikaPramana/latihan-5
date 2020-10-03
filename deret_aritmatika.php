<html>
    <head>
		<title>Baris Aritmatika )</title>
	</head>
		<body>
				<h2>Baris Aritmatika</h2>
				<hr>
					<form action="" method="post">
						Masukan Barisan Aritmatika : <input type="text" name="ba"> 
						Suku Pertama : <input type="text" name="a"> 
						Beda : <input type="text" name="b">
						Suku Ke- : <input type="text" name="un">
						<input type="submit" name="submit" value="Hasil">
					</form>
				<hr>
		</body>
					
</html>


<?php 
	if (isset($_POST['submit']))
	{
		$baris = $_POST['ba'];
		$suku_pertama = $_POST['a'];
		$beda = $_POST['b'];
		$suku_ke_n = $_POST['un'];  

		$hasil1 = $suku_ke_n - 1;
		$hasil2 = $hasil1 * $beda;
		$hasil = $suku_pertama + $hasil2;
		
			echo '<br>';
			echo "<b>Suku Ke - </b>".$_POST['un'] ;
			echo "<b> dari Baris Aritmatika</b>  " .$_POST["ba"] ;
			echo "<b>  adalah</b>  ";
			echo $hasil;
    
	}
?>