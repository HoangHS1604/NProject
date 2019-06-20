<?php 
class c_admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function do_upload()
    { 
         function GUID()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

        $config['upload_path'] = './public/upload/';
        $config['allowed_types'] = '*';
        $config['max_size']     = '10240';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $stringguid = GUID();
        $new_name = $stringguid;
        $config['file_name'] = $new_name;

        
            
               
            
        

        $this->load->library('upload', $config);

        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('brandlogo')) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            
            return $this->upload->data('file_name');
        }
    }

    public function insertbrand() {
        $this->load->view('templates/admin/headeradminLTE');
        $this->load->view('templates/admin/sidebarLTE');
        $this->load->view('templates/admin/insertLTE');
        $this->load->view('templates/admin/footeradminLTE');

        // $this->load->view('templates/admin/sidebar');
        // $this->load->view('templates/admin/insert');
        // $this->load->view('templates/admin/footer');
        if($this->input->post('submit') != NULL ) {
            $arr_product=$this->input->post();
            $arr_product['image']=$this->do_upload();
           $this->load->model('admin/m_admin');
           $this->m_admin->insertbrand($arr_product);
           
        }
    }

    public function insertcategory() {
        $this->load->model('admin/m_admin');
        $data['categorylist']=$this->m_admin->getcategorylist();
        $this->load->view('templates/admin/headeradminLTE');
        $this->load->view('templates/admin/sidebarLTE');
        $this->load->view('templates/admin/insertcategory',$data);
        $this->load->view('templates/admin/footeradminLTE');

        // $this->load->view('templates/admin/sidebar');
        // $this->load->view('templates/admin/insert');
        // $this->load->view('templates/admin/footer');
        if($this->input->post('submit') != NULL ) {
            $arr_product=$this->input->post();
           $this->load->model('admin/m_admin');
           $this->m_admin->insertcategory($arr_product);
           
        }
    }

    public function brandlist() {
        $this->load->model('admin/m_admin');
        $data['brandlist']=$this->m_admin->getbrandlist();
        $this->load->view('templates/admin/headeradminLTE');
        $this->load->view('templates/admin/sidebarLTE');
        $this->load->view('templates/admin/brandlist',$data);
        $this->load->view('templates/admin/footeradminLTE');
     }

     public function categorylist() {
        $this->load->model('admin/m_admin');
        $data['categorylist']=$this->m_admin->getcategorylist();
        $this->load->view('templates/admin/headeradminLTE');
        $this->load->view('templates/admin/sidebarLTE');
        $this->load->view('templates/admin/categorylist',$data);
        $this->load->view('templates/admin/footeradminLTE');
     }

    public function productlist() {
        $this->load->model('admin/m_admin');
        $data['productlist']=$this->m_admin->getdata();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/productlist',$data);
        $this->load->view('templates/admin/footer'); 
     }
     public function delete($id) {
            $this->load->model('admin/m_admin');
            $this->m_admin->deletedata($id);
        $data['productlist']=$this->m_admin->getdata();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/productlist',$data);
        $this->load->view('templates/admin/footer'); 
        
     }
     public function deletebrand($id) {
        $this->load->model('admin/m_admin');
        $this->m_admin->deletebrand($id);
        $data['brandlist']=$this->m_admin->getbrandlist();
        $this->load->view('templates/admin/headeradminLTE');
        $this->load->view('templates/admin/sidebarLTE');
        $this->load->view('templates/admin/brandlist',$data);
        $this->load->view('templates/admin/footeradminLTE');
    
 }
 public function deletecategory($id) {
    $this->load->model('admin/m_admin');
    $this->m_admin->deletecategory($id);
    $this->categorylist();
    // $data['categorylist']=$this->m_admin->getcategorylist();
    //     $this->load->view('templates/admin/headeradminLTE');
    //     $this->load->view('templates/admin/sidebarLTE');
    //     $this->load->view('templates/admin/categorylist',$data);
    //     $this->load->view('templates/admin/footeradminLTE');

}
     public function update($id){
        $this->load->model('admin/m_admin');
        $sdata['singledata']=$this->m_admin->getsingledata($id); 
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/update', $sdata);
        $this->load->view('templates/admin/footer');
        if($this->input->post('submit') != NULL ) {
            $arr_product=$this->input->post();
           $this->load->model('admin/m_admin');
           $arr_product['image']=$_FILES['file1']['name'];
           $this->m_admin->updatedata($id,$arr_product);
        }
        
     }

     public function updatecategory($id){
        $this->load->model('admin/m_admin');
        $sdata['singledata']=$this->m_admin->getsinglecat($id); 
        $data['categorylist']=$this->m_admin->getcategorylist();
        $this->load->view('templates/admin/headeradminLTE');
        $this->load->view('templates/admin/sidebarLTE');
        $this->load->view('templates/admin/updatecategory',$sdata,$data);
        $this->load->view('templates/admin/footeradminLTE');
        if($this->input->post('submit') != NULL ) {
           $arr_product=$this->input->post();
           $this->load->model('admin/m_admin');
           $this->m_admin->updatecategory($id,$arr_product);
        }
        
     }


}

?>