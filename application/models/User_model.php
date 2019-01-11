<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model {

        private $TableEmployer = 'employers' ;
        private $TableDossier = 'dossier';

        function __construct(){
            
            parent::__construct();
        }

        public function AddOneEmployer($nom,$postnom,$prenom,$datens,$genre,$email,$adresse,$photo){

            $this->db->set('nomEmp',$nom);
            $this->db->set('postnomEmp',$postnom);
            $this->db->set('prenomEmp',$prenom);
            $this->db->set('datenaissanceEmp',$datens);
            $this->db->set('genreEmp',$genre);
            $this->db->set('emailEmp',$email);
            $this->db->set('adressehomeEmp',$adresse);
            $this->db->set('photoEmp',$photo);
            return $this->db->insert($this->TableEmployer);
        }
        public function AddoneDossier(){

            $this->db->set('diplomeetatDossier','ok');
            $this->db->set('diplomesupDossier','ok');
            $this->db->set('lettredemandeDossier','ok');
            return $this->db->insert($this->TableDossier);
        }

        public function GetAllEmployer(){
            
            return $this->db->select(['nomEmp','postnomEmp','prenomEmp','photoEmp','emailEmp'])->limit(100,0)->order_by('idEmp','desc')->get($this->TableEmployer)->result();
        }

        public function GetOneEmployer($id){
            return $this->db->select()->where('idEmp',$id)->get($this->TableEmployer)->result();
        }


    }