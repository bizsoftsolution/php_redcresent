<?php
class ImageModel extends CI_Model {
 function __construct()
    {
           parent::__construct();
          $this->load->database();
    }
   function addNew($userData)
	{
      if($this->db->insert('gallery',$userData))
      {
        return "SUCCESS";
      }

	}
	function gallerylist()
{
 $query = $this->db->get('gallery');
  return $query->result();
    }

	function update_entry($userData,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
    //  $this->db->from('gallery');
   if($this->db->update('gallery',$userData))
   {
     return "SUCCESS";
   }
   else {
       return "FAILED";
   }
        }

  function get($id){
  //  $sql = "SELECT * FROM employee WHERE id = ?";
    //$query =$this->db->query($sql, array($id));
    $this->db->select('*');
    $this->db->from('gallery');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
    }
	function get_slider($id){
  //  $sql = "SELECT * FROM employee WHERE id = ?";
    //$query =$this->db->query($sql, array($id));
    $this->db->select('*');
    $this->db->from('slider');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
    }
	
function delete_entry($id)
    {
       $this->db->delete('gallery', array('id' => $id));
    }
	
	function addSlider($data)
	{
      if($this->db->insert('slider',$data))
      {
        return "SUCCESS";
      }

	}
  function sliderlist()
  {
  $query = $this->db->get('slider');
  return $query->result();
    }
	
	function delete_slider($id)
    {
       $this->db->delete('slider', array('id' => $id));
    }
	
	function delete_Quatation($id)
    {
       $this->db->delete('quatation', array('id' => $id));
	   //return "success";
    }

function addQuatation($data)
	{
      if($this->db->insert('quatation',$data))
      {
        return "SUCCESS";
      }

	}
 
	 function update_slider($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
    //  $this->db->from('gallery');
   if($this->db->update('slider',$data))
   {
     return "SUCCESS";
   }
   else {
       return "FAILED";
   }
     }
	 
	function Quatationlist()
   {
	   $query = $this->db->get('quatation');
	   return $query->result();
   } 
	
}
?>