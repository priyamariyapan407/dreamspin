<?php

class Contest_winners_model extends CI_Model {
    
public function getAllCategoryContestDetails(){
    $contest_category_list_info = $this->db->query('select contest_category from contest_winners group by contest_category');
    return $contest_category_list_info->result();
}

public function getCategoryByCategoryId($category_type){
    $contest_category_list_info = $this->db->query('select * from contest_winners where contest_category="'.$category_type.'" group by month');
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

public function getSpinTimeInfo($mob_number){
    $query = $this->db->query("select created_at_datetime from contest_winners where member_id =$mob_number");
    return $query->result();
}


public function getWinnersByDateAndCategory($selected_category_type,$selected_month,$selected_year)
{
    $query = "select * from contest_winners where contest_category='$selected_category_type'";
    if(!empty($selected_month)){
        $query .= " and month='$selected_month'";
    }
    if(!empty($selected_year)){
        $query .= " and year='$selected_year'";
    }
    // $query .= "group by created_at";
    $query_result = $this->db->query($query);
   
    return $query_result->result();
}



public function updateWinner($id){
    $contest_qry = $this->db->query("update contest_winners set promote=1 where winner_id =$id");

}


public function deleteWinner($id){
    $this->db->delete('contest_winners',['winner_id'=>$id ]);
}


}
?>