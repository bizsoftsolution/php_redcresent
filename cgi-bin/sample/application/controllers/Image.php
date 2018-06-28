<?php
 class Image extends CI_Controller
 {

  function __construct()
  {
    parent::__construct();
    $this->load->model('ImageModel', 'imageModel');
    $this->load->helper('url');
	  $this->load->library('session');
  }

 public function addNew()
  {
    $result = array('message'=>'');	
	if($this->input->post('submit_image_data'))
		{	
			// multiple upload coding start
			
			$files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++){
			$_FILES['file']['name']= $files['file']['name'][$i];
			$_FILES['file']['type']= $files['file']['type'][$i];
			$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			$_FILES['file']['error']= $files['file']['error'][$i];
			$_FILES['file']['size']= $files['file']['size'][$i];
			$config['upload_path'] = './upload/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('file'))
			{
				$this->upload->data();
				$images[] = $_FILES['file']['name'];
			}
			}
			$fileName = implode(',',$images);
			
			// multiple upload coding End
			
            $userData = array(
				'categery'=>$this->input->post('category_name'),
				'img_name' => $fileName
            );          
			//Pass user data to model
			$result['message'] = $this->imageModel->addNew($userData);
			if($result['message'] == 'SUCCESS')
			{
				
				$base_url=base_url();
				redirect("$base_url"."Image/allgallery");
			}
        }		
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    //$this->load->view('template/content');
    $this->load->view('front/addNew', $result);
    $this->load->view('template/footer');
  }
  
  function allgallery()
  {
    $data['gallerylist']=$this->imageModel->gallerylist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('front/galleryList',$data);
    $this->load->view('template/footer');
  }
  public function edit($id)
  {
      $result = array('message'=>'');
      if($this->input->post('Category_name'))
      {
  		  $userData = array(
			'categery' => $this->input->post('Category_name')
  		);
  		$result['message'] = $this->imageModel->update_entry($userData,$id);
      if($result['message'] == 'SUCCESS')
      {
        $base_url=base_url();
        redirect("$base_url"."Image/allgallery");
      }
    }
	
	if($this->input->post('update_category_gallery'))
		{	
			// multiple upload coding start
			
			$files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++){
			$_FILES['file']['name']= $files['file']['name'][$i];
			$_FILES['file']['type']= $files['file']['type'][$i];
			$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			$_FILES['file']['error']= $files['file']['error'][$i];
			$_FILES['file']['size']= $files['file']['size'][$i];
			$config['upload_path'] = './upload/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('file'))
			{
				$this->upload->data();
				$images[] = $_FILES['file']['name'];
			}
			}
			$fileName = implode(',',$images);
			
			// multiple upload coding End
			
            $userData = array(
				'img_name' => $fileName
            );          
			//Pass user data to model
			$result['message'] = $this->imageModel->update_entry($userData,$id);
			if($result['message'] == 'SUCCESS')
			{
				
				$base_url=base_url();
				redirect("$base_url"."Image/allgallery");
			}
        }
		
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['galleryupdate']=$this->imageModel->get($id);
    $this->load->view('front/galleryupload',$result);
    $this->load->view('template/footer');
}

  public function delete($id)
  {
    $this->imageModel->delete_entry($id);
	$data['gallerylist']=$this->imageModel->gallerylist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('front/galleryList',$data);
    $this->load->view('template/footer');
  }
   
 function addSlider()
   {
	  $result = array('message'=>'');
   	   if($this->input->post('submit_image_data'))
      {
  		  $data = array(
            
			'img_name' => $this->input->post('photo')
			
  		  );
		 if($_FILES['photo']['name'])
           {
             $upload = $this->_do_upload2();
             $data['img_name'] = $upload;
           }
		   $result['message'] = $this->imageModel->addSlider($data);
      if($result['message'] == 'SUCCESS')
        {
         $base_url=base_url();
         redirect("$base_url"."Image/allslider");
       }
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('front/addSlider');
    $this->load->view('template/footer');
  }

  
  function allslider()
  {
    $data['sliderlist']=$this->imageModel->sliderlist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('front/sliderList',$data);
    $this->load->view('template/footer');
  }
  public function delete_slider($id)
  {
    $this->imageModel->delete_slider($id);
	$data['sliderlist']=$this->imageModel->sliderlist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('front/sliderList',$data);
    $this->load->view('template/footer');
  }

 public function updateSlider($id)
  {
      $result = array('message'=>'');
	   if($this->input->post('update_slider'))
      {
  		  $data = array(
            
			'img_name' => $this->input->post('photo')
			
  		  );
		  		 if($_FILES['photo']['name'])
           {
             $upload = $this->_do_upload();
             $data['img_name'] = $upload;
           }
		   $result['message'] = $this->imageModel->update_slider($data,$id);
      if($result['message'] == 'SUCCESS')
        {
         $base_url=base_url();
         redirect("$base_url"."Image/allslider");
       }
	  }
	  
	$this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['sliderupdate']=$this->imageModel->get_slider($id);
    $this->load->view('front/editSlider',$result);
    $this->load->view('template/footer');
	  
  }

function addQuatation()
  {
	  $result = array('message'=>'');
   	   if($this->input->post('add_quatation'))
      {
  		  $data = array(
            
			'img_name' => $this->input->post('photo')
			
  		  );
		  		 if($_FILES['photo']['name'])
           {
             $upload = $this->_do_upload1();
             $data['img_name'] = $upload;
           }
		   //var_dump($data);
		 $result['message'] = $this->imageModel->addQuatation($data);
      if($result['message'] == 'SUCCESS')
        {
         $base_url=base_url();
         redirect("$base_url"."Image/addQuatation");
       } 
	  }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('front/addQuatation');
    $this->load->view('template/footer');
  }

  function Quatationlist()
  {
    $data['Quatationlist']=$this->imageModel->Quatationlist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('front/Quatationlist',$data);
    $this->load->view('template/footer');	  
  }
  
  function deleteQuatation($id)
  {
	$success = $this->imageModel->delete_Quatation($id);
	$this->imageModel->delete_Quatation($id);
	$data['Quatationlist']=$this->imageModel->Quatationlist();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('front/Quatationlist',$data);
    $this->load->view('template/footer');
  }
  
private function _do_upload1()
  {
      $config['upload_path']          = 'upload/quatation';
      $config['allowed_types']        = 'pdf';
      $config['max_size']             = 2048; //set max size allowed in Kilobyte
      $config['max_width']            = 1200; // set max width image allowed
      $config['max_height']           = 1200; // set max height allowed
      $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('photo')) //upload and validate
      {
          $data['inputerror'][] = 'photo';
          $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
          $data['status'] = FALSE;
          echo json_encode($data);
          exit();
      }
      return $this->upload->data('file_name');
  }

 
  private function _do_upload()
  {
      $config['upload_path']          = 'upload';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 2048; //set max size allowed in Kilobyte
      $config['max_width']            = 2400; // set max width image allowed
      $config['max_height']           = 2400; // set max height allowed
      $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('photo')) //upload and validate
      {
          $data['inputerror'][] = 'photo';
          $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
          $data['status'] = FALSE;
          echo json_encode($data);
          exit();
      }
      return $this->upload->data('file_name');
  }
  
  private function _do_upload2()
  {
      $config['upload_path']          = 'upload';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 2048; //set max size allowed in Kilobyte
      $config['max_width']            = 2400; // set max width image allowed
      $config['max_height']           = 2400; // set max height allowed
      $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('photo')) //upload and validate
      {
          $data['inputerror'][] = 'photo';
          $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
          $data['status'] = FALSE;
          echo json_encode($data);
          exit();
      }
      return $this->upload->data('file_name');
  } 
   
 }
?> 
 