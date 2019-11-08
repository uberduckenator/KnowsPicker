<?php

class Model{
	protected static $_connection;
	
	public function __construct()
    {	
        $server = 'localhost';
        $DBName = 'test';
        $user = 'root';
        $pass = '';
    
        self::$_connection = new PDO("mysql:host=$server;dbname=$DBName;charset=utf8", $user, $pass);
        self::$_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
/*
	public function get($select,$classname){
        $stmt = self::$_connection->prepare($select);
        $stmt->execute();
    	$stmt->setFetchMode(PDO::FETCH_GROUP|PDO::FETCH_CLASS, $classname);
		return $stmt->fetchAll();
    }



/* commented

    public static function lastInsertId(){
    	return self::$_connection->lastInsertId();
    }


	protected function getProps(){
		//extract the deriving class name
		$exclusions = get_class_vars(__CLASS__);//properties from the Model base class to exclude from SQL
		
        //extract the deriving class properties
        $classProps = [];
		$array = get_object_vars($this);
		foreach ($array as $key => $value) {
			if(!array_key_exists($key, $exclusions))
				$classProps[] = $key;
		}
		return $classProps;
	}
	
	public function set($_data){
		$exclusions = get_class_vars(__CLASS__);//properties from the Model base class to exclude from SQL
		$array = get_object_vars($this);

		foreach ($array as $key => $value) {
			if(isset($_data[$key]) && !array_key_exists($key, $exclusions))
				$this->$key = $_data[$key];
		}
	}

	protected function toArray($properties){
        $data = [];
        foreach($properties as $prop)
            $data[$prop] = $this->$prop;
		return $data;
    }

    public function find($ID)
    {
		$selectOne 	= "$this->_select $this->_tableName WHERE $this->_PKName = :$this->_PKName";

        $stmt = self::$_connection->prepare($selectOne);
        $stmt->execute(array($this->_PKName=>$ID));

        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->_className);
		$value = $stmt->fetch();
		//TODO: should this cause an exception when no record is found?
        return $value;
    }

    // SELECT * FROM Client WHERE firstName = 'Jon' AND lastName = 'Doe'
    public function where($field, $op, $value, $quote=true){
        //TODO : only if this is a string-type value
        if ($quote)
			$value = self::$_connection->quote($value);
        if($this->_whereClause == '')
            $this->_whereClause .= "WHERE $field $op $value";
        else
            $this->_whereClause .= " AND $field $op $value";
        return $this;
    }

    // SELECT * FROM Client ... ORDER BY firstName ASC, lastName ASC
    public function orderBy($field, $order = 'ASC'){
        if($this->_orderBy == '')
            $this->_orderBy .= "ORDER BY $field $order";
        else
            $this->_orderBy .= ", $field $order";
        return $this;
    }

    public function distinct($column){
    	$this->_select	= "SELECT DISTINCT($column) FROM ";
    	return $this;
    }


	//run select statements
    public function get($PKArrayIndex = false){
		$select	= "$this->_select $this->_tableName $this->_whereClause $this->_orderBy";
        $stmt = self::$_connection->prepare($select);
        $stmt->execute();
        if(!$PKArrayIndex)
	        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->_className);
	    else
	    	$stmt->setFetchMode(PDO::FETCH_GROUP|PDO::FETCH_CLASS, $this->_className);
		return $stmt->fetchAll();
    }

	//don't insert the PK
	//TODO: get the last insert ID and place it in the PK field.
    public function insert($duplicateKey = []){
		$properties = $this->getProps();
		$insert = '';
		if (count($properties)  > 0){
			$insert = 'INSERT INTO ' . $this->_tableName . '(' . implode(',', $properties) . ') VALUES (:'. implode(',:', $properties) . ')';
			if(count($duplicateKey) > 0){
				$insert .= ' ON DUPLICATE KEY UPDATE ' . $this->makeSetClause($duplicateKey);
			}
		}
        $stmt = self::$_connection->prepare($insert);
        $stmt->execute($this->toArray($properties));
      //  if($stmt->rowCount() == 1)
	//		$this->$_PKName = $this->lastInsertId();
	//	elseif($stmt->rowCount() == 2)
		return $this->lastInsertId();
	}

	public function makeSetClause($properties){
		$setClause = [];
		foreach($properties as $item)
			$setClause[] = sprintf('%s = :%s', $item, $item);
		return implode(', ', $setClause);
	}

	//need the PK to do anything
	public function update(){
		$properties = $this->getProps();
		$update = '';
		if (count($properties)  > 0){
			$setClause = $this->makeSetClause($properties);
			$update = 'UPDATE ' . $this->_tableName . ' SET ' . $setClause . " WHERE $this->_PKName = :$this->_PKName";
		}
		
        $stmt = self::$_connection->prepare($update);
		$properties[] = $this->_PKName;//add the primary key because it is required for the statement
        $stmt->execute($this->toArray($properties));
	}

//TODO: add a parameter here
	public function deleteWhere($whereClause, $data=[]){
		$delete = "DELETE FROM $this->_tableName WHERE $whereClause";
        $stmt = self::$_connection->prepare($delete);
        $stmt->execute($data);
	}

	public function delete(){
		$delete = "DELETE FROM $this->_tableName WHERE $this->_PKName = :$this->_PKName";
        $stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->_PKName=>$this->{$this->_PKName}));
	}*/
}
?>
