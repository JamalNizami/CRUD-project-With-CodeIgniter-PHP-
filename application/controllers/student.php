<?php 

    class Student extends CI_controller{

        public function add(){
            $this->load->model('StudentModel');
            $this->form_validation->set_rules('Roll_No', 'Roll No' , 'required');
            $this->form_validation->set_rules('Student_Name', 'Student Name' , 'required');
            $this->form_validation->set_rules('Email', 'Email' , 'required|valid_email');
            $this->form_validation->set_rules('Semester', 'Semester' , 'required');
            
            if($this->form_validation->run() == false){
                $this->load->view('add'); 
                
            }
            else{

                $arrayForm = array();
                $arrayForm['Roll_No'] = $this->input->post('Roll_No');
                $arrayForm['Student_Name'] = $this->input->post('Student_Name');
                $arrayForm['Email'] = $this->input->post('Email');
                $arrayForm['Semester'] = $this->input->post('Semester');
                $this->StudentModel->add($arrayForm);
                $this->session->set_flashdata('success', ' Record added successfully ');
                redirect(base_url()."index.php/student/index");
                
            }

        }

        public function index(){
            $this->load->model('StudentModel');
            $users = $this->StudentModel->all();
            $data = array();
            $data['users'] = $users;
            $this->load->view('list',$data);
        }

        public function edit($Roll_No){
            $this->load->model('StudentModel');
            $user = $this->StudentModel->getStudent($Roll_No);
            $data = array();
            $data['user']= $user;

            $this->form_validation->set_rules('Roll_No', 'Roll No' , 'required');
            $this->form_validation->set_rules('Student_Name', 'Student Name' , 'required');
            $this->form_validation->set_rules('Email', 'Email' , 'required|valid_email');
            $this->form_validation->set_rules('Semester', 'Semester' , 'required');

            if($this->form_validation->run() == false){
                $this->load->view('edit',$data);
            }
            else{
                $arrayForm = array();
                $arrayForm['Roll_No'] = $this->input->post('Roll_No');
                $arrayForm['Student_Name'] = $this->input->post('Student_Name');
                $arrayForm['Email'] = $this->input->post('Email');
                $arrayForm['Semester'] = $this->input->post('Semester');
                $this->StudentModel->updateStudent($Roll_No,$arrayForm);
                $this->session->set_flashdata('success', ' Record update successfully ');
                redirect(base_url().'index.php/student/index');
            }
        }

        public function delete($Roll_No){
            $this->load->model('StudentModel');
            $user = $this->StudentModel->getStudent($Roll_No);
            if(empty($user)){
                $this->session->set_flashdata('failure', ' Record not Found in the DataBase ');
                redirect(base_url().'index.php/student/index');
            }
            else{
                $this->StudentModel->deleteStudent($Roll_No);
                $this->session->set_flashdata('success', ' Record Deleted From DataBase');
                redirect(base_url().'index.php/student/index');
            }
        }
    }


?>