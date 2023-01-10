<?php

class Database
{
	private $MYSQL_HOST="localhost"; // aynı sunucuda
	private $MYSQL_USER="root";
	private $MYSQL_PASS="";
	private $MYSQL_DB="e-ticaret";
	private $CHARSET="UTF8";
	private $COLLATİON="utf8_general_ci";
	private $pdo=null;
	private $stmt=null;

	private function ConnectDB()
	{
		//DATABASE CONNECTİON
		$SQL="mysql:host=".$this->MYSQL_HOST.";dbname=".$this->MYSQL_DB;
		try{
		$this->pdo=new \PDO($SQL,$this->MYSQL_USER,$this->MYSQL_PASS);
		$this->pdo->exec("SET NAMES '".$this->CHARSET."' COLLATE '".$this->COLLATİON."'");
		$this->pdo->exec("SET CHARACTER SET '".$this->CHARSET."'");
		$this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_OBJ);
		}catch(PDOException $e){
			die("PDO ile veri tabanı ulaşılamadı".$e->getMessage());
		}// try catch end
	}//ConnectDB end

	public function __construct()
	{
		$this->ConnectDB();
	}
	// Diğer metodlardaki tekrarlı verileri bitirmek için kullandığım metod
	private function myQuery($query, $params=null)
	{
		
		if (is_null($params)){
			$this->stmt=$this->pdo->query($query);
		}else{
			$this->stmt=$this->pdo->prepare($query);
			$this->stmt->execute($params);
		}
		return $this->stmt;
	}
	// çoklu veri kulanmak için kullandığım metod
	public function getRows($query, $params=null)
	{
		try {
			return $this->myQuery($query, $params)->fetchAll();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function getRow($query, $params=null)
	{
		// tek bir satır çekmek için kullandığım metod
		try {
			return $this->myQuery($query, $params)->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function getColumn($query, $params=null)
	{
		// tek satır ve sütun verisi çekmek için kullandığım metod
		try {
			return $this->myQuery($query, $params)->fetchColumn();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function Insert($query, $params=null)
	{
		try {
			$this->myQuery($query, $params);
			return $this->pdo->lastInsertId();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function Update($query, $params=null)
	{
		try {
			return $this->myQuery($query, $params)->rowCount();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function Delete($query, $params=null)
	{
			return $this->Update($query, $params);
	}


	public function __destruct()
	{
		//bağlantıyı kapat
		$this->pdo=null;
	}

} // class end


?>