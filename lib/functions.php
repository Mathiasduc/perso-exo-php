<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/
$authorizedPages = array('contact', 'bio');
function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}else{
		$page =  __DIR__.'/../pages/'.$_GET['page'].'.php';
		if(in_array($_GET['p'], $authorizedPages) && file_exists($page)){
			return $page;
		}
		else{
			return '../parts/404.php';
		}
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function title(){
	if(isset($_GET['page'])	) {
		echo ucfirst(strtolower($_GET['page']));
	}else{
		echo "Home";
	}
}