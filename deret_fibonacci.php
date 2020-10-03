<html>
	<body>
		<h2>Deret Fibonacci</h2>
			<hr>
				<form action="" method="post">
					Nilai Ke-1 <input type="number" name="nilai1">
					Nilai Ke-2 <input type="number" name="nilai2"> 
					Jumlah Deret <input type="text" name="jumlah_deret">
					<input type="submit" name="submit" value="Hasil">
				</form>
			<hr>
	</body>
</html>
<?php
		if (isset($_POST['submit']))
		{
			$angka_1 = $_POST['nilai1'];
			$angka_2 = $_POST['nilai2'];
			$n = $_POST['jumlah_deret'];  

				echo " <br> ";
				echo "<b>Deret Bilangan Fibonacci $angka_1 - $angka_2 </b><br>";
				echo "$angka_1 $angka_2";
   
				for($i =0; $i < $n; $i++)
			{
				$hasil = $angka_1 + $angka_2;
				echo " ";
				echo $hasil ;

				$angka_1 = $angka_2;
				$angka_2 = $hasil;
			}
		}
?>