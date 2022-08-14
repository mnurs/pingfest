
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Esport_model extends CI_Model
{
    private $_table = "pf_esport_data";

    public $user_id;
    public $team_name;
    public $leader;
    public $member;
    public $account_nickname; 
    public $account_id; 
    public $phone; 
    public $email; 
    public $institution; 

    public function rules()
    {
        return [];
    }

    public function countRow(){
        $query = $this->db->query('
            SELECT * FROM pf_esport_data
            join pf_users on pf_users.user_id = pf_uiux_data.user_id
        ');
        return $query->num_rows();
    }

    public function getAll()
    {
        $this->db->select('pf_esport_data.*'); 
        $this->db->from('pf_esport_data');
        $this->db->join('pf_users','pf_users.user_id = pf_esport_data.user_id'); 
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
        $this->team_name = $post["team_name"];
        $this->leader = $post["leader"];
        $this->member = $post["member"]; 
        $this->account_nickname = $post["account_nickname"]; 
        $this->account_id = $post["account_id"]; 
        $this->phone = $post["phone"]; 
        $this->emal = $post["emal"]; 
        $this->institution = $post["institution"]; 
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->user_id = $post["user_id"];
        $this->team_name = $post["team_name"];
        $this->leader = $post["leader"];
        $this->member = $post["member"]; 
        $this->account_nickname = $post["account_nickname"]; 
        $this->account_id = $post["account_id"]; 
        $this->phone = $post["phone"]; 
        $this->email = $post["email"]; 
        $this->institution = $post["institution"]; 
        return $this->db->update($this->_table, $this, array('user_id' => $post['user_id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("user_id" => $id));
    }
}