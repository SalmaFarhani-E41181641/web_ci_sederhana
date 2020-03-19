<?php 
 
class M_data extends CI_Model{
  
/**===========================================================*/
          /** Fungsi CREATE */
  
function input_data($data,$table){
		$this->db->insert($table,$data);
	}
/**===========================================================*/
  
/**===========================================================*/
          /** Fungsi READ */
  	  	 function tampil_data(){
				//  mengambil data pada tabel sampah
			   return $this->db->get('sampah');
			}
				public function tampil_data2(){
					// mengambil data pada tabel user
					return $this->db->get('user');
				}
// membuat function viewall untuk query join 2 tabel tersebut
				public function viewall(){
					$this->db->select('*');
					$this->db->from('sampah');
					// dimana nilai user.hp = sampah.hp
					$this->db->join('user', 'user.hp= sampah.hp');
					$query = $this->db->get();
					return $query->result();
				}
	}
