<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_show extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
        }
        public function index(){

            $data['employer'] = $this->user_model->GetAllEmployer();
            $data['totalemployer'] = $this->user_model->CountAllEmployer();
            $this->load->view('index',$data);
        }

        public function formulaire(){

            $data['totalemployer'] = $this->user_model->CountAllEmployer();
            $this->load->view('creer_un_employer',$data);
        }

        public function PresenceEmp(){

            $this->load->view('presence_employer');
        }

        public function ListBack(){
            $data['black'] = $this->user_model->GetAllBlackList();
            $data['totalemployer'] = $this->user_model->CountAllBlack();
            $this->load->view('liste_noir',$data);
        }
//=========================================================================================================
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
//=========================================================================================================
        public function CreateEmployer(){

            $this->form_validation->set_rules('nom', 'votre nom', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('postnom', 'votre post-nom', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('prenom', 'votre pre-nom', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('datenaissance', 'date de naissance', 'trim|required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('genre', 'votre genre', 'trim|required|min_length[1]|max_length[1]');
            $this->form_validation->set_rules('adressehome', 'home', 'trim|required|min_length[10]|max_length[50]');
            $this->form_validation->set_rules('email', 'votre e-mail', 'trim|required|min_length[12]|max_length[255]|valid_email');
            if($this->form_validation->run()){

                $config['upload_path'] = './assets/uploads/';
                $config['allowed_types'] = 'JPG|jpg|png|PNG';
                $config['max_size'] = 2048;
                $config['max_width'] = 2048;
                $config['max_height'] = 1028;
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
                    $data['totalemployer'] = $this->user_model->CountAllEmployer();
					$this->load->view('creer_un_employer',$data);
					
				}else{
                    $chemin= $this->upload->data();
					foreach ($chemin as $key => $value) {
						if ($key==='file_name') {
							$file = './assets/uploads/'.$value;
                        }
                    }

                    $number = $this->user_model->CountAllEmployer()+1;
                    $matricule = $number.$nom.$prenom[0];
                    $this->user_model->AddOneEmployer($nom,$postnom,$prenom,$naissance,$genre,$email,$adresse,$file,$matricule);
                    redirect();
                }

            }else{
                $data['totalemployer'] = $this->user_model->CountAllEmployer();
                $this->load->view('creer_un_employer',$data);
            }
            
        }

//=========================================================================================================
        public function Search(){
            $mot = strip_tags($this->input->post('mot'));
            $data['employer']= $this->user_model->SearchEmployer($mot);
            $data['totalemployer'] = $this->user_model->CountAllEmployer();
            $this->load->view('index',$data);
        }

//=========================================================================================================
        public function AddListBack(){

            $nom = $this->input->post('nom');
            $email = $this->input->post('email');
            $file = $this->input->post('file');
            $identity_compare = $this->user_model->IfExistBlack($nom,$email,$file);
            if(count($identity_compare)>0){
                $error['error'] = "cet agent est deja dans la liste noire";
                $this->session->flashdata($error);
                redirect($_SERVER['HTTP_REFERER']);
            }else{

                $this->user_model->AddOneBlackList($nom,$email,$file);
                $data['black'] = $this->user_model->GetAllBlackList();
                $data['totalemployer'] = $this->user_model->CountAllBlack();
                $this->load->view('liste_noir',$data);
            }
           
        }
//========================================================================================================
        public function TryDetect(){

            $config['upload_path'] = './assets/uploads/';
                $config['allowed_types'] = 'JPG|jpg|png|PNG';
                $config['max_size'] = 2048;
                $config['max_width'] = 2048;
                $config['max_height'] = 1028;
                $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload()){
                $data['error'] = $this->upload->display_errors();
                $this->load->view('presence_employer',$data);
                
            }else{
                $chemin= $this->upload->data();
                foreach ($chemin as $key => $value) {
                    if ($key==='file_name') {
                        $file = './assets/uploads/'.$value;
                    }
                }

                
                $img = imagecreatefromjpeg($file);
                $size = getimagesize($file);
                imagecolortransparent($img,200);
                imagefilledrectangle($img,$size[0]/2,$size[1]/2,$size[0]+50/2,$size[1]+50/2,4);
                header('Content-Type: image/png');
                imagepng($img);
                $this->load->view('presence_employer',$data);
            }
        }
//========================================================================================================
        public function DeleteListBack(){
            $id = $this->uri->segment(3);
            $this->user_model->DeleteOneInBlackList($id);
            redirect('user_show/ListBack');
        }
//=========================================================================================================
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
                    redirect('user_show/index');
                    
                }else{
                    $data['error'] = "erreur! entrez de bonnes donnees";
                    $this->session->set_flashdata($data);
                    //view
                }
            }else{
                //view
            }
        }




    }