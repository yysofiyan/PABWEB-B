<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

     public function __construct() {
         parent::__construct();
         $this->load->model('Auth_model');
     }

	public function login() {
        $form_open = form_open('auth/cek_login');
        $form_close = form_close();
        $label_email = form_label('Email', 'email');
        $label_password = form_label('Password', 'password');
        $input_email = form_input('email');
        $input_password = form_password('password');
        $submit = form_submit('login', 'submit');
        $data = array(
            'form_open' => $form_open,
            'form_close' => $form_close,
            'label_email' => $label_email,
            'label_password' => $label_password,
            'input_email' => $input_email,
            'input_password' => $input_password,
            'submit' => $submit,
        );
		$this->load->view('Auth/login_view', $data);
    }
    
    public function cek_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'email' => $email,
            'password' => md5($password),
        );

        $cek_user = $this->Auth_model->cek_user($data);
        if ($cek_user->num_rows() > 0) {
            $row = $cek_user->rows();
            $email = $row->email;
            $nama_lengkap = $row->nama_lengkap;
            $user = array(
                'email' => $email,
                'nama_lengkap' => $nama_lengkap
            );
            $this->session->set_userdata($user);
            redirect('Home');
        } else {
            redirect('login');
            $this->session->set_flashdata('pesan', 'Username atau Password salah !');
        }
    }

    public function hapus_session() {
        $this->session->unset_userdata('nama_lengkap');
        redirect('Home');
    }

    public function Logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
