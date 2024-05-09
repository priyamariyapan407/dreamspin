<?php

class Contest_list_model extends CI_Model {

public function getAllContestListDetails(){
    $contest_list_info = $this->db->get('contest_list')->result();
    return $contest_list_info;
}

public function getAllCategoryContestDetails(){
    $contest_category_list_info = $this->db->get('contest_category_list')->result();
    return $contest_category_list_info;
}

public function getAllSpinDetails(){
    $spin_type_info = $this->db->get('spin_type')->result();
    return $spin_type_info;
}

public function storeContest($data){
    $this->db->insert('contest_list',$data);
}

public function getCategoryBySpinId($spin_id){
    return $this->db->where('spin_id',$spin_id)->get('contest_category_list')->result();
}

public function getContestListBySpinId($spin_id){
    return $this->db->where('spin_id',$spin_id)->get('contest_list')->result();
}

public function getAllCatContInfoById($id,$cat_name){
    if($cat_name == 1){
        $contest_name ='contest_name1';
        $status ='contest1_status';
    } else if ($cat_name == 2){
        $contest_name ='contest_name2';
        $status ='contest2_status';
    } else if ($cat_name == 3){
        $contest_name ='contest_name3';
        $status ='contest3_status';
    } else {
        $contest_name ='contest_name4';
        $status ='contest4_status';
    }
    $query = $this->db->query("select $contest_name,$status,contest_id  from contest_list where contest_id =$id");
    return $query->result();
}

public function getContestListBySpinIdAndCatId($selected_spin_id,$selected_cat_id)
{
    $query = $this->db->query("select * from contest_list where contest_category_id=$selected_cat_id and spin_id=$selected_spin_id");
    return $query->result();
}



public function updatecontentlist($contest_id,$contest_position,$new_contest_name){
    if($contest_position == 1){
        $contest_name ='contest_name1';
    } else if ($contest_position == 2){
        $contest_name ='contest_name2';
    } else if ($contest_position == 3){
        $contest_name ='contest_name3';
    } else {
        $contest_name ='contest_name4';
    }
    $contest_qry = $this->db->query("update contest_list set $contest_name='$new_contest_name' where contest_id=$contest_id");

}

public function editcontentlist($contest_id,$contest_position,$new_contest_name,$contest_status_val){
    if($contest_position == 1){
        $contest_name ='contest_name1';
        $contest_status ='contest1_status';
    } else if ($contest_position == 2){
        $contest_name ='contest_name2';
        $contest_status ='contest2_status';
    } else if ($contest_position == 3){
        $contest_name ='contest_name3';
        $contest_status ='contest3_status';
    } else {
        $contest_name ='contest_name4';
        $contest_status ='contest4_status';
    }
    $contest_qry = $this->db->query("update contest_list set $contest_name='$new_contest_name',$contest_status=$contest_status_val where contest_id=$contest_id");

}

public function deleteContest($id,$contest_id){
    if($contest_id == 1){
        $contest_name ='contest_name1';
    } else if ($contest_id == 2){
        $contest_name ='contest_name2';
    } else if ($contest_id == 3){
        $contest_name ='contest_name3';
    } else {
        $contest_name ='contest_name4';
    }
    $contest_qry = $this->db->query("update contest_list set $contest_name= NULL where contest_id=$id");
}
public function checkDuplicateContestList($spin_id,$category_id,$contest_name){
    $query = $this->db->query("select $contest_name from contest_list where spin_id=$spin_id and contest_category_id=$category_id");
    $result = $query->result();
    // return $result;
    if(!empty($result)){
        if(($result[0]->$contest_name != '')){
            return TRUE;
        }
        
    } else {
        return FALSE;
    }
}
public function checkconlst($spin_id,$category_id){
    $query = $this->db->query("select * from contest_list where spin_id=$spin_id and contest_category_id=$category_id");
    $result = $query->result();
    if(!empty($result[0])){
         if(($result[0]->contest_name1 != '') && ($result[0]->contest_name2 != '') && ($result[0]->contest_name3 != '') && ($result[0]->contest_name4 != '')){
        return TRUE;
         }
    } else {
        return FALSE;
    }
}

public function checkFilledConLst($spin_id,$category_id){
    $query = $this->db->query("select * from contest_list where spin_id=$spin_id and contest_category_id=$category_id");
    $result = $query->result();
    if(!empty($result)){
        $contest_name1 = ($result[0]->contest_name1 != NULL) ? '' : 'contest name1' ;
        $contest_name2 = ($result[0]->contest_name2 != NULL) ? '' :  'contest name2' ;
        $contest_name3 = ($result[0]->contest_name3 != NULL) ? '' :  'contest name3' ;
        $contest_name4 = ($result[0]->contest_name4 != NULL) ? '' :  'contest name4';
        return [$contest_name1,$contest_name2,$contest_name3,$contest_name4];
    }
  
    // if( ($result[0]->contest_name1 != '') && ($result[0]->contest_name2 != '') && ($result[0]->contest_name3 != '') && ($result[0]->contest_name4 != '')){
    //     return TRUE;
    // } else {
    //     return FALSE;
    // }
}

public function getContestId($spin_id,$category_id){
$query = $this->db->query("select * from contest_list where spin_id=$spin_id and contest_category_id=$category_id");
$result = $query->result();
if(!empty($result)){
    return $result[0]->contest_id;
} 

}

public function getDuplicateContent($con_id,$cont_name){
    $query = $this->db->query("select * from contest_list where (contest_name1='$cont_name' OR contest_name2='$cont_name' OR contest_name3='$cont_name' OR contest_name4='$cont_name') AND contest_id =$con_id");
    return  $result = $query->result();
    if(!empty($result)){
        return TRUE;
    } else {
        return FALSE;
    }
    
    }

    public function getCatName($category_id){
        $query = $this->db->query("select contest_category_name from contest_category_list where contest_category_id=$category_id ");
       return $query->result();
        
        
        }


}
?>