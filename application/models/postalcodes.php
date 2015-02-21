<?php


require_once  "postalcodes_dao.php";
class Postalcodes extends Postalcodes_Dao
{
	const DB_TABLE = 'codigospostales';
	const DB_TABLE_PK = 'id';

	public $id;
    public $codigo_postal;
    public $asentamiento;
    public $tipo_asentamiento;
	public $municipio;
	public $estado;
	public $ciudad;
    public $d_CP;
    public $d_ciudad;
    public $codigo_estado;
    public $codigo_oficina;
    public $codigo_asentamiento;
    public $zona;
    public $clave_ciudad;

	public function exchangeArray($data)
    {   
        $this->id                       = $this->checkId(((isset($data['id'])) ? trim($data['id']) : 0)); 
        $this->codigo_postal            = (isset($data['codigo_postal'])) ? trim($data['codigo_postal']) : null;
        $this->asentamiento             = (isset($data['asentamiento'])) ? trim($data['asentamiento']) : null;
        $this->tipo_asentamiento        = (isset($data['tipo_asentamiento'])) ? trim($data['tipo_asentamiento']) : null;
        $this->municipio                = (isset($data['municipio'])) ? trim($data['municipio']) : null;
        $this->estado                   = (isset($data['estado'])) ? trim($data['estado']) : null;
        $this->ciudad                   = (isset($data['ciudad'])) ? trim($data['ciudad']) : null; 
        $this->d_CP                     = (isset($data['d_CP'])) ? trim($data['d_CP']) : null;
        $this->d_ciudad                 = (isset($data['d_ciudad'])) ? trim($data['d_ciudad']) : null;
        $this->codigo_estado            = (isset($data['codigo_estado'])) ? trim($data['codigo_estado']) : null;
        $this->codigo_asentamiento      = (isset($data['codigo_asentamiento'])) ? trim($data['codigo_asentamiento']) : null;
        $this->zona                     = (isset($data['zona'])) ? trim($data['zona']) : null;
        $this->clave_ciudad             = (isset($data['clave_ciudad'])) ? trim($data['clave_ciudad']) : null;
       
    }

    private function checkId($id){
        if(empty($id)){
            return 0;
        }
        return $id;
    }

   
}

