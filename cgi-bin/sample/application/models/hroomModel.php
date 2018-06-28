 <?php
 class hroomModel extends CI_Model {
 function __construct()
    {
            parent::__construct();
            $this->load->database();
    }
    function addNew($data)
{
      if($this->db->insert('hotel',$data))
      {
        return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

}
   function list1()
   {
     $this->db->select('*');
     $this->db->from('hotel');
     $this->db->join('room', 'hotel.room_type = room.room_id','left'); 
     $query = $this->db->get();
     return $query->result();
    }

  function editroom($data,$id)
    {
     $this->db->where('id',$id);    
    
   if($this->db->update('hotel',$data))
   {
     return "SUCCESS";
   }
   else {
     {
       return "FAILED";
      }
    }
      }

  function getRoom($id)
    {
	 $this->db->select('*');
     $this->db->from('hotel');
	 $this->db->where('id',$id);
     $this->db->join('room', 'hotel.room_type = room.room_id','left'); 
     $query = $this->db->get();
     return $query->result();
    }
 function deleteroom($id)
    {
       $this->db->delete('hotel', array('id' => $id));
    }
	
	function newlist()
	{
	    $query = $this->db->get('room');
        return $query->result();
	}
  }
?>
