<?php

class Spin_model extends CI_Model {

public function getAllSpinDetails(){
    $spin_info = $this->db->get('spin_type')->result();
    return $spin_info;
}

public function storeSpin($data){
    $this->db->insert('spin_type',$data);
}

public function displayRecordsById($id){
  $query = $this->db->query("SELECT * from spin_type where spin_id=$id");
  return $query->result();
}


public function updateSpinInfo($id,$new_spin_name){
    $data=array('spin_type_name'=> $new_spin_name);
    $this->db->where('spin_id',$id);
    $this->db->update('spin_type',$data);
}

public function deletespin($id){
    $this->db->delete('spin_type',['spin_id' => $id]);
}
public function duplicateSpinCheck($spin_name){
    $query = $this->db->query("SELECT * from spin_type where spin_type_name='$spin_name'");
    $result = $query->result();
    if(!empty($result)){
    return TRUE;
    } else {
        return FALSE;
    }
}

}
?>