
<?php
class Test extends CI_Controller {

public function index()
	{
		$this->load->view('test'); 
	}

      public function two()
	{
		$this->load->view('t1');
	}
  
	public function three()
	{
		$this->load->view('swap');
	}
}
?>
