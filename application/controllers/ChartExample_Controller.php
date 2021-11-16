<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartExample_Controller extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
            $this->load->helper('url');
            // $this->load->library('session');
    }

	
	public function index()
	{
		$nextpageURL= base_url('startChart');
		$contents="<center><h1><b>Welcome to Chart Example</b></h1><a href='";
		$contents.=$nextpageURL;
		$contents.="'>continue >> </a></center>";
		echo $contents;
	}

	public function example1(){
		$this->load->view('chartExample');

	}
}
