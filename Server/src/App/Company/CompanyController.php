<?php
namespace App\Company;

class CompanyController {
	private $DAO;


	public function __construct(){
		$this->DAO = new CompanyDAOMySql;		
	}

	public function getOne(){
		return "Teste";
	}

	public function getAll(){

		return $this->DAO->showCompanies();
	
	}

	public function post($obj) {
		return $this->DAO->insertCompany($obj);
	}

	public function put() {
		return $this->DAO->editCompany();
	}

	public function delete($id) {
		return $this->DAO->deleteCompany($id);
	}
}
?>