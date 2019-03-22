<?php

class Kontak_model extends CI_Model
{
    public function getKontak($id=null)
    {
        if($id === null){
            return $this->db->get('kontak')->result_array();
        }else{
            return $this->db->get_where('kontak',['id' => $id])->result_array();
        }
    }

    public function createKontak($data)
    {
        $this->db->insert('kontak',$data);
        return $this->db->affected_rows();
    }

    public function updateKontak($data,$id)
    {
        $this->db->update('kontak', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteKontak($id)
    {
        $this->db->delete('kontak',['id' => $id]);
        return $this->db->affected_rows();
    }
}
