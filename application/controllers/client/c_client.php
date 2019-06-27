<?php 
class c_client extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('templates/client/header');
        $this->load->view('templates/client/index');
        $this->load->view('templates/client/footer');
    }
    public function product()
    {
        $this->load->view('templates/client/header');
        $this->load->view('templates/client/product');
        $this->load->view('templates/client/footer');
    }
    public function product_detail()
    {
        $this->load->view('templates/client/header');
        $this->load->view('templates/client/product_detail');
        $this->load->view('templates/client/footer');
    }
}
?>