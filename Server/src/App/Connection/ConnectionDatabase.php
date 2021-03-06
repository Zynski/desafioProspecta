<?php
namespace App\Connection;

	class ConnectionDatabase{

		private function db_connect() {
		    static $connection;

		   
		    if(!isset($connection)) {
		    
		        $config = parse_ini_file('config.ini'); 
		        $connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
		    }

		 
		    if($connection === false) {
		     
		        return mysqli_connect_error(); 
		    }
		    return $connection;
		}

		public function db_query($query) {
		   
		    $connection = $this->db_connect();

		   
		    $result = mysqli_query($connection,$query);

		    return $result;
		}

		
		
	}
	
?>
