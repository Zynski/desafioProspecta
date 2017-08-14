<?php
	namespace App\Company;

	use App\Company\CompanyDAO;
	use App\Company\Company;
	use App\Connection\ConnectionDatabase;
	use \ArrayObject;

	
	class CompanyDAOMySql implements CompanyDAO {
		
		private $connectionDatabase;
		private $company;
		
		
		public function __construct(){
			$this->connectionDatabase = new ConnectionDatabase;
		
		}
		public function insertCompany($obj){	

			$json = json_decode( $obj );

			$sql = "INSERT INTO empresas (nomeFantasia,razaoSocial, cnpj, ddd, telefone, site) VALUES ('$json->razaoSocial','$json->nomeFantasia','$json->cnpj','$json->ddd','$json->telefone','$json->site')";
			
			$result = $this->connectionDatabase->db_query($sql);
				
			if($result === false){
				return "500";
			}else{
				return "200";	
			}		
		}

		public function showCompanies(){		
			$result = $this->connectionDatabase->db_query("SELECT * FROM empresas");

			if($result === false){
				return "500";
			}else{

					$arrayReturn = array();
					while($row = $result->fetch_array(MYSQL_ASSOC)) {
					        $arrayReturn[] = $row;
					}
					return json_encode($arrayReturn);
				}	

			}
	
		public function deleteCompany($id){
			$result = $this->connectionDatabase->db_query("DELETE FROM empresas WHERE id ='$id'");

			if($result === false){
				return "500";
			}else{

				return "200";
			}
		}
		
		public function editCompany(){
			
			return "500";
		}
		
	}
?>