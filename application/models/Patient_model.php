<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model{
    
    public function __construct(){
		$this->load->database();
	}

    public function get_patientrecords(){
        $this->db->select('*');
        $this->db->from('patient_records');
        $this->db->order_by('patient_name', 'ASC');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function delete_patient($id){
		// echo $this->db->last_query();

		$this->db->where('id', $id);
		$this->db->delete('patient_records');
		return true;
	}
}