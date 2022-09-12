<?php

//DETAIL
$beatles=[
	['name'=>'John Lennon'],
	['name'=>'Paul McCartney'],
	['name'=>'Ringo Starr'],
	['name'=>'George Harrison'],
	['name'=>'Elton John']
];
?>
<h1><?= $beatles[$_GET['id']]['name'] ?></h1>