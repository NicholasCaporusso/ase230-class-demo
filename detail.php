<?php

//DETAIL
$beatles=[
	['name'=>'John Lennon'],
	['name'=>'Paul McCartney'],
	['name'=>'Ringo Starr'],
	['name'=>'George Harrison']
];
?>
<h1><?= $beatles[$_GET['id']]['name'] ?></h1>