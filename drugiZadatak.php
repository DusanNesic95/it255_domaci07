<?php
	header("Content-type: application/json");
	$predmeti = array(
		array('id' => 0,
		'naziv' => 'Veb sistemi',
		'sifra' => 'IT255'),
		array('id' => 1,
		'naziv' => 'Interakcija covek-racunar',
		'sifra' => 'IT370'),
		array('id' => 2,
		'naziv' => 'Matematika 2',
		'sifra' => 'MA202'),
		array('id' => 3,
		'naziv' => 'Izrada softvera',
		'sifra' => 'SE211')
	);

	echo json_encode($predmeti);
?>