<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
	;
	$text[0]="PHP Pertama Kali dibuat oleh Rasmus Lerdorf pada tahun 1995.";
	$text[1]="Pada waktu itu PHP berwarna FI (Form Interpreted).pada saat tersebut PHP";
	$text[2]="adalah sekumpulan script yang digunakan untuk mengolah data form dari web";
	
	echo"<b>Menggunakan Fungsi Str_replace:</b><br>
	".str_replace(" ","",$text[0])."<br>
	".str_replace(" ","",$text[1])."<br>
	".str_replace(" ","",$text[2])."<br>
	
	<br><b> Menggunakan proses perulangan:<br></b>";
	
	for($y=0;$y<=3;$y++)
	{  $x=0;
	  while ($x<strlen($text[$y]))
	  {
		if(substr($text[$y],$x,l)<>" ")
		{
		echo substr($text[$y],$x,l);
		}
		$x++;
	  }
	 echo"<br>";
	}
?>
</body>
</html>