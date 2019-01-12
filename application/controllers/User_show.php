<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_show extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
        }
        public function index(){

            $data['employer'] = $this->user_model->GetAllEmployer();
            $this->load->view('index',$data);
        }

        public function formulaire(){

            $this->load->view('creer_un_employer');
        }

        public function DetailOneEp(){
            $id = $this->uri->segment(3);
            $date = $this->user_model->GetOneEmployer($id);
            foreach($date as $stat){
               $final_stat =  $stat->datefonctionEmp - $stat->datenaissanceEmp; 
            }
            $data['detail'] = $this->user_model->GetOneEmployer($id);
            $data['stat'] = $final_stat;
            $this->load->view('detail_employer',$data);
        }
        public function CreateEmployer(){

            $this->form_validation->set_rules('nom', 'votre nom', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('postnom', 'votre post-nom', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('prenom', 'votre pre-nom', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('datenaissance', 'date de naissance', 'trim|required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('genre', 'votre genre', 'trim|required|min_length[1]|max_length[1]');
            $this->form_validation->set_rules('adressehome', 'home', 'trim|required|min_length[10]|max_length[50]');
            $this->form_validation->set_rules('email', 'votre e-mail', 'trim|required|min_length[12]|max_length[255]|valid_email');
            if($this->form_validation->run()){

                $config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'JPG|jpg|png|PNG';
                $config['max_size']             = 100;
                $config['max_width']            = 2048;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);
                $nom =strip_tags( $this->input->post('nom'));
                $postnom = strip_tags($this->input->post('postnom'));
                $prenom = strip_tags($this->input->post('prenom'));
                $genre = strip_tags($this->input->post('genre'));
                $naissance = strip_tags($this->input->post('datenaissance'));
                $adresse = strip_tags($this->input->post('adressehome'));
                $email = strip_tags($this->input->post('email'));
                if ( ! $this->upload->do_upload()){
					$data['error'] = $this->upload->display_errors();
					$this->load->view('creer_un_employer',$data);
					
				}else{
                    $chemin= $this->upload->data();
					foreach ($chemin as $key => $value) {
						if ($key==='file_name') {
							$file = './assets/uploads/'.$value;
						}
                    }
                    $this->user_model->AddOneEmployer($nom,$postnom,$prenom,$naissance,$genre,$email,$adresse,$file);
                    echo "bien enregistrer";
                }

            }else{

                $this->load->view('creer_un_employer');
            }
            
        }

        public function LogEmployer(){
           
            $this->form_validation->set_rules('nom', 'nom', 'trim|required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[5]|max_length[50]|email_valid');
            if($this->form_validation->run()){
                $login = strip_tags($this->input->post('nom'));
                $pass = strip_tags($this->input->post('email'));
                $data = $this->user_model->LogInEmployer($login,$pass);
                if(count($data)>0){
                    $user = $data[0];

                    $user_data = ['nom'=>$user->nomEmp,
                                  'email'=>$user->emailEmp,
                                  'etat'=>true
                    ];
                    $this->session->userdata($user_data);
                    redirect('');
                    
                }else{
                    $data['error'] = "erreur! entrez de bonnes donnees";
                    $this->session->flashdata($data);
                    //view
                }
            }else{
                //view
            }
        }

        

    }