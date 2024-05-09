<?php

class Banner_model extends CI_Model {

public function getAllBannerDetails(){
    $banners = $this->db->get('banners')->result();
    return $banners;
}



public function storebanner($data){
    $this->db->insert('banners',$data);
}

public function getBannerDetailsById($id){
$query = $this->db->query("select * from banners where banner_id=$id");
return $query->result();
}

public function checkDuplicateCategory($category_contest_name){
    $query = $this->db->query("select * from contest_category_list where contest_category_name='$category_contest_name'");
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


public function updatebannerInfo($data,$banner_id){
    // $data=array('spin_type_name'=> $new_spin_name);
    $this->db->where('banner_id ',$banner_id);
    $this->db->update('banners',$data);
    
}

public function deletebanner($id){
    $this->db->delete('banners',['banner_id' => $id]);
}

public function getBannerLst(){
   $banner = $this->db->query("select banner_id,banner_url,status from banners");
   return $banner->result();
}

public function getSpinLst(){
    $spin_type = $this->db->query("SELECT spin_type.spin_type_name,contest_category_list.contest_category_name,contest_list.contest_name1,contest_list.contest_name2,contest_list.contest_name3,contest_list.contest_name4,contest_list.contest1_status,contest_list.contest2_status,contest_list.contest3_status,contest_list.contest4_status
    FROM spin_type
    JOIN contest_category_list ON spin_type.spin_id  = contest_category_list.spin_id
    JOIN contest_list ON contest_category_list.contest_category_id = contest_list.contest_category_id");
    return $spin_type->result();
 }

}
?>