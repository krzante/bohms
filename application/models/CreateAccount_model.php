<?php

class CreateAccount_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function create($data){
        $hashedPass = password_hash($data['password'], PASSWORD_DEFAULT); // hash the password

		$data = array(
			'name' => $data['username'],
			'email' => $data['email'],
            'password' => $hashedPass,
			'Birthdate' => $data['dbirth'],
			'Position' => $data['position']
		);

		return $this->db->insert('user',$data);
	}
    public function keycheck($key){
        $this->db->select('*');
        $this->db->where('SecretKey', $key);
        $query = $this->db->get('key'); // Get key in database
        if ($query->num_rows() > 0) {
            $keyupdate = sha1(crypt(uniqid(), random_int(1000000, 9999999)));
            $data = array('SecretKey' => $keyupdate);
            $this->db->update('key',$data);
            return true;
        }
       
        return false; 
        
    }

}