<?php

$page = null;
$page = $_GET;
$rubriques =[];

//Géstion de la rédirrection
foreach ($_GET as $key => $value)
{
	array_push($rubriques, $key);
};

foreach ($rubriques as $key => $value)
{
	if($value != 'page')
	{
		header('Location: index.php');
	}
};

//Navigation sur les rubriques
if ($page != null)
{
	$page = $_GET['page'];
	switch ($page)
	{
	case 'titre-1' :
		include 'index.phtml';
		break;
	case 'titre-2':
		include 'titre-2.phtml';
		break;
	case 'titre-3':
		include 'titre-3.phtml';
		break;
	case 'titre-4':
		include 'titre-4.phtml';
		break;
	case 'titre-5':
		include 'titre-5.phtml';
		break;
	default:
		include 'index.phtml';
		break;
	};
}
else
{
	include 'index.phtml';
};


//var_dump($rubriques);
//var_dump($_GET);
