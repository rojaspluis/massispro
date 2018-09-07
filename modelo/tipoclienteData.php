<?php
class tipoclienteData {
	public static $tablename = "tipocliente";
	public function tipoclienteData(){
		$this->tipocliente = "";
		
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (tipocliente) ";
		echo $sql .= "value (\"$this->tipocliente\")";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where idtipocliente=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where idtipocliente=$this->idtipocliente";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set tipocliente=\"$this->tipocliente\" where idtipocliente=$this->idtipocliente";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where idtipocliente=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new tipoclienteData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new tipoclienteData());
	}

	public static function getLast10(){
		$sql = "select * from ".self::$tablename." order by created_at desc limit 10";
		$query = Executor::doit($sql);
		return Model::many($query[0],new tipoclienteData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or content like '%$q%'";
		$query = Executor::doit($sql);
        return Model::many($query[0],new tipoclienteData());
	}


}

?>