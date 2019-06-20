
<?php
class m_admin extends CI_Model
{
    private $Title, $Price, $Img, $content, $description;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM featuredproducts");

        foreach ($query->result_array() as $row) {
            return $query->result_array();
        }
    }
    public function getimage()
    {
        $query = $this->db->query("SELECT IName FROM fileupload");

        foreach ($query->result_array() as $row) {
            return $query->result_array();
        }
    }
    public function getsingledata($id){
        $query = $this->db->query("SELECT * FROM featuredproducts WHERE Id_FProducts = $id");
        return $query->row_array();
    }

    public function getsinglecat($id){
        $query = $this->db->query("SELECT * FROM category WHERE idc = $id");
        return $query->row_array();
    }
    public function insert($data) {
        $sql="INSERT INTO `featuredproducts`  (`Id_FProducts`, `Title`, `Price`, `Img`, `content`, `description`, `created_date`) 
        VALUES (NULL,?,?,?,?,?, CURRENT_TIMESTAMP);";
        $this->db->query($sql,array($data['title'],$data['price'],$data['image'],$data['content'],$data['des']));
    }
    
    public function getbrandlist()
    {
        $query = $this->db->query("SELECT * FROM brand");

        foreach ($query->result_array() as $row) {
            return $query->result_array();
        }
    }

    public function getcategorylist()
    {
        $query = $this->db->query("SELECT * FROM category");

        foreach ($query->result_array() as $row) {
            return $query->result_array();
        }
    }
    public function insertbrand($data) {
        $sql="INSERT INTO `brand` (`b_id`, `b_name`, `b_image`, `b_active`)
        VALUES (NULL,?,?,1);";
        $this->db->query($sql,array($data['BName'],$data['image']));
    }
    public function insertimage($name) {
        $sql="INSERT INTO `fileupload` (`IDI`, `IName`) 
        VALUES (4,?);";
        $this->db->query($sql,$name);
    }
    
    public function insertcategory($data) {

        $sql="INSERT INTO `category` (`c_id`, `c_name`, `c_root_id`,`c_description`, `c_active`)
        VALUES (NULL,?,?,?,1);";
        $this->db->query($sql,array($data['CName'],$data['root'],$data['des']));
    }

    public function deletedata($id) {
        $this->db->delete('featuredproducts', array('Id_FProducts' => $id)); 
    }
    
    public function deletebrand($id) {
        $this->db->delete('brand', array('b_id' => $id)); 
    }

    
    public function deletecategory($id) {
        $this->db->delete('category', array('c_id' => $id)); 
    }
    public function updatedata($id,$data){
        $data = array(
            'Title' => $data['title'],
            'Price' => $data['price'],
            'Img' => $data['image'],
            'content' => $data['content'],
            'description' => $data['des']
    );
    
    $this->db->where('Id_FProducts', $id);
    $this->db->update('featuredproducts', $data);
    }

    public function updatecategory($id,$data){
        $data = array(
            'c_name' => $data['CName'],
            'c_root_id' => $data['root'],
            'c_description' => $data['des']
    );
    
    $this->db->where('c_id', $id);
    $this->db->update('category', $data);
    }
}
?>

    

