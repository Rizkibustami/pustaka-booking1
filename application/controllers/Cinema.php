<?php
class Cinema extends CI_Controller {
    public function index()
    {
        $this->load->view('view-input-cinema');
    }
    public function cetak()
    {
$data= [
        'nmpemesan'=> $this->input->post('nmpemesan'),
        'jdlfilm'=> $this->input->post('jdlfilm'),
        'jam'=> $this->input->post('jam'),
        'tipe'=> $this->input->post('tipe'),
        'jmlpesan'=> $this->input->post('jmlpesan'),
        'tarifsewa'=> $this->input->post('tarifsewa'),
        'total'=> $this->input->post('total'),
];
        $this->load->view('view-output-cinema',$data);
    }
}