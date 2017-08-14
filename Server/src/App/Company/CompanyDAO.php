<?php
namespace App\Company;

use App\Company\Company;


interface CompanyDAO{
	public function insertCompany($obj);
	public function showCompanies(); 
	public function deleteCompany($id);
	public function editCompany();
}

?>