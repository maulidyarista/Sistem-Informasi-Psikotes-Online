<?php
class User_model extends CI_Model{
    private $_table = "user";

    //cek username dan password user
    function auth_user($username,$password){
        $password2 = password_hash($password,PASSWORD_DEFAULT);
        $where = "username='$username' AND password='$password2' LIMIT 1";
        $this->db->where($where);
        $query = $this->db->get($this->_table);
        return $query;
    }
    function login_user($username,$password)
	{
        $query = $this->db->get_where($this->_table,array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data = $query->row();
            if (password_verify($password, $data->password)) {
				$this->session->set_userdata('is_login',TRUE);
                $this->session->set_userdata('akses',$data->id_level);
                $this->session->set_userdata('ses_id',$data->id_user);
                $this->session->set_userdata('ses_nama',$data->nama);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
    function input_data($data){
		$this->db->insert($this->_table,$data);
	}
    // Check username exists
    public function check_username_exists($username){
        $this->db->where('username', $username);
        $query = $this->db->get($this->_table);
        if(empty($query->row_array())){
            return true;
        } else {
            return false;
        }
   }
   public function check_kode_unik_exists($kode){
    $kode2 = "PSN".$kode;
    $where = "kode_unik='$kode2'";
    $this->db->where($where);
    $query = $this->db->get($this->_table);
    if(empty($query->row_array())){
        return true;
    } else {
        return false;
    }
}
    
 
}