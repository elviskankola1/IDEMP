<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model {

        private $TableEmployer = 'employers' ;
        private $TableDossier = 'dossier';
        private $TableListeNoir = 'noirs';

        function __construct(){
            
            parent::__construct();
        }

        public function AddOneEmployer($nom,$postnom,$prenom,$datens,$genre,$email,$adresse,$photo,$mat){

            $this->db->set('nomEmp',$nom);
            $this->db->set('postnomEmp',$postnom);
            $this->db->set('prenomEmp',$prenom);
            $this->db->set('datenaissanceEmp',$datens);
            $this->db->set('genreEmp',$genre);
            $this->db->set('emailEmp',$email);
            $this->db->set('adressehomeEmp',$adresse);
            $this->db->set('photoEmp',$photo);
            $this->db->set('datefonctionEmp',date('Y'));
            $this->db->set('matriculeEmp',$mat);
            return $this->db->insert($this->TableEmployer);
        }
        public function AddOneDossier($diplomeetat,$diplomeetatsup,$lettre,$annex1,$annex2,$annex3,$nomemp){

            $this->db->set('diplomeetatDossier',$diplomeetat);
            $this->db->set('diplomesupDossier',$diplomeetatsup);
            $this->db->set('lettredemandeDossier',$lettre);
            $this->db->set('annex1',$annex1);
            $this->db->set('annex2',$annex2);
            $this->db->set('annex3',$annex3);
            $this->db->set('nomEmpDossier',$nomemp);
            return $this->db->insert($this->TableDossier);
        }

        public function AddOneBlackList($name,$email,$file){
            $this->db->set('nomNoir',$name);
            $this->db->set('emailNoir',$email);
            $this->db->set('photoNoir',$file);
            return $this->db->insert($this->TableListeNoir);
        }

        public function GetAllEmployer(){
            
            return $this->db->select(['idEmp','nomEmp','postnomEmp','prenomEmp','photoEmp','emailEmp'])->limit(100,0)->order_by('idEmp','desc')->get($this->TableEmployer)->result();
        }

        public function GetOneEmployer($id){
            return $this->db->select()->where('idEmp',$id)->get($this->TableEmployer)->result();
        }

        public function GetAllBlackList(){
            return $this->db->select()->limit(10,0)->order_by('idNoir','desc')->get($this->TableListeNoir)->result();
        }

        public function LogInEmployer($name,$matricule){

            return $this->db->where(['nomEmp'=>$name,'emailEmp'=>$matricule])->get($this->TableEmployer)->result();
        }

        public function CountAllEmployer(){

            return $this->db->count_all_results($this->TableEmployer);
        }

        public function SearchEmployer($string){
            return $this->db->select()->like('nomEmp',$string)->get($this->TableEmployer)->result();
        }

        public function DeleteOneInBlackList($id){

            return $this->db->where('idNoir',$id)->delete($this->TableListeNoir);
        }

        public function IfExistBlack($name,$email,$file){

            return $this->db->where(['nomNoir'=>$name,'emailNoir'=>$email,'photoNoir'=>$file])->get($this->TableListeNoir)->result();
        }
        

    }