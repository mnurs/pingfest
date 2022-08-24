
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Poster_model extends CI_Model
{
    private $_table = "pf_poster_data";

    public $user_id;
    public $name;
    public $institution;
    public $phone;   
    public $email;   
    public $username_ig;  
    public $hasil;  

    public function rules()
    {
        return [];
    }

    public function countRow(){
        $query = $this->db->query('
            SELECT * FROM pf_poster_data
            join pf_users on pf_users.user_id = pf_poster_data.user_id
        ');
        return $query->num_rows();
    }

    public function getAll()
    {
        $this->db->select('pf_poster_data.*'); 
        $this->db->from('pf_poster_data');
        $this->db->join('pf_users','pf_users.user_id = pf_poster_data.user_id'); 
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post(); 
        $this->user_id = $post["user_id"];
        $this->name = $post["name"];
        $this->institution = $post["institution"]; 
        $this->phone = $post["phone"]; 
        $this->email = $post["email"]; 
        $this->username_ig = $post["username_ig"]; 
        $this->hasil = $post["hasil"]; 
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->user_id = $post["user_id"];
        $this->name = $post["name"];
        $this->institution = $post["institution"]; 
        $this->phone = $post["phone"]; 
        $this->email = $post["email"]; 
        $this->username_ig = $post["username_ig"]; 
        $this->hasil = $post["hasil"]; 
        return $this->db->update($this->_table, $this, array('user_id' => $post['user_id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("user_id" => $id));
    }
}