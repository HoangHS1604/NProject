
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
    public function insert($data) {
        var_dump($data);
        $sql="INSERT INTO `featuredproducts` (`Id_FProducts`, `Title`, `Price`, `Img`, `content`, `description`, `created_date`) 
        VALUES (NULL,?,?,?,?,?, CURRENT_TIMESTAMP);";
        $this->db->query($sql,array($data['title'],$data['price'],$data['image'],$data['content'],$data['des']));
    }
}
?>

    

