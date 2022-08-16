<?php
$data=[
'Game of Thrones'=>['Jamie Laura','Catelyn Stark','Corsel Lannister '],
'Black Mirror'=>['Nnnet Cole','Selma Telse','Karine Parke']
];


echo'<h1>Famous TV series and Actors';
foreach($data as $series=>$actors){
	echo"<h2>$series</h2>";
	foreach($actors as $actor){
		echo"<div>$actor</div>";
		echo"<div>$data[1][2]</div>";

	}
}
?>

