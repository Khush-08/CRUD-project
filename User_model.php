<?php 
  class User_model extends CI_model{
        function create($formArray)
        {
          $this->db->insert('users',$formArray);//insert into users (name,email) values(?,?);
        }
        function all(){
          return $users= $this->db->get('users')->result_array();//select * from user
        }

        function getUser($userId){
          $this->db->where('user_id',$userId);
         return $user= $this->db->get('users')->row_array();//select * from user where user_id=?
        }

        function edit_user(){
          extract($this->input->post());
		$formArray = array(      
							'name' => $name,
							'email' => $email  );
		$this->db->where('user_id', $user_id);
		return $result = $this->db->update('users', $formArray);
        }

        function deleteUser($userId){
          $this->db->where('user_id',$userId);
          $this->db->delete('users' );//DELETE FROM wwwher user_id=? 
        }
  }
  ?>