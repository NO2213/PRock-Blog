<?php 

class Posts_model extends CI_Model 
{

	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function fetch_data($UserId=array(''))
	{
		/*
		$this->load->database();
		$query = $this->db->get("posts");
		return $query->result();
		*/
		
		$this->db->select('posts.*, authors.fname, authors.lname');
	    $this->db->from('posts');
	    $this->db->join('authors', 'posts.author_id=authors.id', 'left');
	    if (isset($UserId['id'])) 
	    $this->db->where("posts.author_id='".$UserId['id']."'");
	    $this->db->order_by("posts.posted_date", "DESC");
	    $query = $this->db->get();
	    return $query;
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