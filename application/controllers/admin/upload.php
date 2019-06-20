<?php

class Upload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('templates/admin/upload_form', array('error' => ' '));
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
        $config['max_size']     = '1000';
        $config['max_width'] = '1920';
        $config['max_height'] = '1080';
        $stringguid = GUID();
        $new_name = $stringguid;
        $config['file_name'] = $new_name;

        
            
               
            
        

        $this->load->library('upload', $config);

        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('templates/admin/upload_form', $error);
        } else {
            
            $imagename= $this->upload->data('file_name');
               $this->load->model('admin/m_admin');
               $this->m_admin->insertimage($imagename);
            
            $data = array('upload_data' => $this->upload->data());
            

            $this->load->view('templates/admin/upload_form');
        }
    }
    public function imagelist() {
        $this->load->model('admin/m_admin');
        $data['imagelist']=$this->m_admin->getimage();
        $this->load->view('templates/admin/upload_form', $data);
     }

}
