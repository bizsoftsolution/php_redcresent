<?php
class island extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('islandModel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  public function newIsland()
  {
    $result = array('message'=>'');
    $result['countryList'] = $this->islandModel->countryList();
    if($this->input->post('name')){
		$data = array(
			'island_name' => $this->input->post('name'),
      'country_id' => $this->input->post('country_id')     			
		);
		$result['message'] = $this->islandModel->newIsland($data);
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('island/newIsland',$result);
    $this->load->view('template/footer');
  }
  function islandList()
  {
    $data['islandList']=$this->islandModel->islandList();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('island/islandList',$data);
    $this->load->view('template/footer');
  }

  public function editIsland($id)
  {
      $result = array('message'=>'');
      if($this->input->post('name'))
      {
  		  $data = array(
        'island_name' => $this->input->post('name'),
        'country_id' => $this->input->post('country_id')
  		);
  		$result['message'] = $this->islandModel->editIsland($data,$id);
      if($result['message'] == 'SUCCESS')
      {
        $base_url=base_url();
        redirect("$base_url"."island/islandList");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['island']=$this->islandModel->getIsland($id);
    $this->load->view('island/updateIsland',$result);
    $this->load->view('template/footer');
}
  public function deleteIsland($id)
  {
    $this->islandModel->deleteIsland($id);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['islandList']=$this->islandModel->islandList();
    $this->load->view('island/islandList',$data);
    $this->load->view('template/footer');
  }

}
?>
