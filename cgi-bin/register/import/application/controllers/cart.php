<?php
class Cart extends CI_Controller
{
	function Cart()
	{
		parent::__construct();
		
		$this->load->library('cart');
		$this->load->helper('form');
		$this->load->database();
	}
	
	/*
	*	Display cart using view_cart function
	*/
	function index()
	{
		$this->view_cart();	
	}
	
	/*
	*	Add item to shopping cart
	*/
	function add()
	{
		$product_id = $this->input->post('product_id');
		
		//Check for valid product id
		$query = $this->db->get_where('product',array('product_id'=>$product_id),1);
		if($query->num_rows() > 0)
		{
			$item = $query->row();
			
			$data = array('id' => $item->product_id,
						  'qty' => 1,
						  'price' => $item->product_price,
						  'name' => $item->product_sku .' '.$item->product_description
						  );
			
			$this->cart->insert($data);
		}
		redirect('cart/view_cart');
	}
	/*
	*	Delete item from cart
	*/
	function delete()
	{
		$row_id = $this->uri->segment(3,FALSE);
		$data = array('rowid'=>$row_id,
					  'qty' => 0);
		$this->cart->update($data);
		
		redirect('cart/view_cart');
	}
	
	/*
	*	Empty cart contents
	*/
	function empty_cart()
	{
		
		$this->cart->destroy();
		redirect('cart/view_cart');
	}
	
	/*
	*	Update items in cart
	*/
	function update()
	{
		
		//Get number of items in cart
		$count = $this->cart->total_items();
		
		//Get info from POST
		$item = $this->input->post('rowid');
	    $qty = $this->input->post('qty');
		
		//Step through items
		for($i=0;$i < $count;$i++)
		{
			$data = array(
               'rowid' => $item[$i],
               'qty'   => $qty[$i]
            );
			$this->cart->update($data);
		}
		
		redirect('cart/view_cart');
	}
	
	
	/*
	*	Display shopping cart contents
	*/
	function view_cart()
	{
		
		$data['custom_jquery'] = '
		$("input[name=\'delete\']").click(function(){
		   var status = $(this).val();
		   location.href = "'.site_url('cart/delete').'/" + status; 
			
})';
		$data['page_title'] = 'View Cart';
		$this->load->view('header.php');
		$this->load->view('cart/view',$data);
		$this->load->view('footer.php');
	}
	
	/*
	*	Display items for sale
	*/
	function view_items()
	{
	
		//Get item from DB
		$query = $this->db->get('product');
		$data['items'] = $query;
		
		$this->load->view('header.php');
		$data['page_title'] = 'View Items for Sale';

		$this->load->view('cart/view_items',$data);
		$this->load->view('footer.php');
	}
	
	
}