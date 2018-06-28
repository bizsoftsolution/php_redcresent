<?php
 class holiday extends CI_Controller
 {
  function __construct()
  {
    parent::__construct();
    $this->load->model('holidayModel');
    $this->load->helper('url');
	$this->load->library('session');
  }
  public function newHoliday()
  {
    $result = array('message'=>'');
    if($this->input->post('date'))
	{
		$data = array(
			'date1' => $this->input->post('date'),			
            'details' => $this->input->post('details')					
		);
		$result['message'] = $this->holidayModel->newHoliday($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('holiday/newHoliday',$result);
    $this->load->view('template/footer');
  }
  function listHoliday()
  {
    $data['holiList']=$this->holidayModel->listHoliday();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('holiday/listHoliday',$data);
    $this->load->view('template/footer');
  }

  public function editHoliday($id)
  {
      $result = array('message'=>'');
      if($this->input->post('date'))
      {
            $data = array(
			'date1' => $this->input->post('date'),			
			'details' => $this->input->post('details')   

  		   );
  		$result['message'] = $this->holidayModel->editHoliday($data,$id);
      if($result['message'] == 'SUCCESS')
      {
        $base_url=base_url();
        redirect("$base_url"."holiday/listHoliday");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['hall']=$this->holidayModel->getHoliday($id);
    $this->load->view('holiday/editHoliday',$result);
    $this->load->view('template/footer');
}
  public function deleteHoliday($id)
  {
    $this->holidayModel->deleteHoliday($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['holiList']=$this->holidayModel->listHoliday();
    $this->load->view('holiday/listHoliday',$data);
    $this->load->view('template/footer');
  }

}
?>
