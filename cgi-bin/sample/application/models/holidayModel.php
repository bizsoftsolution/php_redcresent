 <?php
 class holidayModel extends CI_Model {
 function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function newHoliday($data)
{
      if($this->db->insert('public',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

}
   function listHoliday()
   {
  $query = $this->db->get('public');
  return $query->result();
    }

  function editHoliday($data,$id)
    {

      $this->db->where('id',$id);     
  
   if($this->db->update('public',$data))
   {
     return "SUCCESS";
   }
   else {
     {
       return "FAILED";
     }
   }
        }

  function getHoliday($id){
  
    $this->db->select('*');
    $this->db->from('public');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
    }
 function deleteHoliday($id)
    {
       $this->db->delete('public', array('id' => $id));
    }
  }
?>
