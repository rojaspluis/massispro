<?php

if(isset($_GET["opt"])){
	if($_GET["opt"]=="addtipoclientes"){
		$are = new AreasData();
		$are->area = $_POST["tipocliente"];
		$are->add();
		Core::redir("./?view=tipocliente");
	}
	else if($_GET["opt"]=="updatetipoclientes"){
		$are = AreasData::getById($_POST["idtipocliente"]);
		$are->area = $_POST["tipocliente"];
		$are->update();
		Core::redir("./?view=tipocliente");		
	}
	else if($_GET["opt"]=="deltipoclientes"){
		$are = AreasData::getById($_GET["idtipocliente"]);
		$are->del();
		Core::redir("./?view=tipocliente");
	}
}


?>