<?php
class FrontModel extends CI_Model {
 function __construct()
    {
           parent::__construct();
          $this->load->database();
    }
   function slider()
   {
	   $query = $this->db->get('slider');
	   return $query->result();
   }
   
   function gallery()
   {
	   $query = $this->db->get('gallery');
	   return $query->result();
   }
  function galleryView($id)
   {
	   $this->db->where('id', $id);
	   $query = $this->db->get('gallery');
	   return $query->result();
   }
   
   function viewQuatation()
   {
	   $query = $this->db->get('quatation');
	   return $query->result();
   }
}
?>