 <?php
 class hotelModel extends CI_Model {
 function __construct()
    {
              parent::__construct();
              $this->load->database();
    }
    function newHotel($data)
{
      if($this->db->insert('room',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

}
   function hotelList()
   {
  $query = $this->db->get('room');
  return $query->result();
    }

  function editHotel($data,$id)
    {

      $this->db->where('room_id',$id);      //var_dump($id);exit();
     // $this->db->from('tbl_country');
   if($this->db->update('room',$data))
   {
     return "SUCCESS";
   }
   else {
     {
       return "FAILED";
     }
   }
        }

  function getHotel($id){
  //  $sql = "SELECT * FROM employee WHERE id = ?";
    //$query =$this->db->query($sql, array($id));
    $this->db->select('*');
    $this->db->from('room');
    $this->db->where('room_id',$id);
    $query = $this->db->get();
    return $query->result();
    }
 function deleteHotel($id)
    {
       $this->db->delete('room', array('room_id' => $id));
    }
  }
?>
