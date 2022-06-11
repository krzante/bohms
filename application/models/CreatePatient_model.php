<?php

class CreatePatient_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function create($data){


		$data = array(
			'patient_name' => $data['pat_name'],
			'health_case' => $data['hcase'],
            'date_of_case' => $data['dcase'],
			'birthplace' => $data['bplace'],
			'sex' => $data['sex'],
			'birthdate' => $data['bday'],
			'bloodtype' => $data['btype'],
			'current_health_status' => $data['CHS'],
			'medical_history' => $data['medhis']
		);

		return $this->db->insert('patient_records',$data);
	}

}