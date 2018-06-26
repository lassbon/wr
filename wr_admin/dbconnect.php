<?php

class db {

	public function __construct() {
		$this -> isConnected = true;

		try {
			$this -> datab = new PDO("mysql:host=localhost;dbname=wr_;charset=utf8", 'root', '');
            $this -> datab -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this -> datab -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		} catch(PDOException $e) {
			$this -> isConnected = false;
			throw new Exception($e -> getMessage());
		}
	}

	public function Disconnect() {
		$this -> datab = null;
		$this -> isConnected = false;
	}

	public function getRow($query, $params = array()) {
		try {
			$stmt = $this -> datab -> prepare($query);
			
			$stmt -> execute($params);
			return $stmt -> fetch();
		} catch(PDOException $e) {
			throw new Exception($e -> getMessage());
		}
	}

	public function getRows($query, $params = array()) {
		try {
			$stmt = $this -> datab -> prepare($query);
			$stmt -> execute($params);
			return $stmt -> fetchAll();
		} catch(PDOException $e) {
			throw new Exception($e -> getMessage());
		}
	}

	public function insertRow($query, $params) {
		try {
			$stmt = $this -> datab -> prepare($query);
			$stmt -> execute($params);
		} catch(PDOException $e) {
			throw new Exception($e -> getMessage());
		}
	}

	public function updateRow($query, $params) {
		return $this -> insertRow($query, $params);
	}

	public function deleteRow($query, $params) {
		return $this -> insertRow($query, $params);
	}
	
	
		public function createTable($query, $params) {
		try {
				$stmt = $this -> datab -> prepare($query);
				$stmt -> execute($params);
			} 
		catch(PDOException $e) {
			throw new Exception($e -> getMessage());
		}
	}

}

?>