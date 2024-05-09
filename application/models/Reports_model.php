<?php

class Reports_model extends CI_Model {

public function getWinnersGrpByCntest(){
    $contest_winners_list = $this->db->query('select contest_category,count(winner_id) as total_contestants,count(promote) as total_winners from contest_winners group by contest_category ');
    return $contest_winners_list->result();
 }
 
 public function getWinnersBySpinType($contest_category){
    $contest_winners_list_by_spintype = $this->db->query('select spin_type,count(winner_id) as total_contestants,count(promote) as total_winners from contest_winners where contest_category="'.$contest_category.'" group by spin_type');
    return $contest_winners_list_by_spintype->result();
 }

 public function getWinnersBySpinTypeFilter($contest_category,$selected_month,$selected_year,$contest_name,$spin_type){
   
    if(!empty($selected_month)){
        $selected_month_lst = " and month='$selected_month'";
    } else {
        $selected_month_lst = " ";
    }
    if(!empty($selected_year)){
        $selected_year_lst = " and year='$selected_year'";
    } else {
        $selected_year_lst = " ";
    }
    if(!empty($contest_name)){
        $contest_name_lst = " and contest_name='$contest_name'";
    } else {
        $contest_name_lst = " ";
    }
    if(!empty($spin_type)){
        $spin_type_lst = " and spin_type='$spin_type'";
    } else {
        $spin_type_lst = " ";
    }
    $contest_winners_list_by_spintype = $this->db->query('select spin_type,count(winner_id) as total_contestants,count(promote) as total_winners from contest_winners where contest_category="'.$contest_category.'" '.$selected_month_lst.' '.$selected_year_lst.' '.$contest_name_lst.' '.$spin_type_lst.' GROUP BY spin_type');
    // $contest_winners_list_by_spintype .= " GROUP BY spin_type";
    return $contest_winners_list_by_spintype->result();
 }
 
public function getAllCategoryContestDetails(){
    $contest_category_list_info = $this->db->query('select contest_category from contest_winners group by contest_category');
    return $contest_category_list_info->result();
}

public function getAllContestName(){
    $AllContestName = $this->db->query('select contest_name from contest_winners group by contest_name');
    return $AllContestName->result();
}
public function getAllSpintype(){
    $AllSpintype = $this->db->query('select spin_type from contest_winners group by spin_type');
    return $AllSpintype->result();
}
public function getTotalContestants(){
    $TotalContestants = $this->db->query('select * from contest_winners');
    return $TotalContestants->result();
}
public function getTotalWinners(){
    $TotalWinners = $this->db->query('select * from contest_winners where promote IS NOT NULL');
    return $TotalWinners->result();
}

public function getWinners($category_type){
    $TotalWinners = $this->db->query('select * from contest_winners where promote IS NOT NULL and contest_category="'.$category_type.'"');
    return $TotalWinners->result();
}

public function getcontestname($category_type){
    $contest_category_list_info = $this->db->query('select * from contest_winners where contest_category="'.$category_type.'" group by contest_name');
    return $contest_category_list_info->result();
}
public function getspin_type($category_type){
    $contest_category_list_info = $this->db->query('select * from contest_winners where contest_category="'.$category_type.'" group by spin_type');
    return $contest_category_list_info->result();
}
public function gettotal_contestants($category_type){
    $contest_category_list_info = $this->db->query('select * from contest_winners where contest_category="'.$category_type.'" group by name');
    return $contest_category_list_info->result();
}

public function getMonth($category_type){
    $contest_category_list_info = $this->db->query('select * from contest_winners where contest_category="'.$category_type.'" group by month');
    return $contest_category_list_info->result();
}

public function getyear($category_type){
    $contest_category_list_info = $this->db->query('select * from contest_winners where contest_category="'.$category_type.'" group by year');
    return $contest_category_list_info->result();
}

public function getYearByMonth($month){
    $month_list_info = $this->db->query('select * from contest_winners where month="'.$month.'" group by year');
    return $month_list_info->result();
}


public function getAllContestWinners(){
    $contest_winners_info = $this->db->get('contest_winners')->result();
    return $contest_winners_info;
}

public function storeWinners($data){
    $this->db->insert('contest_winners',$data);
}

public function getUniqueMonth(){
    $date_query = $this->db->query('select month from contest_winners group by month');
    return $date_query->result();
}

public function getUniqueYear(){
    $date_query = $this->db->query('select year from contest_winners group by year	');
    return $date_query->result();
}


public function getWinnersInfoById($id){
    $query = $this->db->query("select *  from contest_winners where winner_id =$id");
    return $query->result();
}

public function getWinnersByDateAndCategory($selected_category_type,$selected_month,$selected_year,$contest_name,$spin_type)
{ 
    $query = "select contest_category,count(winner_id) as total_contestants,count(promote) as total_winners from contest_winners where contest_category='$selected_category_type'";
    if(!empty($selected_month)){
        $query .= " and month='$selected_month'";
    }
    if(!empty($selected_year)){
        $query .= " and year='$selected_year'";
    }
    if(!empty($contest_name)){
        $query .= " and contest_name='$contest_name'";
    }
    if(!empty($spin_type)){
        $query .= " and spin_type='$spin_type'";
    }
    $query_result = $this->db->query($query);
   
    return $query_result->result();
}

public function getWinnerslistfilter($selected_category_type,$selected_month,$selected_year,$contest_name,$spin_type)
{ 
    $query = "select * from contest_winners where contest_category='$selected_category_type'";
    if(!empty($selected_month)){
        $query .= " and month='$selected_month'";
    }
    if(!empty($selected_year)){
        $query .= " and year='$selected_year'";
    }
    if(!empty($contest_name)){
        $query .= "and contest_name='$contest_name'";
    }
    if(!empty($spin_type)){
        $query .= " and spin_type='$spin_type'";
    }
    $query_result = $this->db->query($query);
   
    return $query_result->result();
}

public function getWinnersByPromote($selected_category_type,$selected_month,$selected_year,$contest_name,$spin_type)
{ 
    $query = "select * from contest_winners where contest_category='$selected_category_type' and promote IS NOT NULL";
    if(!empty($selected_month)){
        $query .= " and month='$selected_month'";
    }
    if(!empty($selected_year)){
        $query .= " and year='$selected_year'";
    }
    if(!empty($contest_name)){
        $query .= " and contest_name='$contest_name'";
    }
    if(!empty($spin_type)){
        $query .= " and spin_type='$spin_type'";
    }
    $query_result = $this->db->query($query);
   
    return $query_result->result();
}



public function updateWinner($id){
    $contest_qry = $this->db->query("update contest_winners set promote=1 where winner_id =$id");

}



public function deleteWinner($id){
    $this->db->delete('contest_winners',['winner_id'=>$id ]);
}
// public function checkDuplicateContestList($spin_id,$category_id,$contest_name){
//     $query = $this->db->query("select $contest_name from contest_list where spin_id=$spin_id and contest_category_id=$category_id");
//     $result = $query->result();
//     // return $result;
//     if(!empty($result)){
//         if(($result[0]->$contest_name != '')){
//             return TRUE;
//         }
        
//     } else {
//         return FALSE;
//     }
// }
// public function checkconlst($spin_id,$category_id){
//     $query = $this->db->query("select * from contest_list where spin_id=$spin_id and contest_category_id=$category_id");
//     $result = $query->result();
//     if(!empty($result[0])){
//          if(($result[0]->contest_name1 != '') && ($result[0]->contest_name2 != '') && ($result[0]->contest_name3 != '') && ($result[0]->contest_name4 != '')){
//         return TRUE;
//          }
//     } else {
//         return FALSE;
//     }
// }

// public function checkFilledConLst($spin_id,$category_id){
//     $query = $this->db->query("select * from contest_list where spin_id=$spin_id and contest_category_id=$category_id");
//     $result = $query->result();
//     if(!empty($result)){
//         $contest_name1 = ($result[0]->contest_name1 != NULL) ? '' : 'contest name1' ;
//         $contest_name2 = ($result[0]->contest_name2 != NULL) ? '' :  'contest name2' ;
//         $contest_name3 = ($result[0]->contest_name3 != NULL) ? '' :  'contest name3' ;
//         $contest_name4 = ($result[0]->contest_name4 != NULL) ? '' :  'contest name4';
//         return [$contest_name1,$contest_name2,$contest_name3,$contest_name4];
//     }
  
//     // if( ($result[0]->contest_name1 != '') && ($result[0]->contest_name2 != '') && ($result[0]->contest_name3 != '') && ($result[0]->contest_name4 != '')){
//     //     return TRUE;
//     // } else {
//     //     return FALSE;
//     // }
// }

// public function getContestId($spin_id,$category_id){
// $query = $this->db->query("select * from contest_list where spin_id=$spin_id and contest_category_id=$category_id");
// $result = $query->result();
// if(!empty($result)){
//     return $result[0]->contest_id;
// } 

// }

// public function getDuplicateContent($con_id,$cont_name){
//     $query = $this->db->query("select * from contest_list where (contest_name1='$cont_name' OR contest_name2='$cont_name' OR contest_name3='$cont_name' OR contest_name4='$cont_name') AND contest_id =$con_id");
//     return  $result = $query->result();
//     if(!empty($result)){
//         return TRUE;
//     } else {
//         return FALSE;
//     }
    
//     }


}
?>