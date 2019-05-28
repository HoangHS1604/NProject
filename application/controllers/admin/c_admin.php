<?php 
class c_admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function insert() {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/insert');
        $this->load->view('templates/admin/footer');
        if($this->input->post('submit') != NULL ) {
            $arr_product=$this->input->post();
           $this->load->model('admin/m_admin');
           $arr_product['image']=$_FILES['file1']['name'];
           $this->m_admin->insert($arr_product);
        }
    }
    public function productlist() {
        $this->load->model('admin/m_admin');
        $data['productlist']=$this->m_admin->getdata();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/productlist',$data);
        $this->load->view('templates/admin/footer'); 
     }
}

?>