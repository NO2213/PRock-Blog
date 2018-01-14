<?php 

class Config_model extends CI_Model 
{

	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function config_settings()
	{
		$query = $this->db->get("settings_config");
		foreach ($query->result() as $res) 
	    {
	    define($res->title, $res->value);
	    }
	}

	
}

?>