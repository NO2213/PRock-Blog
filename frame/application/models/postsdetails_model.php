<?php 

class Postsdetails_model extends CI_Model 
{

	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function fetch_data($aid)
	{
		/*
		$this->load->database();
		$query = $this->db->get("posts");
		return $query->result();
		*/

		$this->db->select('posts.*, authors.fname, authors.lname');
	    $this->db->from('posts');
	    $this->db->join('authors', 'posts.author_id=authors.id', 'left');
	    $this->db->where("posts.id='$aid'");
	    
	    $query = $this->db->get();
	    return $query;
	}

}

?>