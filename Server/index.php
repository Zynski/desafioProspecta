<?php
    header('Content-Type: application/json');

	require "vendor\autoload.php";

	$conteudo = file_get_contents("php://input");


	$companyController = new App\Company\CompanyController();


	switch($_SERVER['REQUEST_METHOD']) {
		case "GET":
				echo $companyController->getAll();	  				
		break;

		case "POST": 
				echo $companyController->post($conteudo);
		break;

		case "DELETE": 

				echo $companyController->delete($conteudo);

		break;

	}

	

?>