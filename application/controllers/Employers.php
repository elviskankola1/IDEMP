<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Employers extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Employers_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'employers/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'employers/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'employers/index.html';
            $config['first_url'] = base_url() . 'employers/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Employers_model->total_rows($q);
        $employers = $this->Employers_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'employers_data' => $employers,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('employers/employers_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Employers_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idEmp' => $row->idEmp,
		'nomEmp' => $row->nomEmp,
		'postnomEmp' => $row->postnomEmp,
		'prenomEmp' => $row->prenomEmp,
		'datenaissanceEmp' => $row->datenaissanceEmp,
		'genreEmp' => $row->genreEmp,
		'adressehomeEmp' => $row->adressehomeEmp,
		'emailEmp' => $row->emailEmp,
		'photoEmp' => $row->photoEmp,
		'idDossier' => $row->idDossier,
		'datefonctionEmp' => $row->datefonctionEmp,
		'matriculeEmp' => $row->matriculeEmp,
	    );
            $this->load->view('employers/employers_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('employers'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('employers/create_action'),
	    'idEmp' => set_value('idEmp'),
	    'nomEmp' => set_value('nomEmp'),
	    'postnomEmp' => set_value('postnomEmp'),
	    'prenomEmp' => set_value('prenomEmp'),
	    'datenaissanceEmp' => set_value('datenaissanceEmp'),
	    'genreEmp' => set_value('genreEmp'),
	    'adressehomeEmp' => set_value('adressehomeEmp'),
	    'emailEmp' => set_value('emailEmp'),
	    'photoEmp' => set_value('photoEmp'),
	    'idDossier' => set_value('idDossier'),
	    'datefonctionEmp' => set_value('datefonctionEmp'),
	    'matriculeEmp' => set_value('matriculeEmp'),
	);
        $this->load->view('employers/employers_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nomEmp' => $this->input->post('nomEmp',TRUE),
		'postnomEmp' => $this->input->post('postnomEmp',TRUE),
		'prenomEmp' => $this->input->post('prenomEmp',TRUE),
		'datenaissanceEmp' => $this->input->post('datenaissanceEmp',TRUE),
		'genreEmp' => $this->input->post('genreEmp',TRUE),
		'adressehomeEmp' => $this->input->post('adressehomeEmp',TRUE),
		'emailEmp' => $this->input->post('emailEmp',TRUE),
		'photoEmp' => $this->input->post('photoEmp',TRUE),
		'idDossier' => $this->input->post('idDossier',TRUE),
		'datefonctionEmp' => $this->input->post('datefonctionEmp',TRUE),
		'matriculeEmp' => $this->input->post('matriculeEmp',TRUE),
	    );

            $this->Employers_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('employers'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Employers_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('employers/update_action'),
		'idEmp' => set_value('idEmp', $row->idEmp),
		'nomEmp' => set_value('nomEmp', $row->nomEmp),
		'postnomEmp' => set_value('postnomEmp', $row->postnomEmp),
		'prenomEmp' => set_value('prenomEmp', $row->prenomEmp),
		'datenaissanceEmp' => set_value('datenaissanceEmp', $row->datenaissanceEmp),
		'genreEmp' => set_value('genreEmp', $row->genreEmp),
		'adressehomeEmp' => set_value('adressehomeEmp', $row->adressehomeEmp),
		'emailEmp' => set_value('emailEmp', $row->emailEmp),
		'photoEmp' => set_value('photoEmp', $row->photoEmp),
		'idDossier' => set_value('idDossier', $row->idDossier),
		'datefonctionEmp' => set_value('datefonctionEmp', $row->datefonctionEmp),
		'matriculeEmp' => set_value('matriculeEmp', $row->matriculeEmp),
	    );
            $this->load->view('employers/employers_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('employers'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idEmp', TRUE));
        } else {
            $data = array(
		'nomEmp' => $this->input->post('nomEmp',TRUE),
		'postnomEmp' => $this->input->post('postnomEmp',TRUE),
		'prenomEmp' => $this->input->post('prenomEmp',TRUE),
		'datenaissanceEmp' => $this->input->post('datenaissanceEmp',TRUE),
		'genreEmp' => $this->input->post('genreEmp',TRUE),
		'adressehomeEmp' => $this->input->post('adressehomeEmp',TRUE),
		'emailEmp' => $this->input->post('emailEmp',TRUE),
		'photoEmp' => $this->input->post('photoEmp',TRUE),
		'idDossier' => $this->input->post('idDossier',TRUE),
		'datefonctionEmp' => $this->input->post('datefonctionEmp',TRUE),
		'matriculeEmp' => $this->input->post('matriculeEmp',TRUE),
	    );

            $this->Employers_model->update($this->input->post('idEmp', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('employers'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Employers_model->get_by_id($id);

        if ($row) {
            $this->Employers_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('employers'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('employers'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nomEmp', 'nomemp', 'trim|required');
	$this->form_validation->set_rules('postnomEmp', 'postnomemp', 'trim|required');
	$this->form_validation->set_rules('prenomEmp', 'prenomemp', 'trim|required');
	$this->form_validation->set_rules('datenaissanceEmp', 'datenaissanceemp', 'trim|required');
	$this->form_validation->set_rules('genreEmp', 'genreemp', 'trim|required');
	$this->form_validation->set_rules('adressehomeEmp', 'adressehomeemp', 'trim|required');
	$this->form_validation->set_rules('emailEmp', 'emailemp', 'trim|required');
	$this->form_validation->set_rules('photoEmp', 'photoemp', 'trim|required');
	$this->form_validation->set_rules('idDossier', 'iddossier', 'trim|required');
	$this->form_validation->set_rules('datefonctionEmp', 'datefonctionemp', 'trim|required');
	$this->form_validation->set_rules('matriculeEmp', 'matriculeemp', 'trim|required');

	$this->form_validation->set_rules('idEmp', 'idEmp', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "employers.xls";
        $judul = "employers";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "NomEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "PostnomEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "PrenomEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "DatenaissanceEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "GenreEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "AdressehomeEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "EmailEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "PhotoEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "IdDossier");
	xlsWriteLabel($tablehead, $kolomhead++, "DatefonctionEmp");
	xlsWriteLabel($tablehead, $kolomhead++, "MatriculeEmp");

	foreach ($this->Employers_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomEmp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->postnomEmp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->prenomEmp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->datenaissanceEmp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->genreEmp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->adressehomeEmp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->emailEmp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->photoEmp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idDossier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->datefonctionEmp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->matriculeEmp);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Employers.php */
/* Location: ./application/controllers/Employers.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-14 14:42:30 */
/* http://harviacode.com */