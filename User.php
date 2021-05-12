<?php
class User extends CI_controller{

    
     
  public  function index(){
        
        $this->load->model('User_model');
        $data['user'] = $this->User_model->all();
        // print_r($data);die;
    
        $this->load->view('list',$data);
    }


   public function create(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if ($this->form_validation->run()==false){
        
           $this->load->view('create');
        
        }else {
            //save user to database
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['email']=$this->input->post('email');
            $formArray['created_at']=date('Y-m-d');

            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','Record added successfully!');
            redirect(base_url().'index.php/user/index');
        }
    }

    function edit(){
       $user_id = $this->input->get('user_id');
       $this->load->model('User_model');
      $data['user'] = $this->User_model->getUser($user_id);
    //   print_r($data);die;
    $this->load->view('edit',$data);

    }

    function edit_user()
    {
        $this->load->model('User_model');
        $this->User_model->edit_user();
        $this->session->set_flashdata('success','record successfully updated');
        redirect(base_url().'index.php/user/index');
    }

    function delete($userId){
        // print_r($userId);die;
        $this->load->model('User_model');
     
        $this->User_model->deleteUser($userId);
        $this->session->set_flashdata('success','record deleted successfully');
        redirect(base_url().'index.php/user/index');
        
    }
}

?>