<?php
 class hroom extends CI_Controller
 {
  function __construct()
  {
    parent::__construct();
    $this->load->model('hroomModel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  public function addNew()
  {
    $result = array('message'=>'');
    if($this->input->post('room'))
	{
		$data = array(
			'room_type' => $this->input->post('room'),			
			'room_no' => $this->input->post('number')					
		  );
		$result['message'] = $this->hroomModel->addNew($data);
	  }
	$result1['select'] = $this->hroomModel->newlist();
   
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('hroom/addNew',$result1);
    $this->load->view('template/footer');
  }
  function list1()
  {
    $data['roomList']=$this->hroomModel->list1();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('hroom/list1',$data);
    $this->load->view('template/footer');
  }

  public function editroom($id)
  {
      $result = array('message'=>'');
      if($this->input->post('room1'))
      {
             //echo "value fetched";
			$data = array(
			'room_type' => $this->input->post('room1'),			
			'room_no' => $this->input->post('number1')		
			  );
			  
  	$result['message'] = $this->hroomModel->editroom($data,$id);
      if($result['message'] == 'SUCCESS')
      {
        $base_url=base_url();
        redirect("$base_url"."hroom/list1");
      }
     }
	
	$result['select'] = $this->hroomModel->newlist();
   
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['room']=$this->hroomModel->getRoom($id);
    $this->load->view('hroom/editroom',$result);
    $this->load->view('template/footer');
  }
  public function deleteroom($id)
  {
    $this->hroomModel->deleteroom($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['roomList']=$this->hroomModel->list1();
    $this->load->view('hroom/list1',$data);
    $this->load->view('template/footer');
  }

}
?>
