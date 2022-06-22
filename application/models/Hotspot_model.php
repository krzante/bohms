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
            'color' => $data_arg['hotspot-color'],
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
    public function get_hotspots(){
        $this->db->select('*');
        $this->db->from('hotspots');
        $objQuery = $this->db->get();

        return $objQuery->result_array();
    }


    /**
     * Function to get a specific hotspot row 
     */
    public function get_hotspot($hotspot_id_arg){
        $this->db->where('id', $hotspot_id_arg);
        $query = $this->db->get('hotspots');
        return $query->row_array();
    }


    /**
     * Function to add to the hotspot table
     * 
     * @param       array       $data_arg           Array containing hotspot details
     * @return      none
     */
    public function update($hotspot_id_arg, $data_arg){
		$data_var = array(
			'name' => $data_arg['hotspot-name'],
			'description' => $data_arg['hotspot-description'],
            'infected' => $data_arg['hotspot-infected'],
            'radius' => $data_arg['hotspot-radius'],
            'color' => $data_arg['hotspot-color'],
            'creator_id' => $this->session->userdata('user')['id']
		);

        $this->db->trans_start();
        $this->db->from('hotspots');
        $this->db->set($data_var);
        $this->db->where('id', $hotspot_id_arg);
        $this->db->update('hotspots');
        $this->db->trans_complete();
	}

    /**
     * Function to delete from DB
     */
    public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('hotspots');
	}
}