<?php
 class Front extends CI_Controller
 {

  function __construct()
  {
    parent::__construct();
    $this->load->model('FrontModel','frontModel');
    $this->load->helper('url');
	  $this->load->library('session');
  }
  
  function index()
  {
	  $data['slider'] =$this->frontModel->slider();
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
	    $this->load->view('front/slider', $data);
		 $this->load->view('front/index');
		  $this->load->view('front/footer');
  }
  
  function service()
  {
	 $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/service');
		  $this->load->view('front/footer');  
  }
  
  function gallery()
  {
	 $data['gallery'] =$this->frontModel->gallery();
	$this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/gallery', $data);
		  $this->load->view('front/footer');   
  }
  function galleryView($id)
  {
	 $data['galleryView'] =$this->frontModel->galleryView($id);
	$this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/galleryView', $data);
		  $this->load->view('front/footer'); 
  }
  
  function viewQuatation()
  {
	 $data['quatationList'] =$this->frontModel->viewQuatation();
	 $this->load->view('front/top_bar');
	 $this->load->view('front/menu_bar');
     $this->load->view('front/viewQuatation', $data);
     $this->load->view('front/footer'); 
  }
  
  function about()
  {
	 $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/about');
		  $this->load->view('front/footer');   
  }
  
  function contact()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/contact');
		  $this->load->view('front/footer');  
  }
  function visionread()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/visionread');
		  $this->load->view('front/footer');   
  }
  function principleread()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/principleread');
		  $this->load->view('front/footer');   
  }
  
   function historyread()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/historyread');
		  $this->load->view('front/footer');   
  }
  
   function membersread()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/membersread');
		  $this->load->view('front/footer');   
  }
  
   function donateread()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/donateread');
		  $this->load->view('front/footer');   
  }
  
    function activityread()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/activityread');
		  $this->load->view('front/footer');   
  }
  
    function mediaread()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/mediaread');
		  $this->load->view('front/footer');   
  }
  
    function ampulance()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/ampulance');
		  $this->load->view('front/footer');   
  }
  
  
    function firstaid()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/firstaid');
		  $this->load->view('front/footer');   
  }
  
     function blooddonate()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/blooddonate');
		  $this->load->view('front/footer');   
  }
  
    function strategy()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/strategy');
		  $this->load->view('front/footer');   
  }
  
   function desaster()
  {
	  $this->load->view('front/top_bar');
	   $this->load->view('front/menu_bar');
		 $this->load->view('front/desaster');
		  $this->load->view('front/footer');   
  }
  
  
   function restore()
  {
	  $this->load->view('front/top_bar');
	  $this->load->view('front/menu_bar');
	  $this->load->view('front/restore');
	  $this->load->view('front/footer');   
  }
 }