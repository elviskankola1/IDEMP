<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Noirs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Noirs_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'noirs/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'noirs/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'noirs/index.html';
            $config['first_url'] = base_url() . 'noirs/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Noirs_model->total_rows($q);
        $noirs = $this->Noirs_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'noirs_data' => $noirs,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('noirs/noirs_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Noirs_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idNoir' => $row->idNoir,
		'nomNoir' => $row->nomNoir,
		'emailNoir' => $row->emailNoir,
		'photoNoir' => $row->photoNoir,
	    );
            $this->load->view('noirs/noirs_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('noirs'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('noirs/create_action'),
	    'idNoir' => set_value('idNoir'),
	    'nomNoir' => set_value('nomNoir'),
	    'emailNoir' => set_value('emailNoir'),
	    'photoNoir' => set_value('photoNoir'),
	);
        $this->load->view('noirs/noirs_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nomNoir' => $this->input->post('nomNoir',TRUE),
		'emailNoir' => $this->input->post('emailNoir',TRUE),
		'photoNoir' => $this->input->post('photoNoir',TRUE),
	    );

            $this->Noirs_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('noirs'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Noirs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('noirs/update_action'),
		'idNoir' => set_value('idNoir', $row->idNoir),
		'nomNoir' => set_value('nomNoir', $row->nomNoir),
		'emailNoir' => set_value('emailNoir', $row->emailNoir),
		'photoNoir' => set_value('photoNoir', $row->photoNoir),
	    );
            $this->load->view('noirs/noirs_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('noirs'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idNoir', TRUE));
        } else {
            $data = array(
		'nomNoir' => $this->input->post('nomNoir',TRUE),
		'emailNoir' => $this->input->post('emailNoir',TRUE),
		'photoNoir' => $this->input->post('photoNoir',TRUE),
	    );

            $this->Noirs_model->update($this->input->post('idNoir', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('noirs'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Noirs_model->get_by_id($id);

        if ($row) {
            $this->Noirs_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('noirs'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('noirs'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nomNoir', 'nomnoir', 'trim|required');
	$this->form_validation->set_rules('emailNoir', 'emailnoir', 'trim|required');
	$this->form_validation->set_rules('photoNoir', 'photonoir', 'trim|required');

	$this->form_validation->set_rules('idNoir', 'idNoir', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "noirs.xls";
        $judul = "noirs";
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
	xlsWriteLabel($tablehead, $kolomhead++, "NomNoir");
	xlsWriteLabel($tablehead, $kolomhead++, "EmailNoir");
	xlsWriteLabel($tablehead, $kolomhead++, "PhotoNoir");

	foreach ($this->Noirs_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nomNoir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->emailNoir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->photoNoir);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Noirs.php */
/* Location: ./application/controllers/Noirs.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-14 14:42:30 */
/* http://harviacode.com */