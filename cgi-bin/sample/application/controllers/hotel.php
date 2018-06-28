<?php
 class hotel extends CI_Controller
 {
  function __construct()
  {
    parent::__construct();
    $this->load->model('hotelModel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  public function newHotel()
  {
    $result = array('message'=>'');
    if($this->input->post('room'))
	{
		$data = array(
			'room_type' => $this->input->post('room'),			
			'week_day_nube' => $this->input->post('nubed'),		
			'week_end_nube' => $this->input->post('nubee'),		
			'week_day_public' => $this->input->post('wdp'),		
			'week_end_public' => $this->input->post('wep')		
		);
		$result['message'] = $this->hotelModel->newHotel($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('hotel/newHotel',$result);
    $this->load->view('template/footer');
  }
  function hotelList()
  {
    $data['hotelList']=$this->hotelModel->hotelList();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('hotel/hotelList',$data);
    $this->load->view('template/footer');
  }

  public function editHotel($id)
  {
      $result = array('message'=>'');
      if($this->input->post('room'))
      {
            $data = array(
			'room_type' => $this->input->post('room'),			
			'week_day_nube' => $this->input->post('nubed'),		
			'week_end_nube' => $this->input->post('nubee'),		
			'week_day_public' => $this->input->post('wdp'),		
			'week_end_public' => $this->input->post('wep')	    

  		   );
  		$result['message'] = $this->hotelModel->editHotel($data,$id);
      if($result['message'] == 'SUCCESS')
      {
        $base_url=base_url();
        redirect("$base_url"."hotel/hotelList");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['hotel']=$this->hotelModel->getHotel($id);
    $this->load->view('hotel/updateHotel',$result);
    $this->load->view('template/footer');
}
  public function deleteHotel($id)
  {
    $this->hotelModel->deleteHotel($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['hotelList']=$this->hotelModel->hotelList();
    $this->load->view('hotel/hotelList',$data);
    $this->load->view('template/footer');
  }

}
?>
