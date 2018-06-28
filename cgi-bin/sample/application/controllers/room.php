<?php
 class room extends CI_Controller
 {
  function __construct()
  {
    parent::__construct();
    $this->load->model('roomModel');
    $this->load->helper('url');
	$this->load->library('session');
  }


 function roomList()
   {
    $data['roomList']=$this->roomModel->roomList();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('room/roomList',$data);
    $this->load->view('template/footer');
   }
 }