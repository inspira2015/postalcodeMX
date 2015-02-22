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

	public function getPostalCodesLike(array $query_data,$select =FALSE){
		if($select){
			$this->select = $select;
		}
		$this->db->select($this->select);
		$this->db->from($this::DB_TABLE);
		$this->db->like('codigo_postal', $query_data[0],$query_data[1]);
		$this->db->limit(250);
		$query = $this->db->get();
		return $query;
	}

	public function getPostalCodesByHoodState(array $query_data ,$select =FALSE){
		if($select){
			$this->select = $select;
		}

		$this->db->select($this->select);
		$this->db->from($this::DB_TABLE);
		$this->db->like('asentamiento', $query_data[0], $query_data[2]);
		$this->db->where('codigo_estado', $query_data[1]);
		$this->db->limit(250);
		$query = $this->db->get();
		return $query;
	}

	public function getPostalCodesByStateCode($code,$select =FALSE){
		if($select){
			$this->select = $select;
		}
		$this->db->select($this->select);
		$this->db->from($this::DB_TABLE);
		$this->db->where('codigo_estado', $code);
		$query = $this->db->get();
		return $query;
	}


	public function getStatesAndCodes(){
		$this->db->distinct();
		$this->db->select('codigo_estado,estado');
		$this->db->from($this::DB_TABLE);
		$this->db->order_by("codigo_estado");

		$query = $this->db->get();
		return $query;
	}
}