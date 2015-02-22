<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Data extends REST_Controller
{
	public function __construct()
    {
        parent::__construct();
        
        // Configure limits on our controller methods. Ensure
        // you have created the 'limits' table and enabled 'limits'
        // within application/config/rest.php
        //  $this->methods['user_get']['limit'] = 500; //500 requests per hour per user/key
        // $this->methods['user_post']['limit'] = 100; //100 requests per hour per user/key
        // $this->methods['user_delete']['limit'] = 50; //50 requests per hour per user/key
        $this->load->model('postalcodes');
    }
    
    public function postalcode_get(){

        $postal_code = $this->get('code');
        $search = @$this->get('search');
        $search = (isset($search)==TRUE)  ? $search: 'both';

        if(!$postal_code)
        {
        	$this->response(NULL, 400);
        }
        $query  = $this->postalcodes->getPostalCodesLike(array($postal_code,$search));
        $query2 = $query->result_array();
    	
        if($query2)
        {
            $this->response($query2, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'User could not be found'), 404);
        }
    }


    public function postalcodes_get()
    {
        $query  = $this->postalcodes->getAllPostalCodes();
        $query2 = $query->result_array();
        if($query2)
        {
            $this->response($query2, 200); // 200 being the HTTP response code
        }
        else
        {
            $this->response(array('error' => 'Couldn\'t find any Postal Codes!'), 404);
        }
    }


     public function postalcodes_statecode_get()
    {
        $state_code = $this->get('statecode');

        if(!$state_code)
        {
            $this->response(NULL, 400);
        }

        $query  = $this->postalcodes->getPostalCodesByStateCode($state_code);
        $query2 = $query->result_array();

        if($query2)
        {
            $this->response($query2, 200); // 200 being the HTTP response code
        }
        else
        {
            $this->response(array('error' => 'Couldn\'t find any Postal Codes!'), 404);
        }
    }

    //Get Mex postal codes for an state code and neightboorhood
    public function nbhd_state_get()
    {
        $hood = $this->get('nbhd');
        $search = @$this->get('search');
        $search = (isset($search)==TRUE)  ? $search: 'both';
        $statecode = $this->get('statecode');//01/31

        if(!$hood || !$statecode)
        {
            $this->response(NULL, 400);
        }

        $query  = $this->postalcodes->getPostalCodesByHoodState(array($hood,$statecode,$search));
        $query2 = $query->result_array();
        if($query2)
        {
            $this->response($query2, 200); // 200 being the HTTP response code
        }
        else
        {
            $this->response(array('error' => 'Couldn\'t find any Postal Codes!'), 404);
        }
    }



    //Get Mex postal states codes
    public function states_codes_get()
    {
        

        $query  = $this->postalcodes->getStatesAndCodes();
        $query2 = $query->result_array();
        if($query2)
        {
            $this->response($query2, 200); // 200 being the HTTP response code
        }
        else
        {
            $this->response(array('error' => 'Couldn\'t find any Postal Codes!'), 404);
        }
    }


}