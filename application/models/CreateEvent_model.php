<?php

class CreateEvent_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}
	
	public function get_specific_event($id){
        $this->db->select('baranggay_event.*, user.name');
		$this->db->where('baranggay_event.id', $id);
        $this->db->join('user', 'user.id = baranggay_event.creator_id');
        $query = $this->db->get('baranggay_event');

        return $query->row_array();
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

	public function delete_event($id){
		$this->db->where('id', $id);
		$this->db->delete('baranggay_event');
		return true;
	}


}