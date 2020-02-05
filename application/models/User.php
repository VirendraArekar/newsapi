<?php
   class User extends CI_Model{ 
    public $table;
    function __construct() { 
        // Set table name 
        $this->table = 'users'; 
        $this->load->database();
    } 
     
    function user_login($email,$password){ 
        $this->db->select('*'); 
        $this->db->from($this->table); 
        $this->db->where('email',$email)->where('password',$password);
        $query = $this->db->get();
        if($query->row()){
          return $query->row();
        }
        else{
             return false;
        }
    } 
     
    public function user_insert($data = array()) { 
        if(!empty($data)){ 
            if(!array_key_exists("created", $data)){ 
                $data['created_at'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists("modified", $data)){ 
                $data['updated_at'] = date("Y-m-d H:i:s"); 
            } 
            $insert = $this->db->insert($this->table, $data); 
            print_r($this->db->last_query());
            return $insert ?$this->db->insert_id() : false; 
        } 
        return false; 
    } 
}
?>