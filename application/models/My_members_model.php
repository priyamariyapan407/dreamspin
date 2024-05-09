<?php

class My_members_model extends CI_Model {

// public function getAllCategoryContestDetails(){
//     $contest_category_list_info = $this->db->get('contest_category_list')->result();
//     return $contest_category_list_info;
// }

public function getAllMyMembersDetails(){
    $my_members_info = $this->db->get('my_members')->result();
    return $my_members_info;
}

public function getMemberInfo($member){
    $query = $this->db->query('select * from my_members where member_id='.$member.'');
    $result = $query->result();
    return $result;
}

public function getCountry($countryId){
    $query = $this->db->query('select country_name from country where country_id=99');
    $result = $query->result();
    return $result;
}

public function getCity($cityId){
    $query = $this->db->query('select city_name from city where city_id=4793');
    $result = $query->result();
    return $result;
}

public function getState($stateId){
    $query = $this->db->query('select state_name from state where state_id=1084');
    $result = $query->result();
    return $result;
}

public function storeMembers($data){
    if($this->db->insert('my_members',$data)){
        $id = $this->db->insert_id();
        return $id;
    } else {
        return FALSE;
    }
}

public function getMyMemberById($id){
$query = $this->db->query("select * from my_members where auto_id=$id");
return $query->result();
}

// public function checkDuplicateCategory($category_contest_name){
//     $query = $this->db->query("select * from contest_category_list where contest_category_name='$category_contest_name'");
//     $result = $query->result();
//     if(!empty($result)){
//         return TRUE;
//     } else {
//         return false;
//     }
// }



public function updatemembersdetails($data,$member_id){
    $this->db->where('auto_id',$member_id);
    $this->db->update('my_members',$data);
    
}

public function deleteMember($id){
    $this->db->delete('my_members',['auto_id' => $id]);
}

public function getCountryList(){
   $country_list = $this->db->get('country')->result();
   return $country_list;
}


public function getStateList(){
    $state_list = $this->db->get('bind_masterstate')->result();
    return $state_list;
 }

 public function getCityList(){
    $city_list = $this->db->get('bind_masterdistrict')->result();
    return $city_list;
 }

 public function getStateByCntryId($country_id){
    $query = $this->db->query("select * from state WHERE country_id='$country_id'");
    return $query->result();
 }

 public function getCityByStateId($state_id){
    $query = $this->db->query("select * from bind_masterdistrict WHERE stateId='$state_id'");
    return $query->result();
 }

}
?>