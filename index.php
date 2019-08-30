<?php

$headings = [ ["aikido" => "Aïkido"],
							["principes" => "Principes de l'Aïkido"],
							["relations" => "La relation Sempai-Kōhai"],
              ["qicong" => "Qi Gong"],
              ["adresse" => "Nous contacter"],];

$page = "aikido";

function print_nav($headings) {
  for ($i=0; $i < sizeof($headings); $i++) {
    foreach ($headings[$i] as $key => $value) {
      print '<li><a href=index.php?page='.$key.'>'.$value.'</a></li>';
    }
  }
};

include "header.phtml";

if ($_GET!=null) {
  switch ($_GET['page']) {

    case 'aikido':
      include 'aikido.phtml';
			$page = "aikido";
    break;
    case 'qicong':
      include  'qicong.phtml';
			$page = "qi-cong";
    break;
		case 'principes':
      include  'principes.phtml';
			$page = "principes";
    break;
		case 'relations':
      include  'relations.phtml';
			$page = "relations";
    break;
    case 'adresse':
      include  'adresse.phtml';
			$page = 'adresse';
    break;
    default:
      include "aikido.phtml";
			$page = "aikido";
    break;
  };
} else {
    include "aikido.phtml";
}

include "footer.phtml";
