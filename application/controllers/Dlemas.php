<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dlemas extends CI_Controller {
    public function index() {
        $this->load->view('input_form');
    }

    public function process_input() {
        // Proses inputan form di sini
        $data['nama'] = $this->input->post('nama');
        $data['nis'] = $this->input->post('nis');
        $data['kelas'] = $this->input->post('kelas');
        $data['tgl_lahir'] = $this->input->post('tgl_lahir');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['alamat'] = $this->input->post('alamat');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['agama'] = $this->input->post('agama');

        $this->load->view('input_result', $data);
    }
}
?>
