<?php

//TODO 5: Tentukan status mahasiswa berdasarkan input yang diberikan

	$ipk = $_POST["IPK"];
	$semester = $_POST["semester"];
	$do = 0;

	echo "<p id='x'></p>";
	echo "<p id='y'></p>";
	if($ipk<2&&$semester<4)
	{
		$do = 1;
	}
	else if($ipk<2&&$semester==4)
	{
		$do = 2;
	}
	else if(($ipk<2)&&($semester>4&&$semester<=14))
	{
		$do = 3;
	}
	else
	{
		$do = 0;
	}

//TODO 6: Tampilkan pesan status DO mahasiswa. Jika hasilnya DO, 
//        tampilkan dengan kalimat dengan latar belakang merah.

echo "<br>";
if($do==1)
{
	echo "Anda terancam drop out. Kurangi main Mobile Legends";
}
else if($do==2)
{
	echo "<p style='background-color:red;'>Maaf , anda kami drop out.<p>";
}
else if($do==3)
{
	echo "Anda sudah kami drop out";
}
else if($ipk>4)
{
	echo "Maksimal ipk 4 cuy";
}
else if($ipk>=2&&$semester==14) 
	{

		echo "<script type='text/javascript' src='script.js'></script>";
	}
else
{
	echo "Anda dalam zona aman";
}
?>
