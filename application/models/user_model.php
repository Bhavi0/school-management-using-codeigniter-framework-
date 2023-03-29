<?php

class User_model extends ci_model{
  public function login($email, $password){
    $result = $this->db->where(['email' => $email, 'password' => $password])
    ->get('users');

    if($result->num_rows() > 0)
			{
				return $result->row();
			}
  }

public function getSchoolName(){
  $school_name = $this->db->get('school_table');
  return $school_name->row_array();
}
public function getSchool(){
  $school_name = $this->db->get('school_table');
  return $school_name->result();
}

public function edit_school_name($id, $edit_school){

    $this->db->where('id', $id);
    $this->db->update('school_table', $edit_school);
}
}