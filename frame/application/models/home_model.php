<?php 

class Home_model extends CI_Model 
{

	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function fetch_data()
	{
		/*
		$this->load->database();
		$query = $this->db->get("posts");
		return $query->result();
		*/

		$this->db->select('posts.*, authors.fname, authors.lname');
	    $this->db->from('posts');
	    $this->db->join('authors', 'posts.author_id=authors.id', 'left'); 
	    $this->db->order_by("posts.posted_date", "DESC");
	    $query = $this->db->get();
	    return $query;
	}

}

?>