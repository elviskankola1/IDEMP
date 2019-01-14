<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dossier extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dossier_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'dossier/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'dossier/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'dossier/index.html';
            $config['first_url'] = base_url() . 'dossier/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Dossier_model->total_rows($q);
        $dossier = $this->Dossier_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'dossier_data' => $dossier,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('dossier/dossier_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Dossier_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idDossier' => $row->idDossier,
		'diplomeetatDossier' => $row->diplomeetatDossier,
		'diplomesupDossier' => $row->diplomesupDossier,
		'lettredemandeDossier' => $row->lettredemandeDossier,
		'annex1Dossier' => $row->annex1Dossier,
		'annex2Dossier' => $row->annex2Dossier,
		'annex3Dossier' => $row->annex3Dossier,
		'nomEmpDossier' => $row->nomEmpDossier,
	    );
            $this->load->view('dossier/dossier_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dossier'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('dossier/create_action'),
	    'idDossier' => set_value('idDossier'),
	    'diplomeetatDossier' => set_value('diplomeetatDossier'),
	    'diplomesupDossier' => set_value('diplomesupDossier'),
	    'lettredemandeDossier' => set_value('lettredemandeDossier'),
	    'annex1Dossier' => set_value('annex1Dossier'),
	    'annex2Dossier' => set_value('annex2Dossier'),
	    'annex3Dossier' => set_value('annex3Dossier'),
	    'nomEmpDossier' => set_value('nomEmpDossier'),
	);
        $this->load->view('dossier/dossier_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'diplomeetatDossier' => $this->input->post('diplomeetatDossier',TRUE),
		'diplomesupDossier' => $this->input->post('diplomesupDossier',TRUE),
		'lettredemandeDossier' => $this->input->post('lettredemandeDossier',TRUE),
		'annex1Dossier' => $this->input->post('annex1Dossier',TRUE),
		'annex2Dossier' => $this->input->post('annex2Dossier',TRUE),
		'annex3Dossier' => $this->input->post('annex3Dossier',TRUE),
		'nomEmpDossier' => $this->input->post('nomEmpDossier',TRUE),
	    );

            $this->Dossier_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dossier'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Dossier_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dossier/update_action'),
		'idDossier' => set_value('idDossier', $row->idDossier),
		'diplomeetatDossier' => set_value('diplomeetatDossier', $row->diplomeetatDossier),
		'diplomesupDossier' => set_value('diplomesupDossier', $row->diplomesupDossier),
		'lettredemandeDossier' => set_value('lettredemandeDossier', $row->lettredemandeDossier),
		'annex1Dossier' => set_value('annex1Dossier', $row->annex1Dossier),
		'annex2Dossier' => set_value('annex2Dossier', $row->annex2Dossier),
		'annex3Dossier' => set_value('annex3Dossier', $row->annex3Dossier),
		'nomEmpDossier' => set_value('nomEmpDossier', $row->nomEmpDossier),
	    );
            $this->load->view('dossier/dossier_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dossier'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idDossier', TRUE));
        } else {
            $data = array(
		'diplomeetatDossier' => $this->input->post('diplomeetatDossier',TRUE),
		'diplomesupDossier' => $this->input->post('diplomesupDossier',TRUE),
		'lettredemandeDossier' => $this->input->post('lettredemandeDossier',TRUE),
		'annex1Dossier' => $this->input->post('annex1Dossier',TRUE),
		'annex2Dossier' => $this->input->post('annex2Dossier',TRUE),
		'annex3Dossier' => $this->input->post('annex3Dossier',TRUE),
		'nomEmpDossier' => $this->input->post('nomEmpDossier',TRUE),
	    );

            $this->Dossier_model->update($this->input->post('idDossier', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dossier'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dossier_model->get_by_id($id);

        if ($row) {
            $this->Dossier_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dossier'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dossier'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('diplomeetatDossier', 'diplomeetatdossier', 'trim|required');
	$this->form_validation->set_rules('diplomesupDossier', 'diplomesupdossier', 'trim|required');
	$this->form_validation->set_rules('lettredemandeDossier', 'lettredemandedossier', 'trim|required');
	$this->form_validation->set_rules('annex1Dossier', 'annex1dossier', 'trim|required');
	$this->form_validation->set_rules('annex2Dossier', 'annex2dossier', 'trim|required');
	$this->form_validation->set_rules('annex3Dossier', 'annex3dossier', 'trim|required');
	$this->form_validation->set_rules('nomEmpDossier', 'nomempdossier', 'trim|required');

	$this->form_validation->set_rules('idDossier', 'idDossier', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "dossier.xls";
        $judul = "dossier";
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
	xlsWriteLabel($tablehead, $kolomhead++, "DiplomeetatDossier");
	xlsWriteLabel($tablehead, $kolomhead++, "DiplomesupDossier");
	xlsWriteLabel($tablehead, $kolomhead++, "LettredemandeDossier");
	xlsWriteLabel($tablehead, $kolomhead++, "Annex1Dossier");
	xlsWriteLabel($tablehead, $kolomhead++, "Annex2Dossier");
	xlsWriteLabel($tablehead, $kolomhead++, "Annex3Dossier");
	xlsWriteLabel($tablehead, $kolomhead++, "NomEmpDossier");

	foreach ($this->Dossier_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diplomeetatDossier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diplomesupDossier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lettredemandeDossier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->annex1Dossier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->annex2Dossier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->annex3Dossier);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomEmpDossier);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Dossier.php */
/* Location: ./application/controllers/Dossier.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-14 14:42:30 */
/* http://harviacode.com */