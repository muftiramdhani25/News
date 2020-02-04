<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // security

class News extends CI_Model {


	public function getNews($id = null) {
                $result = array();

                if($id) { //jika ada id yang dikirim maka get berdasaran id
                        $result = $this->db->get_where('news', ['id' => $id])->row();
                } else { // jika tidak ada maka tamplikan semua
                        $result = $this->db->get('news')->result();
                }

                return $result;
        }

        public function storeNews($data){
                return $this->db->insert('news', $data);
        }

        public function deleteNews($id){
                return $this->db->delete('news', ['id' => $id]);
        }

        public function updateNews($id, $data){
                $this->db->where('id', $id);
                $this->db->update('news', $data);
        }
	

	
}
