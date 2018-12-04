<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {

	public function getData(){
            return $this -> db -> query("SELECT id_supplier,email,alamat,nm_supplier,no_hp,keterangan,npwp FROM tb_supplier WHERE flag_supplier = '0'") -> result();
	}
        public function tambah(){
            $data = array(  'nm_supplier'   => $this->input->post('nama'),
                            'no_hp'         => $this->input->post('nohp'),
                            'email'         => $this->input->post('email'),
                            'alamat'        => $this->input->post('alamat'),
							'keterangan'	=> $this->input->post('keterangan'),
							'npwp'			=> $this->input->post('npwp')
							
                        );
            $this->db->insert('tb_supplier',$data);
        }
        public function edit(){
            $data = array(  'nm_supplier'   => $this->input->post('nama'),
                            'no_hp'         => $this->input->post('nohp'),
                            'email'         => $this->input->post('email'),
                            'alamat'        => $this->input->post('alamat'),
							'keterangan'	=> $this->input->post('keterangan'),
							'npwp'			=> $this->input->post('npwp')
							
                                );
            $this->db->where('id_supplier',$this->uri->segment(2));
            $this->db->update('tb_supplier',$data);
        }
         public function detail($id){
            $data = array('id_supplier' => $id);
            return $this->db->get_where('tb_supplier',$data);
        }
         public function delete(){

			$data = array('id_supplier' => $id);
            $this->db->where('id_supplier',$this->uri->segment(2));
			$this->db->delete('tb_supplier');
        }
}
