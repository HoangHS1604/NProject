
<?php
class m_admin extends CI_Model
{
    private $Title, $Price, $Img, $content, $description;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getsinglecat($id){
        $query = $this->db->query("SELECT * FROM category WHERE idc = $id");
        return $query->row_array();
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
    public function getproductlist() 
    {
        $query = $this->db->query("SELECT * FROM product");

        foreach ($query->result_array() as $row) {
            return $query->result_array();
        }
    }
    public function insertbrand($data) {
        $sql="INSERT INTO `brand` (`b_id`, `b_name`, `b_image`, `b_active`)
        VALUES (NULL,?,?,1);";
        $this->db->query($sql,array($data['BName'],$data['image']));
    }
    public function insertcategory($data) {

        $sql="INSERT INTO `category` (`c_id`, `c_name`, `c_root_id`,`c_description`, `c_active`)
        VALUES (NULL,?,?,?,1);";
        $this->db->query($sql,array($data['CName'],$data['root'],$data['des']));
    }
    public function insertproduct($data) {
        $sql="INSERT INTO product (p_id, p_name, p_description, p_price, p_createdday) VALUES (NULL,?,?,?, CURRENT_TIMESTAMP);";
        $this->db->query($sql,array($data['title'],$data['des'],$data['price']));
        $sql="INSERT INTO product_image (pi_name) VALUES (?);";
        $this->db->query($sql, array($data['image']));
    }
    public function deletebrand($id) {
        $this->db->delete('brand', array('b_id' => $id)); 
    }
    public function deletecategory($id) {
        $this->db->delete('category', array('c_id' => $id)); 
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

    

