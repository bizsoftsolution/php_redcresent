 <?php
 class hallModel extends CI_Model {
 function __construct()
    {
              parent::__construct();
              $this->load->database();
    }
    function newHall($data)
{
      if($this->db->insert('hall',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

}
   function listHall()
   {
  $query = $this->db->get('hall');
  return $query->result();
    }

  function editHall($data,$id)
    {

      $this->db->where('id',$id);     
  
   if($this->db->update('hall',$data))
   {
     return "SUCCESS";
   }
   else {
     {
       return "FAILED";
     }
   }
        }

  function getHall($id){
  
    $this->db->select('*');
    $this->db->from('hall');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
    }
 function deleteHall($id)
    {
       $this->db->delete('hall', array('id' => $id));
    }
  }
?>
