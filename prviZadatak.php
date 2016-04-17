<?php
	$prvaStranica = $_POST['prvaStranica'];
	$drugaStranica = $_POST['drugaStranica'];
	header("Content-type: application/json");

	echo $prvaStranica;

	$niz = array(
		'povrsina' => ($prvaStranica * $drugaStranica),
		'obim' => ($prvaStranica * 2 + $drugaStranica * 2)
	);

	echo json_encode($niz);
?>