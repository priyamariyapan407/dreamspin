<?php

class Contest_category_model extends CI_Model {

public function getAllCategoryContestDetails(){
    $contest_category_list_info = $this->db->get('contest_category_list')->result();
    return $contest_category_list_info;
}

public function getAllSpinDetails(){
    $spin_type_info = $this->db->get('spin_type')->result();
    return $spin_type_info;
}

public function storeCategory($data){
    $this->db->insert('contest_category_list',$data);
}

public function getAllCatInfoById($id){
$query = $this->db->query("select * from contest_category_list where contest_category_id=$id");
return $query->result();
}

public function checkDuplicateCategory($category_contest_name,$spin_id){
    $query = $this->db->query("select * from contest_category_list where contest_category_name='$category_contest_name' and spin_id='$spin_id'");
    $result = $query->result();
    if(!empty($result)){
        return TRUE;
    } else {
        return false;
    }
}

// public function displayRecordsById($id){
//   $query = $this->db->query("SELECT * from spin_type where spin_id=$id");
//   return $query->result();
// }


public function saveCategory($data,$cat_id){
    // $data=array('spin_type_name'=> $new_spin_name);
    $this->db->where('contest_category_id',$cat_id);
    $this->db->update('contest_category_list',$data);
    
}

public function deletecategory($id){
    $this->db->delete('contest_category_list',['contest_category_id' => $id]);
}

}
?>