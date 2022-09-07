<?php






//INDEX
$beatles=[
	['name'=>'John Lennon'],
	['name'=>'Paul McCartney'],
	['name'=>'Ringo Starr'],
	['name'=>'George Harrison'],
	['name'=>'Elton John']
];
$i=0;
foreach($beatles as $member){
	echo '<h1>'.$member['name'].'</h1>';
	echo '<a href="detail.php?id='.$i.'&name='.$member['name'].'">View details</a>';
	$i++;
}
echo '<hr />';

$i=0;
foreach($beatles as $member){
	?>
	<h1><?= $i ?>. <?= $member['name'] ?></h1>
	<a href="detail.php?id=<?= $i ?>&name=<?= $member['name'] ?>">View details</a>
	<?php
	$i++;
}