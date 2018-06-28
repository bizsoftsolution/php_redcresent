<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Front extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('countryModel');
		$this->load->helper('url');
		$this->load->library('session');
    }
	public function index()
	{
		if ($this->session->userdata('first_name')!=null) {
    	   if($this->session->userdata('user_id')!='')
		   {
				$result = array('message'=>'');
				if($this->input->post('name')){
					$data = array(
						'full_name' => $this->input->post('name'),			
						'ic_passport_no' => $this->input->post('name1'),			
						'age' => $this->input->post('name2'),			
						'sex' => $this->input->post('name3'),			
						'nationality' => $this->input->post('name4'),			
						'race' => $this->input->post('name5'),			
						'dob' => $this->input->post('name6'),			
						'contact_number' => $this->input->post('name7'),			
						'email_id' => $this->input->post('name8'),			
						'billing_address' => $this->input->post('name9'),			
						'post_code' => $this->input->post('name10'),			
						'city' => $this->input->post('name11'),			
						'state' => $this->input->post('name12'),			
						'country' => $this->input->post('name13'),			
						'payment_method' => $this->input->post('name14'),			
						'school_name' => $this->input->post('name15'),			
						't_shirt_adult' => $this->input->post('name16'),			
						't_shirt_kids' => $this->input->post('name17'),			
						'emergency_contact_name' => $this->input->post('name18'),			
						'emergency_contact_no' => $this->input->post('name19'),			
						'emergency_contact_relationship' => $this->input->post('name20'),			
								
						'parent_name' => $this->input->post('name21'),			
						'parent_ic_no' => $this->input->post('name22')		
					);
					$result['message'] = $this->countryModel->newCountry($data);
					if($result['message'] == 'SUCCESS')
					{
								$config = Array(
	  'protocol' => 'smtp',
	  'smtp_host' => 'sg2plcpnl0114.prod.sin2.secureserver.net',
	  'smtp_port' => 465,
	  'smtp_user' => 'mail@redcrescentklang.com', // change it to yours
	  'smtp_pass' => 'test123!@#', // change it to yours
	  'mailtype' => 'html',
	  'charset' => 'iso-8859-1',
	  'wordwrap' => TRUE
	);

        $message = 'wdewdwww';
        $this->load->library('email', $config);
      //$this->email->set_newline("\r\n");
      $this->email->from('mail@redcrescentklang.com'); // change it to yours
      $this->email->to('anitha.bizsoft@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }
					}
				  }
				$this->load->view('front');
				
		   }
		   else
		   {
				redirect('Login');
			}
		}
		else
		{
			redirect('Login');
		}
	}
	function sendMail()
	{
		$config = Array(
	  'protocol' => 'smtp',
	  'smtp_host' => 'sg2plcpnl0114.prod.sin2.secureserver.net',
	  'smtp_port' => 465,
	  'smtp_user' => 'mail@redcrescentklang.com', // change it to yours
	  'smtp_pass' => 'test123!@#', // change it to yours
	  'mailtype' => 'html',
	  'charset' => 'iso-8859-1',
	  'wordwrap' => TRUE
	);

        $message = 'wdewdwww';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('mail@redcrescentklang.com'); // change it to yours
      $this->email->to('anitha.bizsoft@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }
	}

}


?>
