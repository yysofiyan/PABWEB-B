<?php

class Auth_model extends CI_model {
    public function cek_user($data) {
        return $this->db->get_where('users', $data);
    }
}