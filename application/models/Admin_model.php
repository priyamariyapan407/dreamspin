<?php

class Admin_model extends CI_Model {
    
   function checkPassword($email, $password)
   {
    $query = $this->db->query("select * from admin where email='$email' and password='$password'");
    if($query->num_rows() == 1){
        return $query->row();
    } else {
        return false;
    }
   }

   public function getUsersCount(){
    $my_members = $this->db->get('my_members')->result();
    return count($my_members);
   }

   public function getChartInfo(){
    $my_members_count = $this->db->query('SELECT count(*) as user_count,created_at FROM `my_members` group by created_at order by created_at ASC');
    return $my_members_count->result();
   }
   

   public function getCategoriesAndCounts(){
    // $my_members = $this->db->query("SELECT ccl.contest_category_name,cl.contest_name1,cl.contest_name2,cl.contest_name3,cl.contest_name4
    // FROM contest_list cl
    // INNER JOIN contest_category_list ccl ON cl.contest_category_name = ccl.contest_category_name");
    $my_members = $this->db->query("SELECT * from contest_list");
    return $my_members->result();
   }

}

?>