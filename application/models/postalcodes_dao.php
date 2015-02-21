<?php

require_once  "abstractclass_basic_model.php";
class Postalcodes_Dao extends Abstractclass_basic_model 
{
	private $select;

	public function __construct(){
		$this->select = "id,
						 codigo_postal,
						 asentamiento,
						 tipo_asentamiento,
						 municipio,
						 estado,
						 codigo_estado,
						 ciudad";
	}


	public function getAllPostalCodes($select = FALSE){
		if($select){
			$this->select = $select;
		}
		$this->db->select($this->select);
		$this->db->from($this::DB_TABLE);
		$this->db->limit(5000);
		$query = $this->db->get();
		return $query;
	}

	public function getPostalCodesLike($code,$select =FALSE){
		if($select){
			$this->select = $select;
		}
		$this->db->select($this->select);
		$this->db->from($this::DB_TABLE);
		$this->db->like('codigo_postal', $code);
		$this->db->limit(150);
		$query = $this->db->get();
		return $query;
	}


	public function getPostalCodesByHoodState(array $query_data ,$select =FALSE){
		if($select){
			$this->select = $select;
		}
		$this->db->select($this->select);
		$this->db->from($this::DB_TABLE);
		$this->db->like('asentamiento', $query_data[0]);
		$this->db->where('codigo_estado', $query_data[1]);
		$this->db->limit(150);
		$query = $this->db->get();
		return $query;
	}


}