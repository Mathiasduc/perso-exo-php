<?php
function getContent(){
	$authorizedPages = array('contact', 'bio', 'admin', 'cv');
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}else{
		$page =  __DIR__.'/../pages/'.$_GET['page'].'.php';
		if(in_array($_GET['page'], $authorizedPages) && file_exists($page)){
			include $page;
		}
		else{
			include '../parts/404.php';
		}
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function isActive($page){
	if(!isset($_GET['page'])){
		if($page === ''){
			echo "class='item active'";
		}
		else{
			echo "class='item'";
		}
	}elseif ($page === $_GET['page']){
		echo "class='item active'";
	}else{
		echo "class='item'";
	}
}

function getLastMessage(){
	return json_decode(file_get_contents('./../data/last_message.json'),true);
}

function title(){
	if(isset($_GET['page'])	) {
		echo ucfirst(strtolower($_GET['page']));
	}else{
		echo "Home";
	}
}