<?php
// buatlah sebuah function yang akan menampilkan hari tanggal dengan format dari tanggal yang tadinya -> 
//(Mon, 22 januari 2024) mebjadi (senin, 22 januari 2024) hari menggunakan bahasa indonesia, argument di ambil dari variabel berikut

function formatIDN($date) {
 
	switch(date('D')){
		case 'Sun':
			$formatIDN = "Minggu";
		break;
 
		case 'Mon':			
			$formatIDN = "Senin";
		break;
 
		case 'Tue':
			$formatIDN = "Selasa";
		break;
 
		case 'Wed':
			$formatIDN = "Rabu";
		break;
 
		case 'Thu':
			$formatIDN = "Kamis";
		break;
 
		case 'Fri':
			$formatIDN = "Jumat";
		break;
 
		case 'Sat':
			$formatIDN = "Sabtu";
		break;
		
		default:
			$formatIDN = "Tidak di ketahui";		
		break;
	}
 
	return $formatIDN;
 
}

$date = date('D, d M Y');

echo $date;
echo " Vs ";
echo formatIDN(date('D')). " " .date('d M Y');