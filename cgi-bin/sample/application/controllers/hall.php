<?php
 class hall extends CI_Controller
 {
  function __construct()
  {
    parent::__construct();
    $this->load->model('hallModel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  public function newHall()
  {
    $result = array('message'=>'');
    if($this->input->post('aud'))
	{
		$data = array(
			'auditorium' => $this->input->post('aud'),			
			'hall_type' => $this->input->post('hall'),	
            'amount' => $this->input->post('amount')					
		);
		$result['message'] = $this->hallModel->newHall($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('hall/newHall',$result);
    $this->load->view('template/footer');
  }
  function listHall()
  {
    $data['hallList']=$this->hallModel->listHall();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('hall/listHall',$data);
    $this->load->view('template/footer');
  }

  public function editHall($id)
  {
      $result = array('message'=>'');
      if($this->input->post('aud'))
      {
            $data = array(
			'auditorium' => $this->input->post('aud'),			
			'hall_type' => $this->input->post('hall'),	
            'amount' => $this->input->post('amount')    

  		   );
  		$result['message'] = $this->hallModel->editHall($data,$id);
      if($result['message'] == 'SUCCESS')
      {
        $base_url=base_url();
        redirect("$base_url"."hall/listHall");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['hall']=$this->hallModel->getHall($id);
    $this->load->view('hall/editHall',$result);
    $this->load->view('template/footer');
}
  public function deleteHall($id)
  {
    $this->hallModel->deleteHall($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['hallList']=$this->hallModel->listHall();
    $this->load->view('hall/listHall',$data);
    $this->load->view('template/footer');
  }

}
?>
