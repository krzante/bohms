<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
    
    public function __construct(){
		$this->load->database();
	}

    public function get_events(){
        $this->db->select('*');
        $this->db->from('baranggay_event');
        $this->db->order_by('date_created', 'DESC');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
       
        // $query = $this->db->get_where('baranggay_event', array('id' => $id));
       // return $query->row_array();

      //  $id = $baranggay_event['id'];
       // $query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
	  // $baranggay_event['event_name'] = $query->row()->{'event_name'};

    }

    public function getrow($id){
        $this->db->select('*');
        $this->db->from('baranggay_event');
        $this->db->where('id=', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();   
    }

}