<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotspot_model extends CI_Model{

    /**
     * Function to add to the hotspot table
     * 
     * @param       array       $data_arg           Array containing hotspot details
     * @return      none
     */
    public function create($data_arg){
		$data_var = array(
			'name' => $data_arg['hotspot-name'],
			'description' => $data_arg['hotspot-description'],
            'infected' => $data_arg['hotspot-infected'],
            'radius' => $data_arg['hotspot-radius'],
			'lat' => $data_arg['lat'],
			'lng' => $data_arg['lng'],
            'creator_id' => $this->session->userdata('user')['id']
		);

	    $this->db->insert('hotspots',$data_var);
	}

    
    /**
     * Function to get and return all the hotspots
     * 
     * @param       none
     * @return      json        $objQuery           Contains all of the hotspots in the hotspots table
     */
    public function get_events(){
        $this->db->select('*');
        $this->db->from('hotspots');
        $objQuery = $this->db->get();

        return $objQuery->result_array();
    

    }

}