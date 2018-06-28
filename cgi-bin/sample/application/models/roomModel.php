<?php
 class roomModel extends CI_Model {
 function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	 
   function roomList()
   {
   $query = $this->db->get('room');
   return $query->result();
    }
 }
?> 