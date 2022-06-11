<?php

class CreateEvent_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function create($data){


		$data = array(
			'event_name' => $data['event_name'],
			'event_description' => $data['event_description'],
            'event_date' => $data['event_date'],
			'event_lat' => $data['event_lat'],
			'event_lng' => $data['event_lng'],
            'creator_id' => $this->session->userdata('user')['id']
		);

		return $this->db->insert('baranggay_event',$data);
	}

}