<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
 
    function index(){
        $this->load->view('akun/login');
    }
 
    function auth(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('akun/login');
        }else{

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if($this->User_model->login_user($username,$password))
            {
                redirect('admin');
            }
            else
            {
                $this->session->set_flashdata('msg','Username & Password salah');
                redirect('login');
            }
            // $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
            // $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        
            // $cek_user=$this->User_model->auth_user($username,$password);
        
            // if($cek_user->num_rows() > 0){ //jika login sebagai dosen
            //     $data=$cek_user->row_array();
            //     $this->session->set_userdata('masuk',TRUE);
            //     $this->session->set_userdata('akses',$data['id_level']);
            //     $this->session->set_userdata('ses_id',$data['id_user']);
            //     $this->session->set_userdata('ses_nama',$data['nama']);
            //     redirect('admin');
 
                 
 
            // }else{
                
            //     echo $this->session->set_flashdata('msg','Username Atau Password Salah');
            //     $this->load->view('akun/login');
                    
            // }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }
    public function register()
    {
        $data['main'] = 'Register Akun';
        $this->load->view('akun/register');
    }
    function insert_data(){

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password1]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required|numeric');
        $this->form_validation->set_rules('kode_unik', 'Kode_unik', 'required|callback_check_kode_unik_exists|numeric');
        $this->form_validation->set_rules('check_2', 's&k', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('akun/register');
        }else{
            $username = $this->input->post('username');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = $this->input->post('password1');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
		    $alamat = $this->input->post('alamat');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $no_telp = $this->input->post('no_telp');
            $kode_unik = $this->input->post('kode_unik');
		    $data = array(
                'username' => $username,
                'password' => password_hash($password,PASSWORD_DEFAULT),
			    'nama' => $name,
                'jk' => $jenis_kelamin,
                'alamat' => $alamat,
                'tgl_lahir' => $tgl_lahir,
                'email' => $email,
                'no_hp' => $no_telp,
                'kode_unik'=>$kode_unik,
                'id_level'=>'5'
			);
		    $this->User_model->input_data($data);
		    redirect('login');
        }
		
	}
    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'Username Sudah diambil. Silahkan gunakan username lain');
        if($this->User_model->check_username_exists($username)){
            return true;
        } else {
            return false;
        }
    }
    public function check_kode_unik_exists($kode_unik){
        $this->form_validation->set_message('check_kode_unik_exists', 'Username Sudah diambil. Silahkan gunakan username lain');
        if($this->User_model->check_kode_unik_exists($kode_unik)){
            return true;
        } else {
            return false;
        }
    }
}